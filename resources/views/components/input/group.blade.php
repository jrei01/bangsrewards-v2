@props([

    'label',
    'for',
    'error' => false,

    ])

<div class="flex flex-wrap flex-col text-xs">

    <label for="{{ $for }}" class="text-amber-400 opacity-90">{{ $label }}</label>

    {{ $slot }}

    @if ($error)
        <span class="text-red-500 text-xs pt-2 opacity-100">{{ $error }}</span>
    @endif

</div>