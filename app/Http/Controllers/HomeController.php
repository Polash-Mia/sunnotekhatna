<?php

namespace App\Http\Controllers;

use App\Models\Formfillup;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\SlideTwo;
use App\Models\Testimonial;

class HomeController extends Controller
{
    private $slides,$slidestwos,$testimonials;
    public function index(){
        $this->slides  = Slide::all();
        $this->slidestwos  = SlideTwo::all();
        $this->testimonials  = Testimonial::all();
        return view('website.home.index',[
            
            'slides'        => $this->slides,
            'slidestwos'    => $this->slidestwos,
            'testimonials'  => $this->testimonials,
            
           
         ]);
    }
    public function regForm(Request $request){
        $request->validate([
            'name'              => 'required',
            'age'               => 'required',
            'emgMobile'         => 'required',
            'father'            => 'required',
            'fatherWork'        => 'required',
            'mother'            => 'required',
            'address'           => 'required',
            'date'              => 'required',
            'week'              => 'required',
            'one'               => 'required',
            'two'               => 'required',
            'three'             => 'required',
        ]);
        Formfillup::newForm($request);
        return redirect()->back()->with('message', 'Form FillUp successfully.');
    }
}
