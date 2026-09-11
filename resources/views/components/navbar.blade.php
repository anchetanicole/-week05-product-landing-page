<nav id="home" class="sticky top-0 z-50 border-b border-parchment bg-white/95 backdrop-blur-sm">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-3 lg:px-8">

        <!-- Logo -->
        <a href="#home" class="group flex items-center gap-2">
            <x-logo class="h-11 w-11 transition duration-300 group-hover:opacity-80" />
            <div>
                <h1 class="font-serif text-base font-bold leading-tight tracking-tight text-green">
                    Starbucks Coffee
                </h1>
                <p class="hidden text-[10px] uppercase tracking-[0.18em] text-text-muted sm:block">
                    Laguna, Philippines
                </p>
            </div>
        </a>

        <!-- Desktop Navigation -->
        <div class="hidden items-center gap-7 md:flex">
            <a href="#home"         class="text-xs font-medium uppercase tracking-widest text-text-muted transition hover:text-green">Home</a>
            <a href="#features"     class="text-xs font-medium uppercase tracking-widest text-text-muted transition hover:text-green">Features</a>
            <a href="#pricing"      class="text-xs font-medium uppercase tracking-widest text-text-muted transition hover:text-green">Pricing</a>
            <a href="#testimonials" class="text-xs font-medium uppercase tracking-widest text-text-muted transition hover:text-green">Testimonials</a>
            <a href="#contact"      class="text-xs font-medium uppercase tracking-widest text-text-muted transition hover:text-green">Contact</a>
        </div>

        <!-- Sign In + Get Started -->
        <div class="hidden items-center gap-4 md:flex">
            <a href="#"
               class="text-xs font-semibold uppercase tracking-widest text-green transition hover:text-green-mid">
                Sign In
            </a>
            <a href="#pricing"
               class="rounded-full bg-green px-5 py-2.5 text-xs font-semibold uppercase tracking-widest text-white shadow-sm transition duration-300 hover:-translate-y-0.5 hover:bg-green-mid hover:shadow-md">
                Get Started
            </a>
        </div>

        <!-- Mobile hamburger -->
        <button
            type="button"
            id="mobile-menu-btn"
            aria-label="Open menu"
            class="flex h-9 w-9 items-center justify-center rounded-full border border-parchment text-green transition hover:bg-green-mist md:hidden"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="4" x2="20" y1="6"  y2="6"/>
                <line x1="4" x2="20" y1="12" y2="12"/>
                <line x1="4" x2="20" y1="18" y2="18"/>
            </svg>
        </button>

    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden border-t border-parchment bg-white md:hidden">
        <div class="mx-auto max-w-7xl space-y-1 px-6 py-4">
            <a href="#home"         class="block py-2 text-xs font-medium uppercase tracking-widest text-text-muted hover:text-green">Home</a>
            <a href="#features"     class="block py-2 text-xs font-medium uppercase tracking-widest text-text-muted hover:text-green">Features</a>
            <a href="#pricing"      class="block py-2 text-xs font-medium uppercase tracking-widest text-text-muted hover:text-green">Pricing</a>
            <a href="#testimonials" class="block py-2 text-xs font-medium uppercase tracking-widest text-text-muted hover:text-green">Testimonials</a>
            <a href="#contact"      class="block py-2 text-xs font-medium uppercase tracking-widest text-text-muted hover:text-green">Contact</a>
            <div class="flex items-center gap-4 pt-3">
                <a href="#" class="text-xs font-semibold uppercase tracking-widest text-green">Sign In</a>
                <a href="#pricing" class="rounded-full bg-green px-5 py-2.5 text-xs font-semibold uppercase tracking-widest text-white">
                    Get Started
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    const btn  = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    btn.addEventListener('click', () => menu.classList.toggle('hidden'));
</script>
