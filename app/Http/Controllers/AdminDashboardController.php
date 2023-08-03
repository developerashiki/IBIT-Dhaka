<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function content()
    {
        return view('admin.content');
    }
}
