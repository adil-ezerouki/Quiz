
@props(['background','text','width'])

<button class="{{ $background }} {{ $text }} {{$width}} px-3 py-2 w-[80%] rounded">
    {{ $slot }}
</button>
