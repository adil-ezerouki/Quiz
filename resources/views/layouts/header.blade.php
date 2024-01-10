<header class="bg-white px-5 py-3 w-full flex items-center justify-center shadow-2xl gap-6">
    <div class="relative searchBar w-[73%] flex">
        <i class="fa-solid fa-magnifying-glass p-2 bg-slate-200 flex items-center rounded-l"></i>
        <input class="search p-2 bg-slate-200 w-full focus:outline-none" type="text" name="" id=""
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

        <div class="results absolute bg-slate-300 top-[60px] w-full h-[358px] p-7 rounded flex justify-center items-center"
            style="display: none">

            <div searchPic class="beforeSearchDiv flex flex-col  justify-center items-center gap-6">
                <img class="w-[400px]" src="{{ asset('images/beforeSearch.png') }}" alt="">
                <p class="text-2xl text-[#425885]">Make Your Search !</p>
            </div>

            <div searchPic class="NothingFound flex flex-col  justify-center items-center gap-6" style="display: none">
                <img class="w-[340px]" src="{{ asset('images/notFound.png') }}" alt="">
                <p class="text-2xl text-[#425885]">No Result Found !</p>
            </div>
        </div>
    </div>


    <div class="w-[13%] relative h-full" >
        <x-button background="bg-[#05B2B0]" text="text-white" width="w-full h-full">
            <span class="flex gap-3 justify-center" id="enterCodebtn">
                <span class="">Join Room</span>
                <i class="fa-solid fa-arrow-down self-center"></i>
            </span>
        </x-button>

        <div class="roomDiv absolute bg-slate-300 right-[0] top-[60px] p-7 rounded flex flex-col justify-center items-center gap-4"
            >
            <img class="w-[190px]" src="{{ asset('images/roomPic.png') }}" alt="">
            <form action="" method="post" class="flex gap-4 flex-col ">
                <input type="text" class="p-2 focus:outline-none rounded border text-center"
                    name="" id="" placeholder="enter your code">

                <x-button background="bg-[#05B2B0]" text="text-white" width="w-full">
                    <span class="">Enter Code</span>
                </x-button>
            </form>
        </div>
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
