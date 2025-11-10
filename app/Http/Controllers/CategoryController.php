<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategory(Request $request, $slug){
        $product = DB::table('products')
            ->select( 'category.slug','products.id as id', 'products.name as product_name', 'products.price as price', 'images.path as path', 'products.slug as slug')
            ->join('category','category.id', 'products.category_id')
            ->join('images', 'images.product_id', 'products.id')
            ->where('category.slug', $slug)
            ->get();

        $breadcum = DB::table('category')
            ->select('category.brand_name as name', 'category.slug as slug')
            ->where('category.slug', $slug)
            ->get();

//        $category = DB::table('category')
//            ->select('category.brand_name as name', 'category.slug as slug')
//            ->get();

        return view('pages.category', [
            'product' => $product,
            'breadcum'=> $breadcum,
        ]);
//        return view('layout.header', compact('category'));
    }
    public function cateMenu(){
        $category = DB::table('category')
            ->select('category.brand_name as name', 'category.slug as slug')
            ->get();
//dd($category)
        return view('layout.header', compact('category'));
    }
}
