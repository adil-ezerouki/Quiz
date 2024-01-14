@extends('layouts.app')

@section('title', 'feed')

@section('content')


    <div class="feed_stories flex flex-col  justify-center">

        <div class="feed flex gap-7">

            <div class="bg-red-500 w-[25%] md:flex hidden">
                ksd
            </div>


            <div class="w-[50%] h-[479px] overflow-y-scroll">
                <div id="stories" class=" flex  h-[105px] overflow-x-auto ">
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


                   

                    <div class="postsDiv flex flex-col gap-6  justify-center bg-white rounded-lg p-4">
                        <div class="h-96">
                            <img src="{{ asset('images/profilePic.png') }}" id="profilePic"
                                class=" w-20 h-20 object-cover rounded-full p-[2px] border border-[#EF592E]"
                                alt="Profile Pic" srcset="">
                        </div>
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
