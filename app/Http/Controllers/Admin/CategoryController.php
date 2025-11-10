<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function listcate(){
        $category = DB::table('category')->select('category.brand_name','category.id')->get();

        return view('admin.pages.addProduct', compact('category'));
    }
}
