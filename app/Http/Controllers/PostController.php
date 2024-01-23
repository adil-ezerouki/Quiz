<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Feeling;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function store(Request $request)
    {
        $newPostData =  $request->all();
        $newPost = new Post();

        if (array_key_exists("feeling", $newPostData) && $newPostData["feeling"] != null) {
            $targetedFeeling = Feeling::where('code', $newPostData["feeling"])->first();
            $newPost->feeling_id = $targetedFeeling->id;
        }

        if (array_key_exists("activity", $newPostData) && $newPostData["activity"] != null) {
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

        if ($post->delete()) {
            return redirect()->back()->with('PostDeleted', 'Your post is deleted successfully');
        };
    }

    public function show($id)
    {
        $post = Post::find($id);
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

        // $post->comments = $post->comments()->select(['id', 'content', 'created_at', 'user_id'])->get();
        $post->likes = $post->likes;

        foreach ($post->likes as $postLike) {


            $likeReact = $post->likes->filter(function ($like) {
                return $like->type == 'like';
            })->values();

            $loveReact = $post->likes->filter(function ($like) {
                return $like->type == 'love';
            })->values();

            $sadReact = $post->likes->filter(function ($like) {
                return $like->type == 'sad';
            })->values();

            $funnyReact = $post->likes->filter(function ($like) {
                return $like->type == 'funny';
            })->values();

            $angryReact = $post->likes->filter(function ($like) {
                return $like->type == 'angry';
            })->values();

            $woowReact = $post->likes->filter(function ($like) {
                return $like->type == 'woow';
            })->values();

            $post->postLikes = [
                'likeReact' => $likeReact,
                'loveReact' => $loveReact,
                'sadReact' => $sadReact,
                'funnyReact' => $funnyReact,
                'angryReact' => $angryReact,
                'woowReact' => $woowReact,
            ];

            unset($post->likes);


            foreach ($post->postLikes as $key => $value) {



                foreach ($value as $likeChild) {

                    unset($likeChild->id, $likeChild->post_id, $likeChild->comment_id, $likeChild->created_at, $likeChild->updated_at);
                    $likeChild->likeOwner = User::find($likeChild->user_id)->select(['firstName', 'lastName', 'profilePicPath'])->first();
                    unset($likeChild->user_id);
                }
            }
        }

        // foreach ($post->comments as $comment) {
        //     $PostedTime = customDiffForHumans($post->created_at);
        //     unset($comment->created_at);
        //     $comment->PostedTime =  $PostedTime;

        //     $comment->commentOwner = User::find($comment->user_id)->select(['firstName', 'lastName', 'profilePicPath'])->first();

        //     $likeReact = $comment->likes->filter(function ($comment) {
        //         return $comment->type == 'like';
        //     })->values();

        //     $loveReact = $comment->likes->filter(function ($comment) {
        //         return $comment->type == 'love';
        //     })->values();

        //     $sadReact = $comment->likes->filter(function ($comment) {
        //         return $comment->type == 'sad';
        //     })->values();

        //     $funnyReact = $comment->likes->filter(function ($comment) {
        //         return $comment->type == 'funny';
        //     })->values();

        //     $angryReact = $comment->likes->filter(function ($comment) {
        //         return $comment->type == 'angry';
        //     })->values();

        //     $woowReact = $comment->likes->filter(function ($comment) {
        //         return $comment->type == 'woow';
        //     })->values();

        //     $comment->commentLikes = [
        //         'likeReact' => $likeReact,
        //         'loveReact' => $loveReact,
        //         'sadReact' => $sadReact,
        //         'funnyReact' => $funnyReact,
        //         'angryReact' => $angryReact,
        //         'woowReact' => $woowReact,
        //     ];

        //     unset($comment->user_id, $comment->likes, $comment->id);




        //     foreach ($comment->commentLikes as $key => $valueComment) {

        //         foreach ($valueComment as $likeComment) {
        //             unset($likeComment->id, $likeComment->post_id, $likeComment->comment_id, $likeComment->post_id, $likeComment->created_at, $likeComment->updated_at);
        //             $likeComment->likeOwner = User::find($likeComment->user_id)->select(['firstName', 'lastName', 'profilePicPath'])->first();
        //             unset($likeComment->user_id);
        //         }
        //     }
        // }


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

        // unset($post->likes)
        return $post;
    }
}
