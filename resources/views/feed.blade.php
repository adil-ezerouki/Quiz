@extends('layouts.app')

@section('title', 'feed')

@section('content')


    <div class="feed_stories flex flex-col justify-center">

        <div class="feed flex gap-7">

            <div class="bg-red-500 w-[25%] md:flex hidden">
                ksd
            </div>


            <div class="w-[50%] h-[479px] overflow-y-scroll">
                <div id="stories" class=" flex overflow-x-auto py-7">
                    <div class="flex justify-center  gap-[28px] w-fit">
                        <div class="createStory flex relative rounded-full w-20 h-20 active:scale-[1.01] transition-all">
                            <img src="{{ asset('images/profilePic.png') }}" id="profilePic"
                                class=" w-20 h-20 object-cover rounded-full p-[2px] border border-[#EF592E]"
                                alt="Profile Pic" srcset="">
                            <i
                                class="fa-solid fa-plus self-center text-md absolute top-[70px] right-[26px]  w-6 h-6 rounded-full bg-[#EF592E] flex justify-center items-center text-white"></i>
                        </div>

                        @isset($stories)
                            @foreach ($stories as $story)
                                <div id="{{ $story->id }}" class="viewStory flex relative rounded-full w-20 h-20">
                                    <img src="{{ asset('images/profilePic.png') }}" id="profilePic"
                                        class=" w-20 h-20 object-cover rounded-full p-[2px] border border-[#EF592E]"
                                        alt="Profile Pic" srcset="">
                                </div>

                                <div style="display: none"
                                    class="viewStoryPopUpDiv absolute  bg-[#0000007E] w-full h-full top-0 left-0 z-[9] flex justify-center items-center">
                                    <div class="bg-white flex rounded-lg">
                                        <div class="story relative w-[260px] h-[340px]">
                                            <div
                                                class="absolute top-1 left-1 flex justify-center items-center gap-2 text-white">
                                                <img src="{{ asset('images/profilePic.png') }}"
                                                    class="w-8 h-8 object-cover rounded-full" alt="" srcset="">
                                                <div class="flex flex-col text-xs">
                                                    <span class="">Adil Ezerouki</span>
                                                    <span>18 h</span>
                                                </div>
                                            </div>

                                            <div class="absolute top-1 right-1">
                                                <i key={{ $story->id }}
                                                    class="closeStory flex justify-center items-center fa-solid fa-x absolute w-6 h-6 right-1 top-1 bg-slate-200  rounded-full cursor-pointer"></i>
                                            </div>
                                            <div class="absolute top-1 right-1">
                                                <form action="{{ route('deleteStory', $story->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit">
                                                        <i key={{ $story->id }}
                                                            class="deleteStory flex justify-center items-center fa-solid fa-trash absolute w-6 h-6 right-10 top-1 bg-slate-200  rounded-full cursor-pointer"></i>
                                                    </button>

                                                </form>
                                            </div>

                                            @if ($story->story_media_path != '')
                                                <div class="picStory storyT">
                                                    <img src="{{ asset('storage/' . $story->story_media_path) }}"
                                                        id="storyReadyPic" alt="" srcset=""
                                                        class="w-full h-[400px] rounded-lg object-cover">
                                                </div>
                                            @endif


                                            @if ($story->story_txt_content != '')
                                                <div
                                                    class="txtStory storyT w-full flex justify-center items-center bg-red-500 h-full rounded-lg">
                                                    <span id="storyReadyText"
                                                        class="max-w-[240px] text-center flex justify-center items-center h-full">
                                                        {{ $story->story_txt_content }}
                                                    </span>
                                                </div>
                                            @endif


                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endisset



                    </div>
                </div>

                <div class="posts flex flex-col gap-7">
                    <div class="createPost flex flex-col gap-6  justify-center bg-white rounded-lg p-4">
                        <div class="flex w-full gap-4">
                            <img src="{{ asset('images/profilePic.png') }}" id="profilePic"
                                class=" w-10 h-10 object-cover rounded-full p-[2px] border border-[#EF592E]"
                                alt="Profile Pic" srcset="">

                            <button id="createStoryBtn" class="bg-slate-200 rounded-full px-6 py-1 w-full">What's on your
                                mind, Adil ?</button>
                        </div>

                        <hr>

                        <div class="flex justify-between">
                            <a href="#" class="flex gap-2">
                                <img src="{{ asset('images/media.png') }}" alt="" srcset="">
                                <span>photo/video</span>
                            </a>
                            <a href="#" class="flex gap-2">
                                <img src="{{ asset('images/feeling.png') }}" alt="" srcset="">
                                <span>feeling/activity</span>
                            </a>
                            <a href="#" class="flex gap-2">
                                <img src="{{ asset('images/quiz.png') }}" alt="" srcset="" class="w-6">
                                <span>add quiz</span>
                            </a>
                        </div>

                    </div>




                    <div class="postsDiv flex flex-col gap-6  justify-center rounded-lg">
                        @isset($posts)
                            @foreach ($posts as $post)
                                <div
                                    class="postFather relative bg-white  rounded-lg px-7 pt-7 flex flex-col  items-center gap-5 w-full ">

                                    <div class=" flex w-full items-center gap-3 ">
                                        <img src="{{ asset('images/profilePic.png') }}"
                                            class="w-10 h-10 object-cover rounded-full" alt="" srcset="">
                                        <div class="flex flex-col gap-1 text-xs w-full">
                                            <span class="text-[16px] w-full flex flex-wrap gap-1">

                                                <span class=" flex justify-center items-center ">Adil Ezerouki</span>

                                                @if ($post->feeling)
                                                    <span id="feelingDisplay"
                                                        class="newPostDataDisplay flex justify-center items-center feelingSpan font-[100] text-slate-500 gap-1">

                                                        {{ 'is feeling ' . $post->feeling->description }}
                                                        &#x{{ $post->feeling->code }};
                                                    </span>


                                                @endif

                                                @if ($post->activity)
                                                    <span id="activityDisplay"
                                                        class=" newPostDataDisplay flex justify-center items-center  feelingSpan font-[100] text-slate-500 gap-1">{{ 'is ' . $post->activity->description }}
                                                        &#x{{ $post->activity->code }};</span>

                                                @endif



                                                @if ($post->tag)


                                                    <span id="tagDisplay"
                                                        class=" flex justify-center items-center  feelingSpan font-[100] text-slate-500 gap-1">
                                                        <img src="{{ asset('images/tag.png') }}" alt="" srcset=""
                                                            class="tagANDlocalIcon cursor-pointer w-5 h-5">
                                                        <span
                                                            class="newPostDataDisplay text-slate-500 flex justify-center items-center gap-1">
                                                            with
                                                            {{ $post->tag }}
                                                        </span>

                                                    </span>
                                                @endif

                                                @if ($post->location)
                                                    <span id="locationDisplay"
                                                        class=" flex justify-center items-center  feelingSpan font-[100] text-slate-500 gap-1">
                                                        <img src="{{ asset('images/location.png') }}" alt=""
                                                            srcset="" class="tagANDlocalIcon cursor-pointer w-5 h-5">
                                                        <span
                                                            class="newPostDataDisplay text-slate-500 flex justify-center items-center gap-1">
                                                            in {{ $post->location }}
                                                        </span>
                                                    </span>
                                                @endif

                                            </span>



                                            </span>

                                            <div>
                                                <span>18 h</span>

                                                @if ($post->visibility == 'public')
                                                    <i id="visibilityDisplay" class="fa-solid fa-eye"></i>
                                                @endif

                                                @if ($post->visibility == 'friends')
                                                    <i id="visibilityDisplay" class="fa-solid fa-user-group"></i>
                                                @endif

                                            </div>
                                        </div>

                                        <div class="postOptionsDiv felx h-full absolute top-2 right-3  cursor-pointer">
                                            <i class="postOptionsIcon fa-solid fa-ellipsis flex justify-center items-center bg-slate-200 rounded-full w-7 h-7 p-3"></i>
                                        </div>

                                        <div style="display: none" class="postOptions flex flex-col  gap-3 p-4 rounded-lg bg-slate-500 text-white absolute top-11 right-3  cursor-pointer">
                                                <a href="{{route('deleteStory', $post->id)}}" class="flex gap-4 items-center">
                                                    <i class="fa-regular fa-bookmark w-5"></i>
                                                   <span>save post</span>
                                                </a>

                                                <hr>

                                                <a href="{{route('deleteStory', $post->id)}}" class="flex gap-4 items-center">
                                                    <i class="fa-solid fa-pen w-5"></i>
                                                    <span>edit post</span>
                                                </a>
                                                <form action="{{route('posts.destroy', $post->id)}}" method="post" class="flex gap-4 items-center">
                                                    @csrf
                                                    @method('delete')
                                                    <i class="fa-solid fa-trash w-5"></i>
                                                    <button type="submit">delete post</button>
                                                </form>

                                                <hr>

                                                <a href="{{route('deleteStory', $post->id)}}" class="flex gap-4 items-center">

                                                    <i class="fa-solid fa-user-plus  w-5"></i>
                                                    <span>add user</span>
                                                </a>
                                                <a href="{{route('deleteStory', $post->id)}}" class="flex gap-4 items-center">
                                                    <i class="fa-solid fa-ban w-5"></i>
                                                    <span>block user</span>
                                                </a>

                                        </div>
                                    </div>
                                    <div class="NewPostPreview w-full h-auto  flex flex-col gap-5">

                                        @if ($post->postContent)
                                            <p class="newPostDataDisplay">
                                                {{ $post->postContent }}
                                            </p>
                                        @endif

                                        @if ($post->postMeidaPath)
                                            <img class="newPostDataDisplay" src={{ asset('storage/' . $post->postMeidaPath) }}
                                                id="storyReadyPic" alt="" srcset=""
                                                class="  w-full h-72 rounded-lg object-cover" />
                                        @endif

                                        <div class="react flex gap-1 items-center justify-between text-slate-500">
                                            <div class=" flex gap-3 items-center justify-center">
                                                <div class="flex">
                                                    <img src="{{ asset('images/react buttons/likeReact.png') }}"
                                                        class="w-7" alt="" srcset="">
                                                    <img src="{{ asset('images/react buttons/loveReact.png') }}"
                                                        class="w-7" alt="" srcset="">
                                                    <img src="{{ asset('images/react buttons/funnyReact.png') }}"
                                                        class="w-7" alt="" srcset="">
                                                </div>
                                                <span class="">
                                                    128
                                                </span>
                                            </div>

                                            <div class="flex gap-2 statistics">
                                                <div class="comments flex gap-1 items-center">

                                                    <img src="{{ asset('images/react buttons/comments.png') }}"
                                                        id="storyReadyPic" alt="" srcset=""
                                                        class="  w-7 rounded-lg object-cover" />
                                                    <span>100</span>
                                                </div>
                                                <div class="sahre flex gap-1 items-center">

                                                    <img src="{{ asset('images/react buttons/share.png') }}"
                                                        id="storyReadyPic" alt="" srcset=""
                                                        class="  w-7 rounded-lg object-cover" />
                                                    <span>200</span>
                                                </div>
                                            </div>

                                        </div>

                                        <hr class="bg-slate-400 h-[2px]">

                                        <div class="ReactBtns flex justify-between pb-7 text-slate-500">
                                            <div class="likeBtn flex gap-2 items-center">
                                                <img src="{{ asset('images/react buttons/likeReact.png') }}"
                                                    id="storyReadyPic" alt="" srcset=""
                                                    class="  w-8 rounded-lg object-cover" />
                                                <span>Like</span>
                                            </div>
                                            <div class="commentBtn flex gap-2 items-center">
                                                <img src="{{ asset('images/react buttons/comments.png') }}"
                                                    id="storyReadyPic" alt="" srcset=""
                                                    class="  w-8 rounded-lg object-cover" />
                                                <span>Comment</span>
                                            </div>
                                            <div class="shareBtn flex gap-2 items-center">
                                                <img src="{{ asset('images/react buttons/share.png') }}" id="storyReadyPic"
                                                    alt="" srcset="" class="  w-8 rounded-lg object-cover" />
                                                <span>Share</span>
                                            </div>
                                        </div>


                                    </div>


                                </div>
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>

            <div class=" bg-yellow-500 w-[25%] md:flex hidden">
                k
            </div>
        </div>

    </div>

    <script src="{{ asset('js/feed/stories.js') }}"></script>
    <script src="{{ asset('js/feed/posts.js') }}"></script>
    {{-- <script src="{{asset('js/sideBar/sideBar.js')}}" > </script> --}}
@endsection
