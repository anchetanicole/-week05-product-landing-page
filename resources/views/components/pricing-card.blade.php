@props([
    'name'        => 'Green Level',
    'price'       => '0',
    'period'      => 'free',
    'description' => 'Start your Starbucks journey.',
    'features'    => [],
    'featured'    => false,
    'reserve'     => false
])

@if($featured)

{{-- ── GOLD LEVEL — dark green ── --}}
<div class="relative flex flex-col rounded-2xl border border-green bg-green p-8 text-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

    <span class="absolute -top-3.5 left-1/2 -translate-x-1/2 whitespace-nowrap rounded-full bg-green-bright px-5 py-1 text-[10px] font-bold uppercase tracking-[0.18em] text-white shadow">
        Most Popular
    </span>

    <div class="border-b border-green-mid pb-6">
        <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-green-light">{{ $name }}</p>
        <div class="mt-4 flex items-baseline gap-1.5">
            <span class="font-serif text-4xl font-bold">₱{{ $price }}</span>
            <span class="text-sm text-green-light">/ {{ $period }}</span>
        </div>
        <p class="mt-2 text-sm text-green-mist/80">{{ $description }}</p>
    </div>

    <ul class="mt-6 flex-1 space-y-3.5">
        @foreach($features as $feature)
            <li class="flex items-start gap-3 text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-4 w-4 shrink-0 text-green-light" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 6 9 17l-5-5"/>
                </svg>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <a href="#contact" class="mt-8 block w-full rounded-full bg-white px-5 py-3 text-center text-xs font-bold uppercase tracking-[0.18em] text-green transition duration-300 hover:-translate-y-0.5 hover:bg-green-mist hover:shadow-md">
        Get Started
    </a>

</div>

@elseif($reserve)

{{-- ── RESERVE ACCESS — deep dark brown, inline style to guarantee color ── --}}
<div class="relative flex flex-col rounded-2xl p-8 text-white shadow-lg transition duration-300 hover:-translate-y-1 hover:shadow-2xl"
     style="background-color:#2C2C2C; border: 1px solid #444444;">

    <span class="absolute -top-3.5 left-1/2 -translate-x-1/2 whitespace-nowrap rounded-full px-5 py-1 text-[10px] font-bold uppercase tracking-[0.18em] text-white shadow"
          style="background-color:#CBA258;">
        ✦ Reserve
    </span>

    <div class="pb-6" style="border-bottom: 1px solid #444444;">
        <p class="text-[10px] font-bold uppercase tracking-[0.2em]" style="color:#CBA258;">{{ $name }}</p>
        <div class="mt-4 flex items-baseline gap-1.5">
            <span class="font-serif text-4xl font-bold text-white">₱{{ $price }}</span>
            <span class="text-sm" style="color:#CBA258;">/ {{ $period }}</span>
        </div>
        <p class="mt-2 text-sm" style="color:rgba(255,255,255,0.6);">{{ $description }}</p>
    </div>

    <ul class="mt-6 flex-1 space-y-3.5">
        @foreach($features as $feature)
            <li class="flex items-start gap-3 text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-4 w-4 shrink-0" style="color:#CBA258;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 6 9 17l-5-5"/>
                </svg>
                <span class="text-white/90">{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <a href="#contact" class="mt-8 block w-full rounded-full px-5 py-3 text-center text-xs font-bold uppercase tracking-[0.18em] transition duration-300 hover:-translate-y-0.5 hover:shadow-md"
       style="background-color:#CBA258; color:#1A1A1A;">
        Get Started
    </a>

</div>

@else

{{-- ── GREEN LEVEL — clean white ── --}}
<div class="relative flex flex-col rounded-2xl border border-parchment bg-white p-8 text-espresso shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">

    <div class="border-b border-parchment pb-6">
        <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-green-mid">{{ $name }}</p>
        <div class="mt-4 flex items-baseline gap-1.5">
            @if($price === '0')
                <span class="font-serif text-4xl font-bold">Free</span>
            @else
                <span class="font-serif text-4xl font-bold">₱{{ $price }}</span>
                <span class="text-sm text-text-muted">/ {{ $period }}</span>
            @endif
        </div>
        <p class="mt-2 text-sm text-text-muted">{{ $description }}</p>
    </div>

    <ul class="mt-6 flex-1 space-y-3.5">
        @foreach($features as $feature)
            <li class="flex items-start gap-3 text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-4 w-4 shrink-0 text-green-bright" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 6 9 17l-5-5"/>
                </svg>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <a href="#contact" class="mt-8 block w-full rounded-full bg-green px-5 py-3 text-center text-xs font-bold uppercase tracking-[0.18em] text-white transition duration-300 hover:-translate-y-0.5 hover:bg-green-mid hover:shadow-md">
        Get Started
    </a>

</div>

@endif
