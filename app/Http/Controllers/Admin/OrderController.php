<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(){
        $titles = DB::table('customers')
            ->select('customers.name as customer','orders.total_price', 'purchase.quantity','products.name')
            ->join('orders', 'orders.customer_id', '=', 'customers.id')
            ->join('purchase', 'purchase.order_id', '=', 'orders.id')
            ->join('products', 'products.id', '=', 'purchase.product_id')
            ->get();


        return view('admin.pages.order', [
            'titles' => $titles
        ]);
    }
}
