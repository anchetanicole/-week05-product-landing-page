@props([
    'text'  => 'Get Started',
    'href'  => '#',
    'style' => 'primary'
])

<a
    href="{{ $href }}"
    class="
        inline-flex items-center justify-center gap-2
        rounded-full px-7 py-3
        text-xs font-bold uppercase tracking-[0.18em]
        transition duration-300 hover:-translate-y-0.5
        {{ $style === 'secondary'
            ? 'border border-parchment bg-transparent text-green hover:border-green hover:text-green-mid'
            : 'bg-green text-white shadow-sm hover:bg-green-mid hover:shadow-md'
        }}
    "
>
    {{ $text }}
</a>
