<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class AllVideosController extends Controller
{
    public function index(){
        $videos = Video::with('categories')->where('status','!=', 'hide')->get();
        return view('index', compact('videos'));
    }
}
