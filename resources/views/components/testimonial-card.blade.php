@props([
    'image'    => 'https://i.pravatar.cc/150?img=1',
    'name'     => 'Maria Santos',
    'position' => 'Starbucks Regular',
    'review'   => 'Starbucks always delivers a consistently great experience.'
])

<div class="flex min-w-0 flex-col">
    <div class="relative flex flex-1 flex-col rounded-3xl border border-parchment bg-white p-7 shadow-sm transition duration-300 hover:shadow-md">

    <!-- Opening quote mark -->
    <div class="mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-mist" viewBox="0 0 24 24" fill="currentColor">
            <path d="M11.3 6C9.4 7.4 8 9.5 8 12v6H2v-6c0-4.4 2.7-8.2 7-9.8L11.3 6zM23.3 6C21.4 7.4 20 9.5 20 12v6h-6v-6c0-4.4 2.7-8.2 7-9.8L23.3 6z"/>
        </svg>
    </div>

    <!-- Review text -->
    <p class="flex-1 font-display text-base font-light italic leading-7 text-espresso/80">
        {{ $review }}
    </p>

    <!-- Star rating — Starbucks green stars -->
    <div class="mt-5 flex gap-0.5">
        @for($i = 0; $i < 5; $i++)
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-green-bright" viewBox="0 0 24 24" fill="currentColor">
                <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 0 0 .95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 0 0-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 0 0-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 0 0-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 0 0 .951-.69l1.519-4.674z"/>
            </svg>
        @endfor
    </div>

        <!-- Speech bubble tail points toward the author -->
        <span aria-hidden="true" class="absolute -bottom-2.5 left-8 h-5 w-5 rotate-45 border-b border-r border-parchment bg-white"></span>
    </div>

    <!-- Author -->
    <div class="mt-7 flex items-center gap-3 rounded-2xl border border-parchment bg-white px-5 py-4 shadow-sm">
        <img src="{{ $image }}" alt="{{ $name }}"
             class="h-11 w-11 shrink-0 rounded-full object-cover ring-2 ring-green-mist">
        <div class="min-w-0">
            <p class="text-sm font-bold text-green">{{ $name }}</p>
            <p class="text-xs uppercase tracking-wider text-text-muted">{{ $position }}</p>
        </div>
    </div>

</div>
