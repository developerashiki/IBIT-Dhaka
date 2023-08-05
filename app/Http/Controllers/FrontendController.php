<?php

namespace App\Http\Controllers;

use App\Models\HeadLine;
use App\Models\SlideImage;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function showdata()
    {
        $this->data['headline'] = HeadLine::first();
        $this->data['slide'] = SlideImage::all();
        return view('welcome', $this->data);
    }
}
