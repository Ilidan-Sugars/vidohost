<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function show($id)
    {
        $video = json_decode(Video::find($id), true);
        return view('video', compact('video'));
    }
}
