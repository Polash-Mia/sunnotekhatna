<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    private $testimonials;
    private $testimonial;

    public function index()
    {
        return view('admin.testimonial.index');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'comment' => 'required',
            'image' => 'required',
        ]);
        Testimonial::newTestimonial($request);
        return redirect()->back()->with('message', 'testimonial info create successfully.');
    }

    public function manage()
    {
        $this->testimonials = Testimonial::all();
        return view('admin.testimonial.manage', ['testimonials' => $this->testimonials]);
    }

    public function edit($id)
    {
        $this->testimonial = Testimonial::find($id);
        return view('admin.testimonial.edit', ['testimonial' => $this->testimonial]);
    }

    public function update(Request $request, $id)
    {
        Testimonial::updateTestimonial($request, $id);
        return redirect('/manage-testimonial')->with('message', 'testimonial info update successfully.');
    }

    public function delete($id)
    {
        Testimonial::deleteTestimonial($id);
        return redirect('/manage-testimonial')->with('message', 'testimonial info delete successfully.');
    }
}
