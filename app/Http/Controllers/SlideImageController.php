<?php

namespace App\Http\Controllers;

use App\Http\Requests\SlideImageRequest;
use App\Models\SlideImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SlideImage::all();

        return view('admin.slide.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SlideImageRequest $request)
    {
        $data = $request->all();
        if ($request->file('slide')) {
            $data['slide']  = Storage::putFile('slide/photo', $request->file('slide'));
        }
        SlideImage::create($data);
        return redirect()->route('slide.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $slide = SlideImage::findOrFail($id);
        if ($slide->slide) {

            $slide->slide = Storage::url($slide->slide);
        }
        return view('admin.slide.show', compact('slide'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SlideImage $slideImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SlideImage $slideImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $slide = SlideImage::findOrFail($id);
        if ($slide->slide) {
            Storage::delete($slide->slide);
        }
        $slide->delete();
        return redirect()->back();
    }
}
