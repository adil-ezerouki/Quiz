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
                        <div class="story flex relative rounded-full w-20 h-20">
                            <img src="{{ asset('images/profilePic.png') }}" id="profilePic"
                                class=" w-20 h-20 object-cover rounded-full p-[2px] border border-[#EF592E]"
                                alt="Profile Pic" srcset="">
                        </div>
                        <div class="story flex relative rounded-full w-20 h-20">
                            <img src="{{ asset('images/profilePic.png') }}" id="profilePic"
                                class=" w-20 h-20 object-cover rounded-full p-[2px] border border-[#EF592E]"
                                alt="Profile Pic" srcset="">
                        </div>
                        <div class="story flex relative rounded-full w-20 h-20">
                            <img src="{{ asset('images/profilePic.png') }}" id="profilePic"
                                class=" w-20 h-20 object-cover rounded-full p-[2px] border border-[#EF592E]"
                                alt="Profile Pic" srcset="">
                        </div>
                        <div class="story flex relative rounded-full w-20 h-20">
                            <img src="{{ asset('images/profilePic.png') }}" id="profilePic"
                                class=" w-20 h-20 object-cover rounded-full p-[2px] border border-[#EF592E]"
                                alt="Profile Pic" srcset="">
                        </div>
                        <div class="story flex relative rounded-full w-20 h-20">
                            <img src="{{ asset('images/profilePic.png') }}" id="profilePic"
                                class=" w-20 h-20 object-cover rounded-full p-[2px] border border-[#EF592E]"
                                alt="Profile Pic" srcset="">
                        </div>

                    </div>
                </div>

                <div class="posts flex flex-col gap-7">
                    <div class="createPost flex flex-col gap-6  justify-center bg-white rounded-lg p-4">
                        <div class="flex w-full gap-4">
                            <img src="{{ asset('images/profilePic.png') }}" id="profilePic"
                                class=" w-10 h-10 object-cover rounded-full p-[2px] border border-[#EF592E]"
                                alt="Profile Pic" srcset="">

                            <button class="bg-slate-200 rounded-full px-6 py-1 w-full">What's on your mind, Adil ?</button>
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

    <script src="{{ asset('js/feed/feed.js') }}"></script>
    {{-- <script src="{{asset('js/sideBar/sideBar.js')}}" > </script> --}}
@endsection
