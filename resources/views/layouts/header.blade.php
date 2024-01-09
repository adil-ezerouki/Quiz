<header class="bg-white px-5 py-3 w-full h-[12vh] flex items-center justify-center shadow-2xl gap-6">
    <div class="relative searchBar w-[73%] flex">
        <i class="fa-solid fa-magnifying-glass p-2 bg-slate-200 flex items-center rounded-l"></i>
        <input class=" search p-2 bg-slate-200 w-full focus:outline-none" type="text" name="" id=""
            placeholder="search about quizes, users, and gategories ">
        <div class="p-2 bg-slate-200 flex items-center rounded-r">
            <div class="bg-slate-400 w-[0.5px] h-7 mx-2">
            </div>
            <select name="" id="" class="px-2 py-1 focus:outline-none bg-slate-200">
                <option value="">My Library</option>
                <option value="">Link 2</option>
                <option value="">Link 3</option>
            </select>
        </div>

        <div class="results absolute bg-slate-600 top-[47px] w-full p-7 rounded-b" style="display: none">

            <div class="flex flex-col  justify-center items-center gap-2">
                <img class="w-[400px]" src="{{ asset('images/beforeSearch.png') }}" alt="">
                <p class="text-2xl">make your search !</p>
            </div>
        </div>
    </div>


    <div class="w-[13%]">
        <x-button background="bg-[#05B2B0]" text="text-white" width="w-full">
            <span class="">Enter Code</span>
        </x-button>
    </div>

    <div class="">
        <i class="fa-regular fa-bell flex justify-center items-center text-2xl bg-slate-200 rounded-full w-12 h-12"></i>
    </div>
    <div class="">
        <img src="{{ asset('images/profilePic.png') }}" id="profilePic" class=" w-11 h-11 object-cover rounded-full"
            alt="Profile Pic">

    </div>

</header>

<script src="{{ asset('js/header/header.js') }}"></script>
