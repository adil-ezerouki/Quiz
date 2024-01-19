<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Feeling;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function store(Request $request)
    {
        $newPostData =  $request->all();
        $newPost = new Post();

        // return $newPostData;


        // if($newPost->postContent) {
        //     $newPostData["postContent"];
        // }

        // return $newPostData;

        if (array_key_exists("feeling",$newPostData) && $newPostData["feeling"] != null) {
            $targetedFeeling = Feeling::where('code', $newPostData["feeling"])->first();
            $newPost->feeling_id = $targetedFeeling->id;
        }

        if (array_key_exists("activity",$newPostData) && $newPostData["activity"] != null) {
            $targetedActivity = Activity::where('code', $newPostData["activity"])->first();
            $newPost->activity_id = $targetedActivity["id"];
        }


        if ($request->file("mediaPostFile")) {
            $request->validate([
                'mediaPostFile' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);


            $image_path = $request->file('mediaPostFile')->store('posts', 'public');
            $newPost->postMeidaPath = array_key_exists("mediaPostFile", $newPostData) ?  $image_path : null;
        }




        $newPost->user_id = Auth::user()->id;
        $newPost->postContent = $newPostData["postContent"] != null ?  $newPostData["postContent"] : null;
        $newPost->tag =  $newPostData["tag"] != null ?  $newPostData["tag"] : null;
        $newPost->location =  $newPostData["location"] != null ?  $newPostData["location"] : null;
        $newPost->visibility = $newPostData["visibility"] != null ?  $newPostData["visibility"] : null;

        if ($newPost->save()) {
            return redirect()->back()->with('newPostSuccess', 'Your post is created successfully');
        };
    }


    public function update(Request $request, string $id)
    {

    }


    public function destroy(string $id)
    {



        $post = Post::find($id);

        if($post->delete()){
            return redirect()->back()->with('PostDeleted', 'Your post is deleted successfully');
        };
    }

    public function show($id) {
        $post = Post::find($id);


            if ($post->feeling_id != null) {
                $targetedFeeling = Feeling::find($post->feeling_id);
                unset($post->feeling_id);
                $post->feeling = $targetedFeeling;


            }

            if ($post->activity_id != null) {
                $targetedActivity = Activity::find($post->activity_id);
                unset($post->activity);
                $post->activity = $targetedActivity;
            }

            if($post->user_id != null) {
                $targetedUser = User::find($post->user_id);
                unset($post->user_id);
                $post->user = $targetedUser;
            }

        return $post;
    }
}
