<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\VideoCategory;
class AllVideosController extends Controller
{
    public function index()
    {
        $videos = Video::with('categories')->where('status', '!=', 'hide')->get();
        $categories = VideoCategory::all();
        return view('index', compact('videos', 'categories'));
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $videos = Video::with('categories')
            ->where('video_name', 'LIKE', '%' . $searchTerm . '%')
            ->where('status', '!=', 'hide')
            ->get();

        $categories = VideoCategory::all();
        return view('index', compact('videos', 'categories', 'searchTerm'));
    }

    public function category($id)
    {
        $category = VideoCategory::findOrFail($id);

        $videos = Video::with('categories')
            ->whereHas('categories', function($query) use ($id) {
                $query->where('video_category.id', $id);
            })
            ->where('status', '!=', 'hide')
            ->get();

        $categories = VideoCategory::all();
        return view('index', compact('videos', 'categories', 'category'));
    }
}
