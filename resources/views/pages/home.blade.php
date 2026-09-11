@extends('layouts.app')

@section('content')

    {{-- NAVBAR --}}
    <x-navbar />

    {{-- HERO --}}
    <x-hero />


    {{-- ══════════════════════════════════════
         FEATURES — Bento grid
         Fix: wide card moved inside green tall card (bottom)
    ══════════════════════════════════════ --}}
    <section id="features" class="bg-cream py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <!-- Header -->
            <div class="mb-14 flex flex-col items-start gap-3 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <span class="inline-block rounded-full bg-green/10 px-3 py-1 text-[10px] font-bold uppercase tracking-[0.25em] text-green">
                        Why Choose Starbucks
                    </span>
                    <h2 class="mt-3 whitespace-nowrap font-serif text-[clamp(1rem,5vw,3rem)] font-bold text-green">
                        More Than a Coffee Shop
                    </h2>
                </div>
                <p class="max-w-xs text-sm leading-7 text-text-muted lg:text-right">
                    Ethically sourced, expertly crafted, and always welcoming — in every cup and every store.
                </p>
            </div>

            {{-- Green card left + four horizontal feature cards right --}}
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-5">

                {{-- Green card spans the four feature rows, with Seasonal & Reserve below --}}
                <div class="group relative flex flex-col overflow-hidden rounded-3xl bg-green p-6 text-white shadow-md transition duration-300 hover:shadow-xl lg:col-span-2 lg:row-span-4 lg:p-8">
                    <div class="pointer-events-none absolute -right-10 -top-10 h-48 w-48 rounded-full bg-green-mid/40"></div>

                    {{-- Top: icon + heading + description --}}
                    <div class="relative flex-1">
                        <div class="flex items-start gap-4">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-white/10 text-green-light ring-1 ring-white/10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/>
                                <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
                            </svg>
                        </div>
                        <div class="min-w-0 flex-1">
                        <h3 class="font-serif text-2xl font-bold text-white">Premium Coffee Sourcing</h3>
                        <p class="mt-1 text-sm leading-6 text-green-mist/80">
                            We partner with farmers across 30+ countries, guided by our C.A.F.E. Practices — ensuring every bean is ethically grown and sustainably harvested before it reaches your cup.
                        </p>
                        </div>
                        </div>
                        <div class="mt-8 border-t border-white/10 pt-6">
                            <p class="text-xs uppercase tracking-widest text-green-light/60">C.A.F.E. Verified</p>
                            <p class="mt-1 font-serif text-3xl font-bold text-white">100%</p>
                            <p class="text-xs text-green-light/50">Ethically Sourced Arabica</p>
                        </div>
                    </div>

                    {{-- Bottom: Seasonal & Reserve card embedded --}}
                    <div class="mt-8 rounded-2xl border border-white/15 bg-white/10 p-5">
                        <div class="flex items-start gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-white/15 text-green-light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-serif text-base font-bold text-white">Seasonal &amp; Reserve</h4>
                                <p class="mt-1 text-xs leading-5 text-green-mist/70">
                                    Limited-edition drinks and rare single-origin beans — only at Reserve Roasteries.
                                </p>
                            </div>
                        </div>
                        <a href="#menu" class="mt-4 inline-block w-full rounded-full bg-white/15 py-2 text-center text-[10px] font-bold uppercase tracking-widest text-white transition hover:bg-white/25">
                            See Menu →
                        </a>
                    </div>
                </div>

                {{-- Four horizontal cards stacked on the right --}}
                <x-feature-card
                    title="Handcrafted Beverages"
                    description="From classic espressos to seasonal Frappuccinos — every drink made with precision and care.">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 8h1a4 4 0 0 1 0 8h-1"/>
                        <path d="M3 8h14v9a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4Z"/>
                        <line x1="6" x2="6" y1="2" y2="4"/>
                        <line x1="10" x2="10" y1="2" y2="4"/>
                        <line x1="14" x2="14" y1="2" y2="4"/>
                    </svg>
                </x-feature-card>

                <x-feature-card
                    title="Starbucks Rewards"
                    description="Earn Stars on every purchase. Redeem for free drinks, food, and exclusive member-only perks.">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                </x-feature-card>

                <x-feature-card
                    title="Mobile Order & Pay"
                    description="Order ahead on the app, skip the queue, and pick up your drink exactly when it's ready.">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="14" height="20" x="5" y="2" rx="2" ry="2"/>
                        <path d="M9 7h6"/><path d="M9 11h6"/><path d="M9 15h4"/>
                    </svg>
                </x-feature-card>

                <x-feature-card
                    title="Cozy Third Place"
                    description="Your home away from home. Relax, study, meet friends, or just enjoy some quiet time.">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                </x-feature-card>

            </div>
        </div>
    </section>


    {{-- ══════════════════════════════════════
         MENU  (id="menu") — 3 scrollable columns
         Fix: correct Caramel Macchiato photo
         Fix: col 2 = green-mid, col 3 = espresso (darker headers)
    ══════════════════════════════════════ --}}
    <section id="menu" class="bg-cream-dark py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <!-- Section header -->
            <div class="flex flex-col items-start gap-4 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <span class="inline-block rounded-full bg-green/10 px-3 py-1 text-[10px] font-bold uppercase tracking-[0.25em] text-green">
                        Our Menu
                    </span>
                    <h2 class="mt-3 whitespace-nowrap font-serif text-[clamp(1rem,5vw,3rem)] font-bold text-green">
                        Crafted for Every Craving
                    </h2>
                </div>
                <p class="max-w-xs text-sm leading-7 text-text-muted lg:text-right">
                    Every drink is made to order — handcrafted by our baristas, your way.
                </p>
            </div>

            {{-- 3-COLUMN SCROLLABLE MENU --}}
            <div class="mt-12 grid gap-5 lg:grid-cols-3">

                {{-- ── COL 1: HOT DRINKS — dark green header ── --}}
                <div class="flex flex-col overflow-hidden rounded-3xl border border-parchment bg-white shadow-sm">
                    <div class="flex items-center gap-3 bg-green px-5 py-4">
                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-white/20 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 8h1a4 4 0 0 1 0 8h-1"/><path d="M3 8h14v9a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4Z"/>
                                <line x1="6" x2="6" y1="2" y2="4"/><line x1="10" x2="10" y1="2" y2="4"/><line x1="14" x2="14" y1="2" y2="4"/>
                            </svg>
                        </span>
                        <span class="font-display text-xs font-bold uppercase tracking-[0.25em] text-white">Hot Drinks</span>
                        <span class="ml-auto rounded-full bg-white/20 px-2 py-0.5 text-[10px] font-bold text-white">5 items</span>
                    </div>
                    <div class="overflow-y-auto" style="max-height:520px;scrollbar-width:thin;scrollbar-color:#1E3932 #D4E9E2;">
                        <div class="divide-y divide-parchment">

                            {{-- Caramel Macchiato — fixed photo: layered macchiato in clear glass --}}
                            <div class="group flex gap-4 p-4 transition hover:bg-green-mist/30">
                                <div class="relative h-20 w-20 shrink-0 overflow-hidden rounded-xl">
                                    <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=200&q=80"
                                         alt="Caramel Macchiato"
                                         class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
                                </div>
                                <div class="flex flex-1 flex-col justify-center">
                                    <div class="flex items-start justify-between gap-2">
                                        <h4 class="font-serif text-sm font-bold leading-tight text-green">Caramel Macchiato</h4>
                                        <span class="shrink-0 font-serif text-sm font-bold text-green">₱185</span>
                                    </div>
                                    <p class="mt-1 text-[11px] leading-4 text-text-muted">Vanilla syrup, steamed milk & caramel drizzle.</p>
                                    <a href="#contact" class="mt-2 inline-flex w-fit rounded-full bg-green px-3 py-1 text-[9px] font-bold uppercase tracking-wider text-white transition hover:bg-green-mid">Order</a>
                                </div>
                            </div>

                            {{-- Vanilla Latte --}}
                            <div class="group flex gap-4 p-4 transition hover:bg-green-mist/30">
                                <div class="relative h-20 w-20 shrink-0 overflow-hidden rounded-xl">
                                    <img src="https://images.unsplash.com/photo-1534687941688-651ccaafbff8?auto=format&fit=crop&w=200&q=80"
                                         alt="Vanilla Latte"
                                         class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
                                </div>
                                <div class="flex flex-1 flex-col justify-center">
                                    <div class="flex items-start justify-between gap-2">
                                        <h4 class="font-serif text-sm font-bold leading-tight text-green">Vanilla Latte</h4>
                                        <span class="shrink-0 font-serif text-sm font-bold text-green">₱175</span>
                                    </div>
                                    <p class="mt-1 text-[11px] leading-4 text-text-muted">Espresso, steamed milk & a touch of vanilla syrup.</p>
                                    <a href="#contact" class="mt-2 inline-flex w-fit rounded-full bg-green px-3 py-1 text-[9px] font-bold uppercase tracking-wider text-white transition hover:bg-green-mid">Order</a>
                                </div>
                            </div>

                            {{-- Matcha Latte --}}
                            <div class="group flex gap-4 p-4 transition hover:bg-green-mist/30">
                                <div class="relative h-20 w-20 shrink-0 overflow-hidden rounded-xl">
                                    <img src="https://images.unsplash.com/photo-1515823064-d6e0c04616a7?auto=format&fit=crop&w=200&q=80"
                                         alt="Matcha Latte"
                                         class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
                                </div>
                                <div class="flex flex-1 flex-col justify-center">
                                    <div class="flex items-start justify-between gap-2">
                                        <h4 class="font-serif text-sm font-bold leading-tight text-green">Matcha Latte</h4>
                                        <span class="shrink-0 font-serif text-sm font-bold text-green">₱195</span>
                                    </div>
                                    <p class="mt-1 text-[11px] leading-4 text-text-muted">Ceremonial-grade matcha whisked with steamed milk.</p>
                                    <a href="#contact" class="mt-2 inline-flex w-fit rounded-full bg-green px-3 py-1 text-[9px] font-bold uppercase tracking-wider text-white transition hover:bg-green-mid">Order</a>
                                </div>
                            </div>

                            {{-- Cappuccino --}}
                            <div class="group flex gap-4 p-4 transition hover:bg-green-mist/30">
                                <div class="relative h-20 w-20 shrink-0 overflow-hidden rounded-xl">
                                    <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=200&q=80"
                                         alt="Cappuccino"
                                         class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
                                </div>
                                <div class="flex flex-1 flex-col justify-center">
                                    <div class="flex items-start justify-between gap-2">
                                        <h4 class="font-serif text-sm font-bold leading-tight text-green">Cappuccino</h4>
                                        <span class="shrink-0 font-serif text-sm font-bold text-green">₱165</span>
                                    </div>
                                    <p class="mt-1 text-[11px] leading-4 text-text-muted">Equal parts espresso, steamed milk & velvety foam.</p>
                                    <a href="#contact" class="mt-2 inline-flex w-fit rounded-full bg-green px-3 py-1 text-[9px] font-bold uppercase tracking-wider text-white transition hover:bg-green-mid">Order</a>
                                </div>
                            </div>

                            {{-- Caffè Americano --}}
                            <div class="group flex gap-4 p-4 transition hover:bg-green-mist/30">
                                <div class="relative h-20 w-20 shrink-0 overflow-hidden rounded-xl">
                                    <img src="https://images.unsplash.com/photo-1510591509098-f4fdc6d0ff04?auto=format&fit=crop&w=200&q=80"
                                         alt="Caffè Americano"
                                         class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
                                </div>
                                <div class="flex flex-1 flex-col justify-center">
                                    <div class="flex items-start justify-between gap-2">
                                        <h4 class="font-serif text-sm font-bold leading-tight text-green">Caffè Americano</h4>
                                        <span class="shrink-0 font-serif text-sm font-bold text-green">₱155</span>
                                    </div>
                                    <p class="mt-1 text-[11px] leading-4 text-text-muted">Espresso shots topped with hot water — bold & clean.</p>
                                    <a href="#contact" class="mt-2 inline-flex w-fit rounded-full bg-green px-3 py-1 text-[9px] font-bold uppercase tracking-wider text-white transition hover:bg-green-mid">Order</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- ── COL 2: COLD DRINKS — green-mid header (darker than before) ── --}}
                <div class="flex flex-col overflow-hidden rounded-3xl border border-parchment bg-white shadow-sm">
                    <div class="flex items-center gap-3 bg-green-mid px-5 py-4">
                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-white/20 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M8 2h8l1 8H7L8 2z"/>
                                <path d="M7 10c0 5 2 8 5 10 3-2 5-5 5-10"/>
                                <line x1="12" x2="12" y1="10" y2="20"/>
                            </svg>
                        </span>
                        <span class="font-display text-xs font-bold uppercase tracking-[0.25em] text-white">Cold Drinks</span>
                        <span class="ml-auto rounded-full bg-white/20 px-2 py-0.5 text-[10px] font-bold text-white">5 items</span>
                    </div>
                    <div class="overflow-y-auto" style="max-height:520px;scrollbar-width:thin;scrollbar-color:#2D6A4F #D4E9E2;">
                        <div class="divide-y divide-parchment">

                            {{-- Iced Shaken Espresso --}}
                            <div class="group flex gap-4 p-4 transition hover:bg-green-mist/30">
                                <div class="relative h-20 w-20 shrink-0 overflow-hidden rounded-xl">
                                    <img src="{{ asset('images/iced-shaken-espresso.avif') }}"
                                         alt="Iced Shaken Espresso"
                                         class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
                                    <span class="absolute right-1 top-1 rounded-full bg-green-mid px-1.5 py-0.5 text-[8px] font-bold text-white">★</span>
                                </div>
                                <div class="flex flex-1 flex-col justify-center">
                                    <div class="flex items-start justify-between gap-2">
                                        <h4 class="font-serif text-sm font-bold leading-tight text-green">Iced Shaken Espresso</h4>
                                        <span class="shrink-0 font-serif text-sm font-bold text-green">₱215</span>
                                    </div>
                                    <p class="mt-1 text-[11px] leading-4 text-text-muted">Espresso shaken with brown sugar & oat milk over ice.</p>
                                    <a href="#contact" class="mt-2 inline-flex w-fit rounded-full bg-green-mid px-3 py-1 text-[9px] font-bold uppercase tracking-wider text-white transition hover:bg-green">Order</a>
                                </div>
                            </div>

                            {{-- Cold Brew --}}
                            <div class="group flex gap-4 p-4 transition hover:bg-green-mist/30">
                                <div class="relative h-20 w-20 shrink-0 overflow-hidden rounded-xl">
                                    <img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735?auto=format&fit=crop&w=200&q=80"
                                         alt="Cold Brew"
                                         class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
                                </div>
                                <div class="flex flex-1 flex-col justify-center">
                                    <div class="flex items-start justify-between gap-2">
                                        <h4 class="font-serif text-sm font-bold leading-tight text-green">Cold Brew Coffee</h4>
                                        <span class="shrink-0 font-serif text-sm font-bold text-green">₱195</span>
                                    </div>
                                    <p class="mt-1 text-[11px] leading-4 text-text-muted">Slow-steeped 20 hrs — smooth, bold & low-acidity.</p>
                                    <a href="#contact" class="mt-2 inline-flex w-fit rounded-full bg-green-mid px-3 py-1 text-[9px] font-bold uppercase tracking-wider text-white transition hover:bg-green">Order</a>
                                </div>
                            </div>

                            {{-- Java Chip Frappuccino --}}
                            <div class="group flex gap-4 p-4 transition hover:bg-green-mist/30">
                                <div class="relative h-20 w-20 shrink-0 overflow-hidden rounded-xl">
                                    <img src="https://images.unsplash.com/photo-1572490122747-3968b75cc699?auto=format&fit=crop&w=200&q=80"
                                         alt="Java Chip Frappuccino"
                                         class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
                                </div>
                                <div class="flex flex-1 flex-col justify-center">
                                    <div class="flex items-start justify-between gap-2">
                                        <h4 class="font-serif text-sm font-bold leading-tight text-green">Java Chip Frappuccino</h4>
                                        <span class="shrink-0 font-serif text-sm font-bold text-green">₱225</span>
                                    </div>
                                    <p class="mt-1 text-[11px] leading-4 text-text-muted">Blended coffee, mocha chips & whipped cream.</p>
                                    <a href="#contact" class="mt-2 inline-flex w-fit rounded-full bg-green-mid px-3 py-1 text-[9px] font-bold uppercase tracking-wider text-white transition hover:bg-green">Order</a>
                                </div>
                            </div>

                            {{-- Peach Green Tea Lemonade --}}
                            <div class="group flex gap-4 p-4 transition hover:bg-green-mist/30">
                                <div class="relative h-20 w-20 shrink-0 overflow-hidden rounded-xl">
                                    <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?auto=format&fit=crop&w=200&q=80"
                                         alt="Peach Green Tea Lemonade"
                                         class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
                                </div>
                                <div class="flex flex-1 flex-col justify-center">
                                    <div class="flex items-start justify-between gap-2">
                                        <h4 class="font-serif text-sm font-bold leading-tight text-green">Peach Green Tea Lemonade</h4>
                                        <span class="shrink-0 font-serif text-sm font-bold text-green">₱185</span>
                                    </div>
                                    <p class="mt-1 text-[11px] leading-4 text-text-muted">Shaken green tea, peach syrup & tangy lemonade.</p>
                                    <a href="#contact" class="mt-2 inline-flex w-fit rounded-full bg-green-mid px-3 py-1 text-[9px] font-bold uppercase tracking-wider text-white transition hover:bg-green">Order</a>
                                </div>
                            </div>

                            {{-- Iced Caramel Macchiato --}}
                            <div class="group flex gap-4 p-4 transition hover:bg-green-mist/30">
                                <div class="relative h-20 w-20 shrink-0 overflow-hidden rounded-xl">
                                    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=200&q=80"
                                         alt="Iced Caramel Macchiato"
                                         class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
                                </div>
                                <div class="flex flex-1 flex-col justify-center">
                                    <div class="flex items-start justify-between gap-2">
                                        <h4 class="font-serif text-sm font-bold leading-tight text-green">Iced Caramel Macchiato</h4>
                                        <span class="shrink-0 font-serif text-sm font-bold text-green">₱195</span>
                                    </div>
                                    <p class="mt-1 text-[11px] leading-4 text-text-muted">Vanilla milk, ice, espresso & caramel drizzle.</p>
                                    <a href="#contact" class="mt-2 inline-flex w-fit rounded-full bg-green-mid px-3 py-1 text-[9px] font-bold uppercase tracking-wider text-white transition hover:bg-green">Order</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- ── COL 3: FOOD PAIRINGS — espresso/charcoal header (much darker) ── --}}
                <div class="flex flex-col overflow-hidden rounded-3xl border border-parchment bg-white shadow-sm">
                    <div class="flex items-center gap-3 bg-charcoal px-5 py-4">
                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-white/15 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 11l19-9-9 19-2-8-8-2z"/>
                            </svg>
                        </span>
                        <span class="font-display text-xs font-bold uppercase tracking-[0.25em] text-white">Food Pairings</span>
                        <span class="ml-auto rounded-full bg-white/15 px-2 py-0.5 text-[10px] font-bold text-white">4 items</span>
                    </div>
                    <div class="overflow-y-auto" style="max-height:520px;scrollbar-width:thin;scrollbar-color:#2C2C2C #D4E9E2;">
                        <div class="divide-y divide-parchment">

                            {{-- Butter Croissant --}}
                            <div class="group flex gap-4 p-4 transition hover:bg-green-mist/30">
                                <div class="relative h-20 w-20 shrink-0 overflow-hidden rounded-xl">
                                    <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=200&q=80"
                                         alt="Butter Croissant"
                                         class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
                                </div>
                                <div class="flex flex-1 flex-col justify-center">
                                    <div class="flex items-start justify-between gap-2">
                                        <h4 class="font-serif text-sm font-bold leading-tight text-green">Butter Croissant</h4>
                                        <span class="shrink-0 font-serif text-sm font-bold text-green">₱115</span>
                                    </div>
                                    <p class="mt-1 text-[11px] leading-4 text-text-muted">Flaky, golden & buttery — the perfect morning companion.</p>
                                    <a href="#contact" class="mt-2 inline-flex w-fit rounded-full bg-charcoal px-3 py-1 text-[9px] font-bold uppercase tracking-wider text-white transition hover:bg-espresso">Order</a>
                                </div>
                            </div>

                            {{-- Chocolate Chip Cookie --}}
                            <div class="group flex gap-4 p-4 transition hover:bg-green-mist/30">
                                <div class="relative h-20 w-20 shrink-0 overflow-hidden rounded-xl">
                                    <img src="https://images.unsplash.com/photo-1499636136210-6f4ee915583e?auto=format&fit=crop&w=200&q=80"
                                         alt="Chocolate Chip Cookie"
                                         class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
                                </div>
                                <div class="flex flex-1 flex-col justify-center">
                                    <div class="flex items-start justify-between gap-2">
                                        <h4 class="font-serif text-sm font-bold leading-tight text-green">Chocolate Chip Cookie</h4>
                                        <span class="shrink-0 font-serif text-sm font-bold text-green">₱95</span>
                                    </div>
                                    <p class="mt-1 text-[11px] leading-4 text-text-muted">Soft, chewy & loaded with chocolate chips.</p>
                                    <a href="#contact" class="mt-2 inline-flex w-fit rounded-full bg-charcoal px-3 py-1 text-[9px] font-bold uppercase tracking-wider text-white transition hover:bg-espresso">Order</a>
                                </div>
                            </div>

                            {{-- Blueberry Muffin --}}
                            <div class="group flex gap-4 p-4 transition hover:bg-green-mist/30">
                                <div class="relative h-20 w-20 shrink-0 overflow-hidden rounded-xl">
                                    <img src="https://images.unsplash.com/photo-1607958996333-41aef7caefaa?auto=format&fit=crop&w=200&q=80"
                                         alt="Blueberry Muffin"
                                         class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
                                </div>
                                <div class="flex flex-1 flex-col justify-center">
                                    <div class="flex items-start justify-between gap-2">
                                        <h4 class="font-serif text-sm font-bold leading-tight text-green">Blueberry Muffin</h4>
                                        <span class="shrink-0 font-serif text-sm font-bold text-green">₱105</span>
                                    </div>
                                    <p class="mt-1 text-[11px] leading-4 text-text-muted">Moist, fluffy muffin bursting with fresh blueberries.</p>
                                    <a href="#contact" class="mt-2 inline-flex w-fit rounded-full bg-charcoal px-3 py-1 text-[9px] font-bold uppercase tracking-wider text-white transition hover:bg-espresso">Order</a>
                                </div>
                            </div>

                            {{-- Egg & Cheese Sandwich --}}
                            <div class="group flex gap-4 p-4 transition hover:bg-green-mist/30">
                                <div class="relative h-20 w-20 shrink-0 overflow-hidden rounded-xl">
                                    <img src="https://images.unsplash.com/photo-1484723091739-30a097e8f929?auto=format&fit=crop&w=200&q=80"
                                         alt="Egg and Cheese Sandwich"
                                         class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
                                </div>
                                <div class="flex flex-1 flex-col justify-center">
                                    <div class="flex items-start justify-between gap-2">
                                        <h4 class="font-serif text-sm font-bold leading-tight text-green">Egg &amp; Cheese Sandwich</h4>
                                        <span class="shrink-0 font-serif text-sm font-bold text-green">₱145</span>
                                    </div>
                                    <p class="mt-1 text-[11px] leading-4 text-text-muted">Fluffy egg & melted cheese on a toasted artisan roll.</p>
                                    <a href="#contact" class="mt-2 inline-flex w-fit rounded-full bg-charcoal px-3 py-1 text-[9px] font-bold uppercase tracking-wider text-white transition hover:bg-espresso">Order</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            {{-- END 3-COLUMN SCROLLABLE MENU --}}

            <!-- View full menu CTA -->
            <div class="mt-10 flex items-center justify-center gap-4">
                <div class="flex-1 border-t border-parchment"></div>
                <a href="#contact"
                   class="inline-flex items-center gap-2 rounded-full border border-green px-8 py-3 text-xs font-bold uppercase tracking-widest text-green transition hover:bg-green hover:text-white">
                    View Full Menu
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>
                    </svg>
                </a>
                <div class="flex-1 border-t border-parchment"></div>
            </div>

        </div>
    </section>


    {{-- ══════════════════════════════════════
         PRICING  (id="pricing")
    ══════════════════════════════════════ --}}
    <section id="pricing" class="bg-cream py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="mx-auto max-w-2xl text-center">
                <span class="inline-block rounded-full bg-green/10 px-3 py-1 text-[10px] font-bold uppercase tracking-[0.25em] text-green">
                    Starbucks Rewards
                </span>
                <h2 class="mt-3 font-serif text-4xl font-bold text-green lg:text-5xl">Choose Your Plan</h2>
                <div class="mx-auto mt-4 h-1 w-12 rounded-full bg-green-bright"></div>
                <p class="mt-4 text-sm leading-7 text-text-muted">
                    Join millions of members earning Stars and unlocking exclusive perks with every visit.
                </p>
            </div>

            <div class="mt-14 grid gap-6 lg:grid-cols-3">

                <x-pricing-card
                    name="Green Level"
                    price="0"
                    period="free"
                    description="Start earning Stars from your very first drink."
                    :features="[
                        'Earn 1 Star per ₱25 spent',
                        'Free birthday reward',
                        'Mobile order & pay',
                        'Member exclusive offers',
                    ]"
                />

                <x-pricing-card
                    name="Gold Level"
                    price="499"
                    period="month"
                    description="For the dedicated Starbucks regular."
                    :features="[
                        'Earn 2 Stars per ₱25 spent',
                        'Monthly Double Star Days',
                        'Free drink every 150 Stars',
                        'Complimentary size upgrades',
                        'Priority customer support',
                    ]"
                    :featured="true"
                />

                <x-pricing-card
                    name="Reserve Access"
                    price="999"
                    period="month"
                    description="Exclusive access to Starbucks Reserve experiences."
                    :features="[
                        'All Gold Level benefits',
                        'Reserve Roastery access',
                        'Rare & limited-edition beans',
                        'Private tasting events',
                        'Personalised drink profile',
                        'Dedicated barista concierge',
                    ]"
                    :reserve="true"
                />

            </div>

        </div>
    </section>


    {{-- ══════════════════════════════════════
         TESTIMONIALS  (id="testimonials")
    ══════════════════════════════════════ --}}
    <section id="testimonials" class="bg-green-mist py-24">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="mx-auto max-w-2xl text-center">
                <span class="inline-block rounded-full bg-green/10 px-3 py-1 text-[10px] font-bold uppercase tracking-[0.25em] text-green">
                    Customer Reviews
                </span>
                <h2 class="mt-3 font-serif text-4xl font-bold text-green lg:text-5xl">What Our Regulars Say</h2>
                <div class="mx-auto mt-4 h-1 w-12 rounded-full bg-green-bright"></div>
            </div>

            <div class="mt-14 grid gap-5 md:grid-cols-3">

                <x-testimonial-card
                    image="https://i.pravatar.cc/150?img=47"
                    name="Maria Santos"
                    position="Gold Level Member"
                    review="Starbucks is my daily ritual. The app makes ordering so easy, and the baristas always remember my usual — a grande oat milk latte with an extra shot."
                />

                <x-testimonial-card
                    image="https://i.pravatar.cc/150?img=12"
                    name="Juan Dela Cruz"
                    position="Reserve Member · Freelance Designer"
                    review="The Reserve experience is unmatched. Rare single-origin coffees, tasting events, and a vibe that makes you feel like a true coffee connoisseur."
                />

                <x-testimonial-card
                    image="https://i.pravatar.cc/150?img=32"
                    name="Angela Reyes"
                    position="Green Level Member · Student"
                    review="Even as a student, I can afford my Starbucks fix and still earn rewards. The birthday drink alone makes it worth signing up. Love the seasonal specials too!"
                />

            </div>

        </div>
    </section>


    {{-- ══════════════════════════════════════
         CALL-TO-ACTION
         Register + Start Free Trial + Contact Sales
    ══════════════════════════════════════ --}}
    <section class="relative overflow-hidden bg-green py-24 text-white">
        <div class="pointer-events-none absolute inset-0"
             style="background: radial-gradient(ellipse at 25% 60%, #2D6A4F 0%, transparent 50%), radial-gradient(ellipse at 75% 20%, #163020 0%, transparent 50%);">
        </div>

        <div class="relative mx-auto max-w-4xl px-6 pt-6 text-center lg:px-8">

            <x-logo class="mx-auto mb-6 h-16 w-16" />

            <span class="inline-block rounded-full border border-white/20 px-3 py-1 text-[10px] font-bold uppercase tracking-[0.25em] text-green-light">
                Your Next Cup Awaits
            </span>

            <h2 class="mt-4 font-serif text-4xl font-bold leading-tight text-white md:text-5xl">
                Start Your Starbucks<br>
                <em class="font-normal italic text-green-light">Journey Today</em>
            </h2>

            <p class="mx-auto mt-5 max-w-lg text-sm leading-7 text-green-mist/60">
                Join millions of coffee lovers enjoying exclusive rewards, seasonal beverages,
                and a warm welcome at every Starbucks around the world.
            </p>

            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">

                <a href="#"
                   class="inline-flex items-center gap-2 rounded-full bg-white px-7 py-3.5 text-xs font-bold uppercase tracking-[0.18em] text-green shadow transition duration-300 hover:-translate-y-0.5 hover:bg-green-mist hover:shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/>
                        <line x1="19" x2="19" y1="8" y2="14"/><line x1="22" x2="16" y1="11" y2="11"/>
                    </svg>
                    Register Now
                </a>

                <a href="#pricing"
                   class="inline-flex items-center gap-2 rounded-full bg-green-bright px-7 py-3.5 text-xs font-bold uppercase tracking-[0.18em] text-white shadow transition duration-300 hover:-translate-y-0.5 hover:bg-green-mid hover:shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="5 3 19 12 5 21 5 3"/>
                    </svg>
                    Start Free Trial
                </a>

                <a href="#contact"
                   class="inline-flex items-center gap-2 rounded-full border border-white/25 px-7 py-3.5 text-xs font-bold uppercase tracking-[0.18em] text-white/75 transition duration-300 hover:-translate-y-0.5 hover:border-white/60 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.91a16 16 0 0 0 6.29 6.29l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    Contact Sales
                </a>

            </div>

            <p class="mt-8 text-xs text-green-light/40">
                No credit card required for Green Level · Cancel anytime · Trusted by 32M+ members
            </p>

        </div>
    </section>


    {{-- FOOTER / CONTACT --}}
    <x-footer />

@endsection
