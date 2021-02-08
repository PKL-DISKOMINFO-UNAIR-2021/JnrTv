<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gambar;

class carouselController extends Controller
{
    public function index(){
        $gambar = Gambar::all();
        return view('home')->with('gambar',$gambar);
    }
}