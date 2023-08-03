<?php

namespace App\Http\Controllers;

use App\Models\HeadLine;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class HeadLineController extends Controller
{

    public function index()
    {

        $this->data['headline'] = HeadLine::all();
        if (Session::has('message')) {
            $this->data['message'] = Session::get('message');
        }
        return view('admin.all_headline', $this->data);
    }


    public function create()
    {
        return view('admin.headline');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        HeadLine::create($data);
        Session::flash('message', 'Created successfully');
        return redirect()->route('headline');
    }


    public function show($id)
    {

        $this->data['headline'] = HeadLine::findOrFail($id);
        return view('welcome', $this->data);
    }
}
