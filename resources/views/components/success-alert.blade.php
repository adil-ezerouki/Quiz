<div class="errors h-[100vh] w-full flex justify-center items-center absolute top-0">
    <div class="popup-errors flex flex-col rounded-lg bg-white w-[300px]">
        <div class="emoji bg-green-600 flex flex-col gap-3 justify-center items-center p-4 text-white rounded-t-lg ">
            <i class="fa-regular fa-face-smile text-8xl"></i>

            <p class="text-2xl">Done !</p>
        </div>

        <div class="p-4 pb-0 text-center">

            {{ $slot }}

        </div>
        <div class="flex justify-center items-center p-4 text-white ">
            <button class="bg-green-600 rounded-full w-[90px] py-2 px-4 hover:scale-110 transition-all"
                id="okBTN">ok</button>
        </div>

    </div>
</div>
