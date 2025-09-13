<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function show($id)
    {
        $video = Video::find($id);
        return view('video', compact('video'));
    }
}
