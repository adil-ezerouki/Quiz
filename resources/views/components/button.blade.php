
@props(['background','text'])

<button class="{{ $background }} {{ $text }} px-3 py-2 w-[80%] rounded">
    {{ $slot }}
</button>
