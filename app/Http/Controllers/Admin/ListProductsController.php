<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListProductsController extends Controller
{
    public function showproduct(){
        $lists = DB::table('products')
            ->select('products.name','category.brand_name as namebrand','products.quantity','products.price','products.gender','images.name as nameimage','images.path','products.id')
            ->join('category','category.id','=', 'products.category_id')
            ->join('images', 'images.product_id', '=', 'products.id')
            ->get();


        return view('admin.pages.ListProducts', [
            'lists' => $lists
        ]);
    }
}
