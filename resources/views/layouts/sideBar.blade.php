<div class="sideBar flex flex-col  justify-between  relative bg-slate-700 text-white h-full p-2 w-[20%]">
    <i
        class="fa-solid fa-xmark absolute top-2 right-[-13px]  text-center bg-black text-white rounded-full p-2 w-[28px] text-[12px] active:scale-105 transition-all cursor-pointer"></i>
    <div class="logo flex pt-4 items-center gap-5">
        <img src="{{ asset('images/favicon.png') }}" class="w-14 websiteLogo" alt="website logo">
        <p class="websiteName text-3xl">Quiz.com</p>

    </div>
    <nav class="w-full flex flex-col gap-10">
        <ul class="flex flex-col gap-5 w-full text-lg">
            <li class="w-full flex flex-col gap-4 p-2 pl-2 hover:bg-slate-500 rounded-lg transition-all">

                <a href="#" class="flex gap-7  link">
                    <i class="fa-solid fa-house self-center text-2xl"></i>
                    <span>Dashboard</span>
                </a>

            </li>

            <li class="w-full flex flex-col gap-4 p-2 pl-2 hover:bg-slate-500 rounded-lg transition-all">

                <a href="#" class="flex gap-7 link">
                    <i class="fa-solid fa-house self-center text-2xl"></i>
                    <span>Porfile</span>
                </a>

            </li>

            <li class="w-full flex flex-col gap-4 p-2 pl-2 hover:bg-slate-500 rounded-lg transition-all">

                <a href="#" class="flex gap-7 link">
                    <i class="fa-solid fa-house self-center text-2xl"></i>
                    <span>Dashboard</span>
                </a>

            </li>

            <li class="w-full flex flex-col gap-4 p-2 pl-2 hover:bg-slate-500 rounded-lg transition-all">

                <a href="#" class="flex gap-7 link">
                    <i class="fa-solid fa-house self-center text-2xl"></i>
                    <span>Dashboard</span>
                </a>

            </li>

            <li class="w-full flex flex-col gap-4 p-2 pl-2 hover:bg-slate-500 rounded-lg transition-all">

                <a href="#" class="flex gap-7 link">
                    <i class="fa-solid fa-house self-center text-2xl"></i>
                    <span>Dashboard</span>
                </a>
            </li>

        </ul>
    </nav>
    <div class=" p-2 mb-4  flex gap-16 bg-slate-500 rounded-lg ">
        <div class="flex gap-6">
            <img src="{{ asset('images/profilePic.png') }}" class="w-12 object-cover rounded-xl" alt="Profile Pic"
                srcset="">
            <div class="name flex flex-col ">
                <span>Adil</span>
                <span>Ezerouki</span>
            </div>
        </div>
        <span class="self-center">  <a href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket text-2xl"></a></i>
        </span>
    </div>
</div>

<script src="{{ asset('js/dashboard/dashboard.js') }}"></script>
