{{-- @props(["class"=> "class"]) --}}

<div  class=" {{$class}} absolute bg-[#0000007E] w-full h-full z-[9] flex justify-center items-center">
    <div class="bg-white flex rounded-lg">
        {{ $slot }}
    </div>
</div>
