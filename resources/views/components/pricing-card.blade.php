@props([
    'name'        => 'Green Level',
    'price'       => '0',
    'period'      => 'free',
    'description' => 'Start your Starbucks journey.',
    'features'    => [],
    'featured'    => false
])

<div class="
    relative flex flex-col rounded-2xl border p-8 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl
    {{ $featured
        ? 'border-green bg-green text-white'
        : 'border-parchment bg-white text-espresso'
    }}
">

    @if($featured)
        <span class="absolute -top-3.5 left-1/2 -translate-x-1/2 whitespace-nowrap rounded-full bg-green-bright px-5 py-1 text-[10px] font-bold uppercase tracking-[0.18em] text-white shadow">
            Most Popular
        </span>
    @endif

    <!-- Header -->
    <div class="border-b {{ $featured ? 'border-green-mid' : 'border-parchment' }} pb-6">
        <p class="text-[10px] font-bold uppercase tracking-[0.2em] {{ $featured ? 'text-green-light' : 'text-green-mid' }}">
            {{ $name }}
        </p>
        <div class="mt-4 flex items-baseline gap-1.5">
            @if($price === '0')
                <span class="font-serif text-4xl font-bold">Free</span>
            @else
                <span class="font-serif text-4xl font-bold">₱{{ $price }}</span>
                <span class="text-sm {{ $featured ? 'text-green-light' : 'text-text-muted' }}">/ {{ $period }}</span>
            @endif
        </div>
        <p class="mt-2 text-sm {{ $featured ? 'text-green-mist/80' : 'text-text-muted' }}">
            {{ $description }}
        </p>
    </div>

    <!-- Features -->
    <ul class="mt-6 flex-1 space-y-3.5">
        @foreach($features as $feature)
            <li class="flex items-start gap-3 text-sm">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="mt-0.5 h-4 w-4 shrink-0 {{ $featured ? 'text-green-light' : 'text-green-bright' }}"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                     stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 6 9 17l-5-5"/>
                </svg>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <!-- CTA -->
    <a href="#contact"
       class="
           mt-8 block w-full rounded-full px-5 py-3 text-center text-xs font-bold uppercase tracking-[0.18em] transition duration-300 hover:-translate-y-0.5 hover:shadow-md
           {{ $featured
               ? 'bg-white text-green hover:bg-green-mist'
               : 'bg-green text-white hover:bg-green-mid'
           }}
       "
    >
        Get Started
    </a>

</div>
