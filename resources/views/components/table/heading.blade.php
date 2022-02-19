@props([
    'sortable' => null,
    'direction' => null,
])

<th
    {{ $attributes->merge(['class' => 'w-1/4 pl-4 py-2 bg-cool-gray-50'])->only('class') }}
>
    @unless ($sortable)
        <span class="text-center text-sm font-medium text-amber-400 uppercase tracking-wider opacity-90">{{ $slot }}</span>
    @else
        
        <button {{ $attributes->except('class') }} class="w-full flex flex-row justify-center items-center text-center text-sm  font-medium text-amber-400 uppercase tracking-wider opacity-90 group focus:outline-none focus:underline">
            <span>{{ $slot }}</span>

            <span>
                @if ($direction === 'asc')
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                @elseif ($direction === 'desc')
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                @else
                    <svg class="w-3 h-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                @endif
            </span>
        </button>
    @endif
</th>