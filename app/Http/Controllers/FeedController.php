<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Comment;
use App\Models\Feeling;
use App\Models\Post;
use App\Models\Story;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedController extends Controller
{
    public function getFeedView()
    {

        $stories = Story::all();
        $feelings = Feeling::all();
        $activities = Activity::all();
        $comments = Comment::all();
        $posts = Post::latest()->get();

        function customDiffForHumans(Carbon $date)
        {
            $currentDateTime = Carbon::now();

            $diff = $date->diff($currentDateTime);

            if ($diff->y > 0) {
                return $diff->y . 'y';
            } elseif ($diff->m > 0) {
                return $diff->m . 'mo';
            } elseif ($diff->d > 0) {
                return $diff->d . 'd';
            } elseif ($diff->h > 0) {
                return $diff->h . 'h';
            } elseif ($diff->i > 0) {
                return $diff->i . 'm';
            } else {
                return $diff->s . 's';
            }
        }






        foreach ($posts as $post) {



            $post->comments = $post->comments()->select(['id', 'content', 'created_at', 'user_id'])->get();




            foreach ($post->comments as $comment) {
                $PostedTime = customDiffForHumans($post->created_at);
                unset($comment->created_at);
                $comment->PostedTime =  $PostedTime;

                $comment->commentOwner = User::find($comment->user_id)->select(['firstName', 'lastName', 'profilePicPath'])->first();
                unset($comment->user_id);


                $likeReact = $comment->likes->filter(function ($comment) {
                    return $comment->type == 'like';
                })->values();

                $loveReact = $comment->likes->filter(function ($comment) {
                    return $comment->type == 'love';
                })->values();

                $sadReact = $comment->likes->filter(function ($comment) {
                    return $comment->type == 'sad';
                })->values();

                $funnyReact = $comment->likes->filter(function ($comment) {
                    return $comment->type == 'funny';
                })->values();

                $angryReact = $comment->likes->filter(function ($comment) {
                    return $comment->type == 'angry';
                })->values();

                $woowReact = $comment->likes->filter(function ($comment) {
                    return $comment->type == 'angry';
                })->values();

                $comment->commentLikes = [
                    'likeReact' => $likeReact,
                    'loveReact' => $loveReact,
                    'sadReact' => $sadReact,
                    'funnyReact' => $funnyReact,
                    'angryReact' => $angryReact,
                    'woowReact' => $woowReact,
                ];


                unset($comment->likes);

                foreach($comment->commentLikes as $key => $value){

                    foreach($value as $like) {
                        unset($like->id,$like->post_id,$like->comment_id,$like->post_id,$like->created_at, $like->updated_at);
                        $like->likeOwner = User::find($like->user_id)->select(['firstName', 'lastName', 'profilePicPath'])->first();
                        unset($like->user_id);
                    }
                }
            }


            $post->postOwner = User::find($post->user_id)->select(['firstName', 'lastName', 'profilePicPath'])->first();
            unset($post->user_id);

            $PostedTime = customDiffForHumans($post->created_at);
            unset($post->created_at);
            $post->PostedTime =  $PostedTime;



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

            if ($post->user_id != null) {
                $targetedUser = User::find($post->user_id);
                unset($post->user_id);
                $post->user = $targetedUser;
            }
        }

        // return $posts;


        foreach ($stories as $story) {
            $PostedTime = customDiffForHumans($story->created_at);
            unset($story->created_at);
            $story->PostedTime =  $PostedTime;
        }

        // return $posts;



        $toTheViewData = [
            'stories' => $stories,
            'feelings' => $feelings,
            'activities' => $activities,
            'posts' => $posts,
        ];

        return view('feed', $toTheViewData);
    }

    // for stories

    public function storeStory(Request $request)
    {

        if ($request->file("mediaStoryFile")) {
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

        if ($request->storyTxtContent) {
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

        return redirect()->back()->with('storySuccess', 'Your story is uploaded successfully');
    }

    // public function viewStory() {

    // }

    public function deleteStory($id)
    {

        $story = Story::find($id);

        if ($story->delete()) {
            return redirect()->back()->with('storyDeleteSuccess', 'Your story is deleted successfully');
        }
    }
}
