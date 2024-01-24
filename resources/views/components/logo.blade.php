@props(['label', 'type' => 'button', 'href' => null])

<button type="{{ $type }}" @click="$emit('click')" @if($href) href="{{ $href }}" @endif>
    {{ $label }}
</button>


<img src="{{ asset('logo.png') }}" width="50px" height="50px" alt="Your Logo">