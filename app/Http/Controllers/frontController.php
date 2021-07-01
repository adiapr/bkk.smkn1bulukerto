<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class frontController extends Controller
{
    public function slider(){
        $slider = Slider::all();
        return view('index', compact('slider'));
    }
}
