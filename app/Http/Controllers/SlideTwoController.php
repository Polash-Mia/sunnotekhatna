<?php

namespace App\Http\Controllers;

use App\Models\SlideTwo;
use Illuminate\Http\Request;

class SlideTwoController extends Controller
{
    public function index()
    {
        return view('admin.slidetwo.index');
    }

    public function create(Request $request)
    {
        $slide = SlideTwo:: newSlide($request);
        return redirect()->back()->with('message', 'Slide info create successfully.');
    }

    public function manage()
    {
        $slides = SlideTwo::all();
        return view('admin.slidetwo.manage',['slides'=>$slides]);
    }
    public function delete($id)
    {
        SlideTwo::deleteSlide($id);
        
        return redirect('/slideTwo/manage')->with('message', 'slide info delete successfully.');
    }
}
