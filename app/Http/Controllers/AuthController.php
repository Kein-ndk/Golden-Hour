<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Session::has('user')) {
            if (Session::get('role') === 'admin') {
                return redirect()->route('admin.admin');
            } elseif (Session::get('role') === 'customer') {
                return redirect()->route('customer.dashboard');
            }
        }

        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $user = DB::table('users')
            ->where('email', $request->input('email'))
            ->where('password', md5($request->input('password')))
            ->first();

        if ($user) {
            // Lưu thông tin admin vào session
            Session::put('user', $user);
            Session::put('role', 'admin');
            return redirect()->route('admin.admin');
        } else {
            $user = DB::table('customers')
                ->where('email', $request->input('email'))
                ->where('password', md5($request->input('password')))
                ->first();

            if ($user) {
                // Lưu thông tin khách hàng vào session
                Session::put('user', $user);
                Session::put('role', 'customer');
                return redirect()->route('customer.dashboard');
            } else {
                return back()->with('error', 'Invalid credentials');
            }
        }
//        dd($request->all());
    }

    public function adminDashboard()
    {
        if (Session::get('role') !== 'admin') {
            return redirect()->route('login.form')->with('error', 'Unauthorized access');
        }

        return view('admin.admin');
    }

    public function customerDashboard()
    {
        if (Session::get('role') !== 'customer') {
            return redirect()->route('login.form')->with('error', 'Unauthorized access');
        }
        $customer = Session::get('user');
        $orders = DB::table('orders')
            ->where('customer_id', $customer->id)
            ->orderBy('created_at', 'desc')
            ->get();

        // Lấy chi tiết đơn hàng cho từng đơn hàng
        $orderDetails = [];
        foreach ($orders as $order) {
            $details = DB::table('purchase')
                ->join('products', 'purchase.product_id', '=', 'products.id')
                ->where('purchase.order_id', $order->id)
                ->select('products.name', 'purchase.quantity', 'products.price')
                ->get();
            $orderDetails[$order->id] = $details;
        }
        return view('customer',[
            'customer' => $customer,
            'orders' => $orders,
            'orderDetails' => $orderDetails,
        ]);
    }


    public function logout()
    {
        Session::flush();
        return redirect()->route('login.form');
    }
}
