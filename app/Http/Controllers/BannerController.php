<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        return view('admin.banner');
    }
    public function create()
    {
        return view('admin.create_banner');
    }
}
