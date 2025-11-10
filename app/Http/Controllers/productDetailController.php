<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class productDetailController extends Controller
{
    public function productDetail(Request $request, $slug)
    {
        $detail = DB::table('products')
            ->select('products.id as id', 'products.name as product_name', 'products.price as price', 'products.description as des', 'images.path as path', 'attribute.ref as ref', 'attribute.status as status', 'attribute.origin as origin', 'attribute.collection as collection', 'attribute.glass as glass', 'attribute.dial_color as dial_color', 'attribute.movement as movement', 'attribute.power as power', 'attribute.material as material', 'attribute.waterproof as waterproof')
            ->join('images', 'images.product_id', 'products.id')
            ->join('attribute', 'attribute.id', 'products.attribute_id')
            ->where('slug',$slug)
            ->first();
//        dd($detail);

        return view('pages.productDetail', compact('detail'));
    }

//    public function otherProduct(){
//        $otherProducts = DB::table('products')
//            ->select('products.id as id', 'products.name as product_name', 'products.price as price', 'images.path as path')
//            ->join('images', 'images.product_id', 'products.id')
//            ->inRandomOrder()
//            ->limit(4)
//            ->get();
//
////        dd($otherProducts);
//
//        return view('pages.productDetail', [
//            'otherProducts' => $otherProducts,
//        ]);
//
//    }
}
