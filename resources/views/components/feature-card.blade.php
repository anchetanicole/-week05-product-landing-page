@props([
    'title'       => 'Our Craft',
    'description' => 'Expertly crafted beverages made with the finest ingredients.'
])

<div class="group relative overflow-hidden rounded-3xl border border-parchment bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-green-light hover:shadow-xl lg:col-span-3">

    <!-- Corner accent -->
    <div class="absolute right-0 top-0 h-16 w-16 rounded-bl-3xl bg-green-mist/50 transition duration-300 group-hover:bg-green-mist"></div>

    <div class="relative flex items-start gap-4">
        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl border border-parchment bg-cream text-green-mid transition duration-300 group-hover:border-green group-hover:bg-green group-hover:text-white">
            {{ $slot }}
        </div>
        <div class="min-w-0 flex-1">
            <h3 class="font-serif text-lg font-bold text-green">
                {{ $title }}
            </h3>
            <p class="mt-1 text-sm leading-6 text-text-muted">
                {{ $description }}
            </p>
        </div>
    </div>

    <!-- Bottom line accent -->
    <div class="absolute inset-x-6 bottom-0 h-0.5 origin-left scale-x-0 rounded-full bg-green-bright transition-transform duration-500 group-hover:scale-x-100"></div>

</div>
