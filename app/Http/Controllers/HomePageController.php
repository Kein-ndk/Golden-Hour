<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public function index(){
        $listProduct1 = DB::table('products')

            ->select('products.id as id', 'products.name as product_name', 'products.price as price', 'images.path as path','products.slug as slug')
            ->join('images', 'images.product_id', 'products.id')
            ->where('products.id', '<=', '4')
            ->get();

        $listProduct2 = DB::table('products')
            ->select('products.id as id', 'products.name as product_name', 'products.price as price', 'images.path as path', 'products.slug as slug')
            ->join('images', 'images.product_id', 'products.id')
            ->where('products.id', '>', '4')
            ->limit(4)
            ->get();

        $category =DB::table('category')
            ->select('category.brand_name as name', 'category.slug as slug')
            ->get();

//        dd($category);

        return view('index', [
            'listProduct1' => $listProduct1,
            'listProduct2' => $listProduct2,
            'category' => $category
        ]);
    }


}
