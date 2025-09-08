<nav id="site-nav" class="sticky top-0 z-50 bg-white shadow-sm">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between py-3">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <img src="https://i.ibb.co/gbnMv56S/1.png" alt="Tenglee Logo" class="h-10 sm:h-12">
                <span class="sr-only">Tenglee Marine & Engineering</span>
            </a>

            <!-- Desktop menu -->
            <div class="hidden md:flex items-center gap-8 lg:gap-10 font-medium">
                <a href="{{ route('home') }}"
                    class="{{ request()->routeIs('home') ? 'text-[#0C47A6] underline underline-offset-8' : 'text-gray-700 hover:text-[#0C47A6] hover:underline underline-offset-8' }}">
                    Home
                </a>

                <a href="{{ route('about') }}"
                    class="{{ request()->routeIs('about') ? 'text-[#0C47A6] underline underline-offset-8' : 'text-gray-700 hover:text-[#0C47A6] hover:underline underline-offset-8' }}">
                    About Us
                </a>

                <a href="{{ route('services') }}"
                    class="{{ request()->routeIs('services') ? 'text-[#0C47A6] underline underline-offset-8' : 'text-gray-700 hover:text-[#0C47A6] hover:underline underline-offset-8' }}">
                    Services
                </a>

                <a href="{{ route('project') }}"
                    class="{{ request()->routeIs('project') ? 'text-[#0C47A6] underline underline-offset-8' : 'text-gray-700 hover:text-[#0C47A6] hover:underline underline-offset-8' }}">
                    Projects
                </a>

                <a href="{{ route('contact') }}"
                    class="{{ request()->routeIs('contact') ? 'text-[#0C47A6] underline underline-offset-8' : 'text-gray-700 hover:text-[#0C47A6] hover:underline underline-offset-8' }}">
                    Contact
                </a>
            </div>


            <!-- Mobile toggle -->
            <button id="drawer-toggle"
                class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-gray-700 hover:text-[#0C47A6]"
                aria-controls="mobile-drawer" aria-expanded="false" aria-label="Open menu">
                <!-- hamburger -->
                <svg id="icon-bars" class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M8 18h12" />
                </svg>
                <!-- x -->
                <svg id="icon-x" class="h-7 w-7 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Overlay -->
    <div id="drawer-overlay" class="fixed inset-0 z-40 hidden bg-black/40"></div>

    <!-- Mobile off-canvas (white) -->
    <aside id="mobile-drawer"
        class="fixed left-0 top-0 z-50 h-screen w-72 max-w-[80%] bg-white border-r border-gray-100
                -translate-x-full transition-transform duration-300 ease-out">
        <div class="flex items-center justify-between px-5 py-4 border-b border-gray-100">
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <img src="https://i.ibb.co/gbnMv56S/1.png" class="h-9" alt="">
            </a>
            <button id="drawer-close" class="p-2 text-gray-700 hover:text-[#0C47A6]" aria-label="Close menu">
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <nav class="px-4 py-3">
            <ul class="space-y-1">
                <li>
                    <a href="{{ route('home') }}"
                        class="block rounded-md px-3 py-2 {{ request()->routeIs('home') ? 'bg-gray-100 text-[#0C47A6] font-semibold' : 'text-gray-700 hover:bg-gray-50 hover:text-[#0C47A6]' }}">
                        Home
                    </a>
                </li>

                <li>
                    <a href="{{ route('about') }}"
                        class="block rounded-md px-3 py-2 {{ request()->routeIs('about') ? 'bg-gray-100 text-[#0C47A6] font-semibold' : 'text-gray-700 hover:bg-gray-50 hover:text-[#0C47A6]' }}">
                        About Us
                    </a>
                </li>

                <li>
                    <a href="{{ route('services') }}"
                        class="block rounded-md px-3 py-2 {{ request()->routeIs('services') ? 'bg-gray-100 text-[#0C47A6] font-semibold' : 'text-gray-700 hover:bg-gray-50 hover:text-[#0C47A6]' }}">
                        Services
                    </a>
                </li>

                <li>
                    <a href="{{ route('project') }}"
                        class="block rounded-md px-3 py-2 {{ request()->routeIs('project') ? 'bg-gray-100 text-[#0C47A6] font-semibold' : 'text-gray-700 hover:bg-gray-50 hover:text-[#0C47A6]' }}">
                        Projects
                    </a>
                </li>

                <li>
                    <a href="{{ route('contact') }}"
                        class="block rounded-md px-3 py-2 {{ request()->routeIs('contact') ? 'bg-gray-100 text-[#0C47A6] font-semibold' : 'text-gray-700 hover:bg-gray-50 hover:text-[#0C47A6]' }}">
                        Contact
                    </a>
                </li>
            </ul>



        </nav>
    </aside>
</nav>
