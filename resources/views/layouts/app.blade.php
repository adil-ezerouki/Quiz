<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('js/login-signup/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
</head>

<body class="h-[100vh] relative">

    {{-- popup div for stories --}}
    <x-pop-up-div class="containerPopUpDivStory">

        <form action="{{ route('storeStory') }}" method="Post"
            class="biggestStoryHolder relative flex flex-col  pt-0 w-[560px] h-[570px]" enctype="multipart/form-data">
            @csrf

            <i
                class="flex justify-center items-center fa-solid fa-x absolute w-10 h-10 right-2 top-2 bg-slate-200  rounded-full cursor-pointer"></i>

            <div class="progressDiv bg-slate-700 w-[33.3%] h-2 rounded-t-lg rounded-r-lg mb-10 transition-all">

            </div>


            <div class="storySlider flex flex-col gap-10 p-10 pt-0 ">


                <p class="text-center text-2xl">choose your story type</p>


                <div class="flex gap-10">
                    <div id="fileStory"
                        class="storyTypeDiv  w-[220px] h-[330px] flex justify-center items-center gap-4 flex-col bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg">
                        <div class="bg-white p-2 rounded-full">
                            <img src="{{ asset('images/PicFileStoryPic.png') }}" class="w-8  " alt=""
                                srcset="">
                        </div>
                        <p class="text-center">create a photo/video <br> story</p>
                    </div>
                    <div id="textStory"
                        class="storyTypeDiv textStory w-[220px] h-[330px] flex justify-center items-center gap-4 flex-col  bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90% rounded-lg">
                        <div class="bg-white p-2 rounded-full">
                            <img src="{{ asset('images/PicFontStoryPic.png') }}" class="w-8  " alt=""
                                srcset="">
                        </div>
                        <p>create a text story</p>
                    </div>
                </div>
            </div>

            <div class="storySlider p-10 pt-0 flex justify-center items-center h-[442px]">
                <div class=" storyPicUpload storySliderType flex flex-col gap-14">

                    <p class="text-center text-2xl">upload your file</p>

                    <div
                        class="border border-[#0000007E] border-dashed rounded-lg p-3 flex flex-col justify-center items-center gap-5 w-96 h-72">

                        <div class="bg-white p-2 rounded-full flex flex-col justify-center items-center gap-3">
                            <img src="{{ asset('images/PicFileStoryPic.png') }}" class="w-20" alt=""
                                srcset="">

                            <p>supports JPG, JPEG200,PNG</p>
                        </div>

                        <input type="file" name="mediaStoryFile" id="inputPic" class="w-56" accept="image/*">
                    </div>
                </div>

                <div class=" storyTextUpload storySliderType flex flex-col gap-12">

                    <p class="text-center text-2xl">type your Text</p>

                    <div action="" method="post"
                        class="border border-[#0000007E] border-dashed p-6 rounded-lg flex flex-col justify-center items-center gap-5 w-96">

                        <div class="bg-white p-2 rounded-full flex flex-col justify-center items-center gap-3">
                            <img src="{{ asset('images/PicFontStoryPic.png') }}" class="w-20" alt=""
                                srcset="">

                            <p class="text-center">type the text you want to include in your sotry </p>
                        </div>

                        <input type="text" placeholder="type you story text" name="storyTxtContent" id="inputText"
                            class="w-[100%] border border-[#bfbfbf] py-1 px-2 text-center" />

                    </div>
                </div>
            </div>


            <div class="storySlider storyready flex flex-col gap-8 justify-center items-center p-10 pt-0 h-[442px]">
                <p class="text-center text-2xl">Your Story is ready !</p>


                <div class="storyFather w-[260px] h-[370px] flex justify-center items-center gap-4 rounded-lg">
                    <div class="story relative w-[260px] h-[340px]">
                        <div class="absolute top-1 left-1 flex justify-center items-center gap-2 text-white">
                            <img src="{{ asset('images/profilePic.png') }}" class="w-8 h-8 object-cover rounded-full"
                                alt="" srcset="">
                            <div class="flex flex-col text-xs">
                                <span class="">Adil Ezerouki</span>
                                <span>18 h</span>
                            </div>
                        </div>
                        <div class="picStory storyT">
                            <img src="{{ asset('images/storyPicTest.png') }}" id="storyReadyPic" alt=""
                                srcset="" class="w-full h-[340px] rounded-lg object-cover">
                        </div>

                        <div
                            class="picStory storyT max-w-[240px] flex justify-center items-center bg-red-500 h-full rounded-lg">
                            <span id="storyReadyText"
                                class="max-w-[240px] text-center flex justify-center items-center h-full">
                                Hi I am doing Fine man
                            </span>
                        </div>

                    </div>
                </div>

            </div>

            <div class="flex justify-center items-center gap-10 p-10 pt-0">

                <button type="button" id="previous"
                    class=" flex gap-3 justify-center slideBtn bg-[#05B2B0] text-white px-3 py-2 w-[80%] rounded ">

                    Back
                    <i class="fa-solid fa-arrow-left self-center"></i>

                </button>

                <button type="button" id='next'
                    class="slideBtn flex gap-3 justify-center bg-[#EF592E] text-white px-3 py-2 w-[80%] rounded">

                    Next
                    <i class="fa-solid fa-arrow-right self-center"></i>

                </button>

                <button type="submit" id='submitBtn'
                    class="hidden gap-3  justify-center bg-[#EF592E] text-white px-3 py-2 w-[80%] rounded">

                    upload
                    <i class="fa-solid fa-arrow-right self-center"></i>

                </button>

            </div>

        </form>
    </x-pop-up-div>

    {{-- popup div for post --}}


    <x-pop-up-div class="containerPopUpDivPost">
        <form action="{{ route('posts.store') }}" method="Post"
            class="biggestPostHolder relative flex flex-col  pt-0 w-[560px] h-[570px]" enctype="multipart/form-data">
            @csrf

            <i
                class="closeDivPost flex justify-center items-center fa-solid fa-x absolute w-10 h-10 right-2 top-2 bg-slate-200  rounded-full cursor-pointer"></i>

            <div class="progressDivPost bg-slate-700 w-[50%] h-2 rounded-t-lg rounded-r-lg mb-10 transition-all">

            </div>


            <div class="postSlider createPost flex flex-col gap-10 p-10 pt-0 ">


                <p class="text-center text-2xl">make your new post </p>


                <div class="flex gap-10">
                    <div id="newpost"
                        class="w-full h-[330px] relative flex flex-col  items-center gap-5 bg-[#E2E8F0] rounded-lg p-3 overflow-y-auto">
                        <div class="w-full flex gap-3 top-2 left-2">
                            <img src="{{ asset('images/profilePic.png') }}"
                                class="w-14 h-14 object-cover rounded-full " alt="" srcset="">

                            <div class="flex flex-col gap-1 justify-center">
                                <p class="text-center">Adil Ezerouki</p>

                                <select name="" id="" class="rounded">
                                    <option value="">friends </option>
                                    <option value="">public</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full">
                            <textarea class="bg-white w-full h-32 p-3" id="postContent" placeholder="Whta's on your mind, Adil ?" type="text"
                                name="hh">
                            </textarea>
                        </div>
                        <div class="activities w-full rounded-lg flex justify-between p-5 border border-gray-300">
                            <p>add to your new post</p>

                            <div class="flex gap-3 postAttIcons">
                                <img src="{{ asset('images/media.png') }}" alt="" srcset=""
                                    class="cursor-pointer">
                                <img src="{{ asset('images/feeling.png') }}" alt="" srcset=""
                                    class="cursor-pointer">
                                <img src="{{ asset('images/quiz.png') }}" class="w-6 cursor-pointer" alt=""
                                    srcset="">
                                <img src="{{ asset('images/tag.png') }}" alt="" srcset=""
                                    class="cursor-pointer">
                                <img src="{{ asset('images/location.png') }}" alt="" srcset=""
                                    class="cursor-pointer">
                            </div>
                        </div>
                        <div class="postAttatchements w-full flex flex-col gap-3">
                            <div id="media" class=" postAttachmentsDiv w-full relative">
                                <i
                                    class=" closeAttaDiv flex justify-center items-center fa-solid fa-x absolute w-10 h-10 right-1 top-0  rounded-full cursor-pointer"></i>

                                <div
                                    class=" p-3 flex flex-col justify-center gap-5 items-center border border-[#0000007E] border-dashed rounded-lg  w-[456px] h-[212px] ">

                                    <div class=" rounded-full flex flex-col justify-center items-center gap-3">
                                        <img src="{{ asset('images/PicFileStoryPic.png') }}" class="w-10"
                                            alt="" srcset="">
                                        <p>supports JPG, JPEG200,PNG</p>
                                    </div>

                                    <input type="file" name="mediaPostFile" id="inputMedia" class="w-56"
                                        accept="image/*">

                                    <span id="resetMediaBtn1"  class="px-3 py-2   bg-[#05b2b0] text-white rounded" >Reset Media</span>
                                </div>
                            </div>
                            <div id="feelings&activities"
                                class=" postAttachmentsDiv relative flex flex-col gap-3 justify-center border border-[#0000007E] border-dashed rounded-lg  w-[456px] h-[212px] p-3">
                                <i
                                    class="closeAttaDiv flex justify-center items-center fa-solid fa-x absolute w-10 h-10 right-1 top-0   rounded-full cursor-pointer"></i>
                                <p>How Are you feeling ?</p>

                                <div class="flex gap-3 items-center relative top-0 right-0">
                                    @isset($feelings)
                                        <select name="" id="feeling" class=" p-2 rounded-lg w-[94%]">
                                            <option value="" selected>choose how you're feeling</option>
                                            <hr>
                                            @foreach ($feelings as $feeling)
                                                <option value={{ $feeling->code }}>
                                                    <p>{{ $feeling->description }}</p>
                                                    &#x{{ $feeling->code }};
                                                </option>
                                            @endforeach
                                        </select>
                                    @endisset
                                    <i id="feelingReset"
                                        class="resetSelect fa-solid fa-x flex justify-center items-center bg-[#05b2b0] text-white p-2 rounded-full w-6 h-6 text-[13px]"></i>
                                </div>

                                <p>What Are you doing ?</p>

                                <div class="flex gap-3 items-center">
                                    @isset($activities)
                                        <select name="" id="activity" class="p-2 rounded-lg w-[94%]">
                                            <option value="" selected>choose what are you doing</option>
                                            <hr>
                                            @foreach ($activities as $activity)
                                                <option value={{ $activity->code }}>
                                                    <p>{{ $activity->description }}</p>
                                                    &#x{{ $activity->code }};
                                                </option>
                                            @endforeach
                                        </select>
                                    @endisset
                                    <i id="activityReset"
                                        class="resetSelect fa-solid fa-x flex justify-center items-center bg-[#05b2b0] text-white p-2 rounded-full w-6 h-6 text-[13px]"></i>

                                </div>

                            </div>
                            <div id="quiz"
                                class="  postAttachmentsDiv relative flex flex-col gap-3 justify-center border border-[#0000007E] border-dashed rounded-lg  w-[456px] h-[212px] p-3">
                                <i
                                    class=" closeAttaDiv flex justify-center items-center fa-solid fa-x absolute w-10 h-10 right-1 top-0   rounded-full cursor-pointer"></i>

                                <p>chosse a quiz of yours</p>

                                <div class="flex gap-3 items-center">
                                    <select name="" id="quiz" class="p-2 rounded-lg w-[94%]">
                                        <option value="" selected>choose your quiz</option>
                                        <hr>
                                        <option value="quiz 1">quiz 1</option>
                                        <option value="quiz 2">quiz 2</option>
                                        <option value="quiz 3">quiz 3</option>
                                        <option value="quiz 4">quiz 4</option>
                                    </select>
                                    <i id="quizReset"
                                        class="resetSelect fa-solid fa-x flex justify-center items-center bg-[#05b2b0] text-white p-2 rounded-full w-6 h-6 text-[13px]"></i>

                                </div>



                            </div>
                            <div id="tag"
                                class=" postAttachmentsDiv relative flex flex-col gap-3 justify-center border border-[#0000007E] border-dashed rounded-lg  w-[456px] h-[212px] p-3">
                                <i class=" closeAttaDiv flex justify-center items-center fa-solid fa-x absolute w-10 h-10 right-1 top-0   rounded-full cursor-pointer"></i>

                                <p>tag a friend of yours</p>

                                <div class="flex gap-3 items-center">
                                    <select name="" id="tag" class="p-2 rounded-lg w-[94%]">
                                        <option value="" selected>choose your friend</option>
                                        <hr>
                                        <option value="friend 1">friend 1</option>
                                        <option value="friend 2">friend 2</option>
                                        <option value="friend 3">friend 3</option>
                                        <option value="friend 4">friend 4</option>
                                    </select>
                                    <i id="tagReset"
                                        class="resetSelect fa-solid fa-x flex justify-center items-center bg-[#05b2b0] text-white p-2 rounded-full w-6 h-6 text-[13px]"></i>

                                </div>

                            </div>
                            <div id="location"
                                class=" postAttachmentsDiv relative flex flex-col gap-3 justify-center border border-[#0000007E] border-dashed rounded-lg  w-[456px] h-[212px] p-3">
                                <i class=" closeAttaDiv flex justify-center items-center fa-solid fa-x absolute w-10 h-10 right-1 top-0   rounded-full cursor-pointer"></i>

                                <p>include a location of yours</p>

                                <div class="flex gap-3 items-center">
                                    <select name="" id="location" class="p-2 rounded-lg w-[94%]">
                                        <option value="" selected>choose your location</option>
                                        <hr>
                                        <option value="localion 1">localion 1</option>
                                        <option value="localion 2">localion 2</option>
                                        <option value="localion 3">localion 3</option>
                                        <option value="localion 4">localion 4</option>
                                    </select>
                                    <i id="locationReset"
                                        class="resetSelect fa-solid fa-x flex justify-center items-center bg-[#05b2b0] text-white p-2 rounded-full w-6 h-6 text-[13px]"></i>

                                </div>

                            </div>

                            <div class="flex justify-center">
                                <span id="resetAllPostData"  class="px-3 py-2   bg-[#05b2b0] text-white rounded" >Reset All</span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="postSlider postReady p-10 pt-0 flex justify-center items-center h-[442px]">
                <div class="  w-full flex flex-col gap-14">

                    <p class="text-center text-2xl">your post is ready !</p>



                    <div
                        class="postFather bg-[#E2E8F0]  rounded-lg px-7 pt-7 flex flex-col  items-center gap-5 w-full h-72 overflow-y-scroll">

                        <div class=" flex w-full items-center gap-3">
                            <img src="{{ asset('images/profilePic.png') }}"
                                class="w-10 h-10 object-cover rounded-full" alt="" srcset="">
                            <div class="flex flex-col gap-1 text-xs w-full">
                                <span class="text-[16px] w-full flex flex-wrap gap-1">

                                    <span class=" flex justify-center items-center ">Adil Ezerouki</span>

                                    <span id="feelingDisplay"
                                        class="newPostDataDisplay flex justify-center items-center feelingSpan font-[100] text-slate-500 gap-1"> </span>

                                    <span id="activityDisplay"
                                        class=" newPostDataDisplay flex justify-center items-center  feelingSpan font-[100] text-slate-500 gap-1"></span>

                                    <span id="tagDisplay"
                                        class=" flex justify-center items-center  feelingSpan font-[100] text-slate-500 gap-1">
                                        <img style="display: none" src="{{ asset('images/tag.png') }}" alt="" srcset=""
                                                class="tagANDlocalIcon cursor-pointer w-5 h-5">
                                        <span class="newPostDataDisplay text-black flex justify-center items-center gap-1">


                                        </span>

                                    </span>


                                    <span id="locationDisplay"
                                        class=" flex justify-center items-center  feelingSpan font-[100] text-slate-500 gap-1">
                                        <img style="display: none" src="{{ asset('images/location.png') }}" alt=""
                                                srcset="" class="tagANDlocalIcon cursor-pointer w-5 h-5">
                                        <span class="newPostDataDisplay text-black flex justify-center items-center gap-1">

                                        </span>
                                    </span>

                                </span>


                                {{-- <img src="{{ asset('images/quiz.png') }}" class="w-6 cursor-pointer" alt=""
                                    srcset=""> --}}
                                </span>

                                <span>18 h</span>
                            </div>
                        </div>
                        <div class="NewPostPreview w-full h-auto  flex flex-col gap-5">
                            <p style="display: none" class="newPostDataDisplay">

                            </p>


                            <img style="display: none" class="newPostDataDisplay" src="" id="storyReadyPic" alt=""
                                srcset="" class="  w-full h-72 rounded-lg object-cover" />


                            <div class="react flex gap-1 items-center justify-between text-slate-500">
                                <div class=" flex gap-3 items-center justify-center">
                                    <div class="flex">
                                        <img src="{{ asset('images/react buttons/likeReact.png') }}" class="w-7"
                                            alt="" srcset="">
                                        <img src="{{ asset('images/react buttons/loveReact.png') }}" class="w-7"
                                            alt="" srcset="">
                                        <img src="{{ asset('images/react buttons/funnyReact.png') }}" class="w-7"
                                            alt="" srcset="">
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

                                        <img src="{{ asset('images/react buttons/share.png') }}" id="storyReadyPic"
                                            alt="" srcset="" class="  w-7 rounded-lg object-cover" />
                                        <span>200</span>
                                    </div>
                                </div>

                            </div>

                            <hr class="bg-slate-400 h-[2px]">

                            <div class="ReactBtns flex justify-between pb-7 text-slate-500">
                                <div class="likeBtn flex gap-2 items-center">
                                    <img src="{{ asset('images/react buttons/likeReact.png') }}" id="storyReadyPic"
                                        alt="" srcset="" class="  w-8 rounded-lg object-cover" />
                                    <span>Like</span>
                                </div>
                                <div class="commentBtn flex gap-2 items-center">
                                    <img src="{{ asset('images/react buttons/comments.png') }}" id="storyReadyPic"
                                        alt="" srcset="" class="  w-8 rounded-lg object-cover" />
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

                    {{-- <div class="h-72 w-full">

                    </div> --}}

                </div>

            </div>

            <div class="flex justify-center items-center gap-10 p-10 pt-0 w-full">

                <button type="button" id="previousPostBtn"
                    class="postBTN hidden gap-3 justify-center slideBtn bg-[#05B2B0] text-white px-3 py-2 w-1/2 rounded ">

                    Back
                    <i class="fa-solid fa-arrow-left self-center"></i>

                </button>

                <button type="button" id='previewPostBtn'
                    class="postBTN flex gap-3 justify-center bg-[#EF592E] text-white px-3 py-2 w-full rounded">

                    Preview
                    <i class="fa-solid fa-arrow-right self-center"></i>

                </button>

                <button type="submit" id='submitPostBtn'
                    class="postBTN hidden gap-3  justify-center bg-[#EF592E] text-white px-3 py-2 w-1/2 rounded">

                    upload
                    <i class="fa-solid fa-arrow-right self-center"></i>

                </button>

            </div>

        </form>
    </x-pop-up-div>

    <div class="app flex h-full">


        @include('layouts.sideBar')


        <div class="flex flex-col w-full">
            @include('layouts.header')

            <div class="bg-[#F2F2F2] h-full p-5">
                @yield('content')
            </div>
        </div>

    </div>

    @if (session('welcoming_message'))
        <x-alert-error>

            {{ session('welcoming_message') }}

        </x-alert-error>
    @endif

    @if (session('storySuccess'))
        <x-created-success-alert>
            {{ session('storySuccess') }}
            {{-- <p>your story is created successfuly !</p> --}}
        </x-created-success-alert>
    @endif

    @if (session('storyDeleteSuccess'))
        <x-deleted-success-alert>
            {{ session('storyDeleteSuccess') }}
            {{-- <p>your story is created successfuly !</p> --}}
        </x-deleted-success-alert>
    @endif

    <script src="{{ asset('js/errAlert/errAlert.js') }}"></script>
</body>

</html>
