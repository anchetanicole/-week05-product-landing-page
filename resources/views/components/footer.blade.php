<footer id="contact" class="bg-green text-green-mist/70">

    <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">

        <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-4">

            <!-- ① Company Information -->
            <div class="lg:col-span-1">
                <a href="#home" class="group inline-flex items-center gap-3">
                    <x-logo class="h-12 w-12 transition duration-300 group-hover:opacity-80" />
                    <div>
                        <h2 class="font-serif text-sm font-bold leading-tight text-white">Starbucks Coffee</h2>
                        <p class="text-[10px] uppercase tracking-[0.18em] text-green-light">Laguna, Philippines</p>
                    </div>
                </a>
                <p class="mt-5 max-w-xs text-sm leading-6">
                    Inspiring and nurturing the human spirit — one person, one cup,
                    and one neighbourhood at a time.
                </p>
                <!-- App store badges -->
                <div class="mt-5 flex gap-2">
                    <span class="rounded-lg border border-green-mid bg-green-mid/40 px-3 py-1.5 text-[10px] font-semibold uppercase tracking-wider text-green-light">
                        App Store
                    </span>
                    <span class="rounded-lg border border-green-mid bg-green-mid/40 px-3 py-1.5 text-[10px] font-semibold uppercase tracking-wider text-green-light">
                        Google Play
                    </span>
                </div>
            </div>

            <!-- ② Quick Links -->
            <div>
                <h3 class="text-xs font-bold uppercase tracking-[0.2em] text-white">Quick Links</h3>
                <ul class="mt-5 space-y-3 text-sm">
                    <li><a href="#home"         class="transition hover:text-white">Home</a></li>
                    <li><a href="#features"     class="transition hover:text-white">Features</a></li>
                    <li><a href="#pricing"      class="transition hover:text-white">Pricing & Rewards</a></li>
                    <li><a href="#testimonials" class="transition hover:text-white">Testimonials</a></li>
                    <li><a href="#contact"      class="transition hover:text-white">Contact</a></li>
                    <li><a href="#"             class="transition hover:text-white">Starbucks App</a></li>
                </ul>
            </div>

            <!-- ③ Contact Information -->
            <div>
                <h3 class="text-xs font-bold uppercase tracking-[0.2em] text-white">Contact Us</h3>
                <ul class="mt-5 space-y-4 text-sm">

                    <li class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-4 w-4 shrink-0 text-green-light" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        <span>2401 Utah Ave S, Seattle, WA 98134</span>
                    </li>

                    <li class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-4 w-4 shrink-0 text-green-light" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.91a16 16 0 0 0 6.29 6.29l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <span>1-800-782-7282</span>
                    </li>

                    <li class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-4 w-4 shrink-0 text-green-light" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="16" x="2" y="4" rx="2"/>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                        </svg>
                        <span class="min-w-0 break-words">customerservice@starbucks.com</span>
                    </li>

                    <li class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-4 w-4 shrink-0 text-green-light" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 8v4l3 3"/>
                        </svg>
                        <span>Mon–Fri: 5:00 AM – 10:00 PM</span>
                    </li>

                </ul>
                <x-branch-selector />
            </div>

            <!-- ④ Social Media Icons -->
            <div>
                <h3 class="text-xs font-bold uppercase tracking-[0.2em] text-white">Follow Us</h3>
                <div class="mt-5 flex gap-3">

                    <!-- Facebook -->
                    <a href="#" aria-label="Facebook"
                       class="flex h-10 w-10 items-center justify-center rounded-full border border-green-mid bg-green-mid/40 text-green-light transition hover:border-green-light hover:bg-green-mid/70">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a href="#" aria-label="Instagram"
                       class="flex h-10 w-10 items-center justify-center rounded-full border border-green-mid bg-green-mid/40 text-green-light transition hover:border-green-light hover:bg-green-mid/70">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                        </svg>
                    </a>

                    <!-- Twitter / X -->
                    <a href="#" aria-label="Twitter"
                       class="flex h-10 w-10 items-center justify-center rounded-full border border-green-mid bg-green-mid/40 text-green-light transition hover:border-green-light hover:bg-green-mid/70">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>

                    <!-- YouTube -->
                    <a href="#" aria-label="YouTube"
                       class="flex h-10 w-10 items-center justify-center rounded-full border border-green-mid bg-green-mid/40 text-green-light transition hover:border-green-light hover:bg-green-mid/70">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23 7s-.3-1.9-1.2-2.7c-1.1-1.2-2.4-1.2-3-1.3C16.6 3 12 3 12 3s-4.6 0-6.8.1c-.6.1-1.9.1-3 1.3C1.3 5.2 1 7 1 7S.7 9.1.7 11.3v2c0 2.1.3 4.3.3 4.3s.3 1.9 1.2 2.7c1.1 1.2 2.6 1.1 3.3 1.2C7.4 21.6 12 21.7 12 21.7s4.6 0 6.8-.2c.6-.1 1.9-.1 3-1.3.9-.8 1.2-2.7 1.2-2.7s.3-2.1.3-4.3v-2C23.3 9.1 23 7 23 7zM9.7 15.5V8.4l8.1 3.6-8.1 3.5z"/>
                        </svg>
                    </a>

                </div>

                <!-- Newsletter signup -->
                <div class="mt-7">
                    <h3 class="text-xs font-bold uppercase tracking-[0.2em] text-white">Stay in the Loop</h3>
                    <p class="mt-2 text-xs leading-5">Get exclusive offers and new menu announcements.</p>
                    <div class="mt-3 flex gap-2">
                        <input type="email" placeholder="your@email.com"
                               class="flex-1 rounded-full border border-green-mid bg-green-mid/30 px-4 py-2 text-xs text-white placeholder-green-light/50 outline-none focus:border-green-light focus:ring-0">
                        <button class="rounded-full bg-green-bright px-4 py-2 text-xs font-bold uppercase tracking-wider text-white transition hover:bg-green-mid">
                            Join
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <!-- ⑤ Copyright -->
        <div class="mt-14 flex flex-col items-center justify-between gap-4 border-t border-green-mid/60 pt-8 text-xs text-green-mist/40 sm:flex-row">
            <p>© 2026 Starbucks Coffee Company. All rights reserved.</p>
            <div class="flex gap-5">
                <a href="#" class="hover:text-green-light transition">Privacy Policy</a>
                <a href="#" class="hover:text-green-light transition">Terms of Use</a>
                <a href="#" class="hover:text-green-light transition">Cookie Policy</a>
            </div>
        </div>

    </div>

</footer>
