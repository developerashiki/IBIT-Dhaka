<?php

namespace App\Http\Controllers;

use App\Models\HeadLine;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function showdata()
    {
        $this->data['headline'] = HeadLine::first();
        return view('welcome', $this->data);
    }
}
