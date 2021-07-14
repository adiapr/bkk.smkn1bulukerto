<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Loker;

class frontController extends Controller
{
    public function view(){
        $slider = Slider::all();
        $loker = Loker::all();
        return view('index', compact('slider','loker'));
    }
}
