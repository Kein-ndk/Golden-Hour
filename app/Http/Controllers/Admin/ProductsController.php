<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProductsController extends Controller
{
    public function create()
    {
        return view('admin.pages.addProduct');
    }

    //
    public function store(Request $request) {
        $slug = Str::slug($request->input('name'),'-');


        $product = DB::table('products')->insert([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'status' => $request->input('status'),
            'description' => $request->input('description'),
            'gender' => $request->input('gender'),
            'sale' => $request->input('sale'),
            'category_id' => $request->input('category'),
            'slug' => $slug,
            'attribute_id' => '10',

        ]);

        if ($request->hasFile('formFileLg')) {
            $file = $request->formFileLg;
            $file->getClientOriginalName();
            $file->move('img', $file->getClientOriginalName());
        }

        $imagename = DB::table('images')->select('name')->orderBy('name', 'desc')->take(1)->value('name');

        $imageid = DB::table('products')->select('id')->orderBy('id', 'desc')->take(1)->value('id');

        DB::table('images')->insert([
            'name' => $request->input('images-name'),
            'path' => 'img'. "\\" .$request->input('images-name'),
            'product_id' => $imageid
        ]);

        return redirect()->route('admin.pages.ListProducts');

    }



    public function delete($id)
    {

        DB::table('products')->where('id', $id)->delete();
        return redirect()->back();
   }

    public function edit($id)
    {
        $product = DB::table('products')->find($id);
        $category = DB::table('category')->select('category.brand_name','category.id')->get();
        return view('admin.pages.EditProducts')->with(compact('product', 'id', 'category'));
    }

    public function update(Request $request, $id)
    {
        DB::table('products')
            ->where('id', '=', $id)
            ->update([
                'name'       => $request->input('name'),
                'price'      => $request->input('price'),
                'status'    => $request->input('status'),
                'description'    => $request->input('description'),
                'gender'    => $request->input('gender'),
                'quantity'    => $request->input('quantity'),
                'sale'    => $request->input('sale'),
                'category_id'    => $request->input('category'),
                'updated_at' => \Carbon\Carbon::now()
            ]);

        return redirect()->route('admin.pages.ListProducts')
            ->with('alert', 'Cập nhật sản phẩm thành công')
            ->withInput();
    }
}
