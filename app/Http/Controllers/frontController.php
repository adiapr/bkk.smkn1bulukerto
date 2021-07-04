<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class frontController extends Controller
{

    // jika index ingin dilindungi auth
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function slider(){
        $slider = Slider::all();
        return view('index', compact('slider'));
    }
}
