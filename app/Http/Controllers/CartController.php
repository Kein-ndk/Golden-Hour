<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use mysql_xdevapi\Table;
use Illuminate\Support\Facades\DB;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{

    /**
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function Cart()
    {
//        $carts = session()->get('cart');
        return view('cart');
    }

    /**
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */

//    public function calculateTotal($cart)
//    {
//        $total = 0;
//        foreach ($cart as $item) {
//            $total += $item['price'] * $item['quantity'];
//        }
//        return $total;
//    }

    public function addCart($id)
    {
//        session()->forget('cart');
        $product = DB::table('products')
            ->select(DB::raw('products.id as id'), ('products.name as product_name'), 'products.price','images.path as path')
            ->join('images', 'images.product_id', 'products.id')
            ->where('products.id', $id)
            ->first();

        $cart = session()->get('cart', []);
        if(isset($cart[$id])){
            $cart[$id]['quantity'] =   $cart[$id]['quantity'] + 1;
        }else{
            $cart[$id] = [
                'id' => $product->id,
                'name' => $product->product_name,
                'price' => $product->price,
                'quantity'=> 1,
                'image' => $product->path
            ];
        }
        session()->put('cart', $cart);
//        $total = $this->calculateTotal($cart);
//        $formattedTotal = number_format($total, 0, ',', '.');
        // Tính tổng và lưu vào session
        $this->updateCartTotal();

        return response()->json([
            'code' => 200,
            'message' => 'success',
//            'total' => $formattedTotal
        ], 200);

//        echo "<pre>";
//        print_r(session()->get('cart'));
//        echo "</pre>";
    }

    /**
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function updateCart(Request $request){
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);

            // Tính tổng và lưu vào session
            $this->updateCartTotal();
        }
    }

    public function updateCartTotal()
    {
        $cart = session()->get('cart', []);
        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        session()->put('total', $total);
    }



    public function deleteCart(Request $request){
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                $total = 0;
                foreach ($cart as $item) {
                    $total += $item['price'] * $item['quantity'];
                }
                session()->put('cart', $cart);
                session()->put('total', $total);
            }
        }
    }


    public function checkout(){
        return view('pages.checkout');
    }


    /**
     * @throws NotFoundExceptionInterface
     * @throws ContainerExceptionInterface
     */
    public function placeOrder(Request $request)
    {
        if (Session()->get('role') !== 'customer') {
            return redirect()->route('login.form')->with('error', 'Unauthorized access');
        }

        $customer = Session()->get('user');
        $cart = Session()->get('cart');
        $total = session()->get('total', 0);

        DB::beginTransaction();
        try {
            // Tính tổng giá trị đơn hàng

            // Lưu thông tin vào bảng orders
            $orderId = DB::table('orders')->insertGetId([
                'customer_id' => $customer->id,
                'total_price' => $total,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Lưu thông tin vào bảng detailorder
            foreach ($cart as $id => $item) {
                DB::table('purchase')->insert([
                    'order_id' => $orderId,
                    'product_id' => $id,
                    'quantity' => $item['quantity'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            DB::commit();
            Session()->forget('cart');
            Session()->forget('total');

            return redirect()->route('customer.dashboard')->with('success', 'Order placed successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Order placement failed', [
                'error' => $e->getMessage(),
                'customer_id' => $customer->id,
                'cart' => $cart
            ]);
            return back()->withErrors(['msg' => 'Error: ' . $e->getMessage()]);
        }

//        dd($request->all());
    }

}
