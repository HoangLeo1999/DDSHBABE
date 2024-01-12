<?php

namespace App\Http\Controllers;
use App\Models\Video;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();

        return view('document.video.index', compact('videos'));
    }

    public function show(Video $video)
    {
        return view('document.video.show', compact('video'));
    }

    public function create()
    {
        return view('document.video.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'video' => 'required|mimes:mp4,mov,avi',
        ]);

        $video = Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'video_path' => $request->file('video')->store('videos', 'public'),
        ]);

        return redirect()->route('videos.show', $video);
    }

    public function download(Video $video)
    {
        $path = Storage::disk('public')->path($video->video_path);

        return response()->download($path);
    }
}
