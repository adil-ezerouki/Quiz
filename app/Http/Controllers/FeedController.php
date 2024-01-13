<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedController extends Controller
{
    public function getFeedView() {

        $stories = Story::all();

        $toTheViewData = [
            'stories'=> $stories,
        ];
        return view('feed',$toTheViewData);
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

        if($request->storyTxtContent) {
            $request->validate([
                'storyTxtContent' => 'required',
            ]);

            // return $request;


             Story::create([
                'story_txt_content' => $request->storyTxtContent,
                'story_type' => 'txt',
                'user_id' => Auth::user()->id,
            ]);
        }

        return redirect()->back()->with('storySuccess', 'Story Uploaded successfully');
    }

    public function viewStory() {
        
    }

    public function deleteStoryAuto() {

    }
}
