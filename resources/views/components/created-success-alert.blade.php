<div class="errors h-[100vh] w-full flex justify-center items-center absolute top-0">
    <div class="popup-errors flex flex-col justify-center items-center rounded-lg bg-white w-[300px] gap-6 p-6">
        {{-- <div class="emoji flex flex-col gap-3 justify-center items-center p-4 text-white rounded-t-lg "> --}}
            <img src="{{asset("images/createdSuccessfully.png")}}" alt="" class="w-28" srcset="">


            <p class="text-2xl text-[#74da7f]">Created !</p>
        {{-- </div> --}}

        <div class=" text-center">

            {{ $slot }}

        </div>

        <div class="flex justify-center items-center text-white ">
            <button class="bg-[#74da7f] rounded-full w-[90px] py-2 px-4 hover:scale-110 transition-all"
                id="okBTN">ok</button>
        </div>

    </div>
</div>
