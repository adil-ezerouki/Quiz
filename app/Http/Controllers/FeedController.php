<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedController extends Controller
{
    public function getFeedView() {
        return view('feed');
    }

    // for stories

    public function storeStory(Request $request) {

        if($request->file("mediaStoryFile")) {
            $request->validate([
                'mediaStoryFile' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);

            $image_path = $request->file('mediaStoryFile')->store('stories', 'public');


             Story::create([
                'story_media_path' => $image_path,
                'story_type' => 'pic',
                'user_id' => Auth::user()->id,
            ]);
        }

        return redirect()->back()->with('storySuccess', 'Story Uploaded successfully');
    }
}
