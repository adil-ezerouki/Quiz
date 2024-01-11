<div class="sideBar flex flex-col gap-7  relative bg-white shadow-xl h-full p-2 w-[280px]">
    <i
        class="fa-solid fa-xmark absolute top-2 right-[-13px]  text-center bg-black text-white rounded-full p-2 w-[28px] text-[12px] active:scale-105 transition-all cursor-pointer"></i>
    <div class="logo flex pt-4 items-center gap-5">
        <img src="{{ asset('images/favicon.png') }}" class="w-14 websiteLogo" alt="website logo">
        <p class="websiteName text-3xl">Quiz.com</p>

    </div>

    <div class=" p-2  flex gap-16 rounded-lg ">
        <div class="flex gap-4">
            <img src="{{ asset('images/profilePic.png') }}" id="profilePic" class=" w-14 h-14 object-cover rounded-lg"
                alt="Profile Pic" srcset="">
            <div class=" text-lg flex flex-col justify-center text-center ">

                <div class="name flex gap-2">
                    <span>Adil</span>
                    <span>Ezerouki</span>
                </div>

                <div class="role text-[14px] bg-slate-300 rounded">
                    <span>Teacher</span>
                </div>

            </div>
        </div>
    </div>

    <div class=" flex justify-center">
        <x-button background="bg-[#EF592E]" text="text-white" width=''>
            <div class="flex gap-3 justify-center">
                <span>create</span>
                <i class="fa-solid fa-plus self-center"></i>
            </div>
        </x-button>
    </div>


    <nav class="w-full flex flex-col gap-10 overflow-y-scroll">

        <ul class="flex flex-col gap-5 w-full text-lg">

            <li
                class="w-full flex flex-col gap-4 p-2 pl-2 hover:bg-slate-300 rounded-lg transition-all @if (Route::currentRouteName() == 'getFeedView') bg-slate-300  @endif">

                <a href="{{ route('getFeedView') }}" class="flex gap-7  link">
                    <i class="fa-solid fa-braille self-center text-2xl"></i>
                    <span class="self-center">Feed</span>
                </a>

            </li>

            <li class="w-full flex flex-col gap-4 p-2 pl-2 hover:bg-slate-300 rounded-lg transition-all @if (Route::currentRouteName() == '') bg-slate-300  @endif">

                <a href="{{ route('getDashboardView') }}" class="flex gap-7  link">
                    {{-- <i class="fa-solid fa-house"></i> --}}
                    <i class="fa-solid fa-chart-simple self-center text-2xl"></i>
                    <span class="self-center">Dashboard</span>
                </a>

            </li>

            <li class="w-full flex flex-col gap-4 p-2 pl-2 hover:bg-slate-300 rounded-lg transition-all">

                <a href="#" class="flex gap-7 link">
                    <i class="fa-solid fa-user self-center text-2xl"></i>
                    <span class="self-center">Porfile</span>
                </a>

            </li>

            <li class="w-full flex flex-col gap-4 p-2 pl-2 hover:bg-slate-300 rounded-lg transition-all">

                <a href="#" class="flex gap-7 link">
                    <i class="fa-solid fa-gear self-center text-2xl"></i>
                    <span class="self-center">Settings</span>
                </a>

            </li>

            <li class="w-full flex flex-col gap-4 p-2 pl-2 hover:bg-slate-300 rounded-lg transition-all">

                <a href="#" class="flex gap-7 link">
                    <i class="fa-solid fa-sun self-center text-2xl"></i>
                    <span class="self-center flex gap-1">
                        <span>Light Mode</span>
                    </span>
                </a>
            </li>

            <li class="w-full flex flex-col gap-4 p-2 pl-2 hover:bg-slate-300 rounded-lg transition-all">

                <a href="{{ route('logout') }}" class="flex gap-7 link">
                    <i class="fa-solid fa-right-from-bracket self-center text-2xl"></i>
                    <span class="self-center">Logout</span>
                </a>

            </li>

        </ul>
    </nav>
</div>

<script src="{{ asset('js/sideBar/sideBar.js') }}"></script>
