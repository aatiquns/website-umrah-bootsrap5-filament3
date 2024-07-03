<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\UmrahPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        $umrah_packages = UmrahPackage::get();
        $testimonials = Testimonial::get();

        return view('frontend.home', compact('sliders','umrah_packages','testimonials'));
    }
}
