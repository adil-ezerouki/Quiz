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

<body class="h-[100vh]">

    {{-- popup div for stories --}}
    <x-pop-up-div>

        <div class="biggestStoryHolder relative flex flex-col  pt-0 w-[560px] h-[570px]">

            <i class="flex justify-center items-center fa-solid fa-x absolute w-10 h-10 right-2 top-2 bg-slate-200  rounded-full cursor-pointer"></i>

            <div class="progressDiv bg-slate-700 w-[33.3%] h-2 rounded-t-lg mb-10">

            </div>


            <div class="storySlider flex flex-col gap-10 p-10 pt-0">


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

            <div class="storySlider">
                <div style="display: inline" class=" storyPicUpload storySliderType flex flex-col gap-10 p-10 pt-0">

                    <p class="text-center text-2xl">upload your file</p>

                    <div
                        class="border border-[#0000007E] border-dashed p-3 flex flex-col justify-center items-center gap-5 w-96 h-72">

                        <div class="bg-white p-2 rounded-full flex flex-col justify-center items-center gap-3">
                            <img src="{{ asset('images/PicFileStoryPic.png') }}" class="w-20" alt=""
                                srcset="">

                            <p>supports JPG, JPEG200,PNG</p>
                        </div>

                        <input type="file" name="" id="" class="w-56">
                    </div>
                </div>

                <div style="display: inline" class=" storyTextUpload storySliderType flex flex-col gap-10 p-10 pt-0">

                    <p class="text-center text-2xl">type your Text</p>

                    <div action="" method="post"
                        class="border border-[#0000007E] border-dashed p-3 flex flex-col justify-center items-center gap-5 w-96">

                        <div class="bg-white p-2 rounded-full flex flex-col justify-center items-center gap-3">
                            <img src="{{ asset('images/PicFontStoryPic.png') }}" class="w-20" alt=""
                                srcset="">

                            <p class="text-center">type the text you want to include in your sotry </p>
                        </div>

                        <textarea type="text" placeholder="type you story text" name="" id=""
                            class="w-[80%] h-24 border border-[#bfbfbf] p-3 ">
                </textarea>
                    </div>
                </div>
            </div>


            <div class="storySlider storyready flex flex-col gap-10 justify-center items-center p-10 pt-0">
                <p class="text-center text-2xl">Your Story is ready !</p>


                <div class="storyFather w-[260px] h-[370px] flex justify-center items-center gap-4 rounded-lg">
                    <div class="story relative w-full h-full">
                        <div class="absolute top-1 left-1 flex justify-center items-center gap-2 text-white">
                            <img src="{{ asset('images/profilePic.png') }}" class="w-8 h-8 object-cover rounded-full"
                                alt="" srcset="">
                            <div class="flex flex-col text-xs">
                                <span class="">Adil Ezerouki</span>
                                <span>18 h</span>
                            </div>
                        </div>
                        <div class="picStory storyT">
                            <img src="{{ asset('images/storyPicTest.png') }}" alt="" srcset=""
                                class="w-full h-full rounded-lg">
                        </div>

                        <div class="picStory storyT flex justify-center items-center bg-red-500 w-full h-full rounded-lg">
                            <p>
                                Hi I am doing Fine man
                            </p>
                        </div>

                    </div>
                </div>

            </div>

            <div class="flex justify-center items-center gap-10 p-10 pt-0">

                <button id="previous"
                    class=" flex gap-3 justify-center slideBtn bg-[#05B2B0] text-white px-3 py-2 w-[80%] rounded ">

                    Back
                    <i class="fa-solid fa-arrow-left self-center"></i>

                </button>

                <button id='next'
                    class="slideBtn flex gap-3 justify-center bg-[#EF592E] text-white px-3 py-2 w-[80%] rounded">

                    Next
                    <i class="fa-solid fa-arrow-right self-center"></i>

                </button>

            </div>

        </div>
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

    <script src="{{ asset('js/errAlert/errAlert.js') }}"></script>
</body>

</html>
