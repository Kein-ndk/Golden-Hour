<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class SessionController extends Controller
{
    public function viewSession()
    {
        // Lấy tất cả dữ liệu từ session
        $sessionData = Session::all();

        // Trả về view để hiển thị dữ liệu session
        return view('view-session', compact('sessionData'));
    }
}
