<nav x-data="{ mobileMenuOpen: false, scrolled: false }" 
     @scroll.window="scrolled = (window.pageYOffset > 20)"
     class="fixed top-0 z-[100] w-full transition-all duration-300"
     :class="{ 'bg-[#0a0a0a]/95 backdrop-blur-2xl shadow-2xl': scrolled, 'bg-transparent py-4': !scrolled }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center transition-all duration-300" :class="{ 'h-20': scrolled, 'h-24': !scrolled }">
            
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="flex items-center gap-3 group relative" wire:navigate>
                    <div class="absolute -inset-4 bg-qavixx-copper/20 blur-xl rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <!-- Increased logo size -->
                    <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }} Logo" class="h-14 md:h-16 w-auto group-hover:scale-105 transition-transform duration-500 relative z-10">
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-8">
                
                <a href="{{ route('about') }}" class="text-gray-400 hover:text-white font-medium transition-colors py-4 tracking-wide text-sm uppercase" wire:navigate>About</a>
                
                <!-- Services Dropdown -->
                <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="{{ route('services') }}" class="text-gray-400 hover:text-white font-medium flex items-center gap-1.5 transition-colors py-4 tracking-wide text-sm uppercase" wire:navigate>
                        Services
                        <svg class="w-4 h-4 transition-transform duration-300" :class="{ 'rotate-180 text-qavixx-copper': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    
                    <!-- Dropdown with hover bridge -->
                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 translate-y-4"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-200"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-2"
                         class="absolute top-full left-0 pt-2 w-72" 
                         style="display: none; z-index: 100;">
                        <div class="rounded-2xl shadow-[0_20px_40px_rgb(0,0,0,0.8)] bg-[#0a0a0a]/95 backdrop-blur-3xl overflow-hidden border border-white/[0.05]">
                            <div class="p-3">
                                <a href="{{ route('services.identify') }}" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-white/[0.04] hover:text-white rounded-lg transition-all" wire:navigate>Identify Anonymous Users</a>
                                <a href="{{ route('services.scams') }}" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-white/[0.04] hover:text-white rounded-lg transition-all" wire:navigate>Scam Investigations</a>
                                <a href="{{ route('services.romance') }}" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-white/[0.04] hover:text-white rounded-lg transition-all" wire:navigate>Romance Scams</a>
                                <a href="{{ route('services.crypto') }}" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-white/[0.04] hover:text-white rounded-lg transition-all" wire:navigate>Crypto & Divorce</a>
                                <a href="{{ route('services.corporate') }}" class="block px-4 py-2.5 text-sm text-gray-300 hover:bg-white/[0.04] hover:text-white rounded-lg transition-all" wire:navigate>Corporate Intelligence</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('services.bec') }}" class="text-gray-400 hover:text-white font-medium transition-colors py-4 tracking-wide text-sm uppercase" wire:navigate>BEC Attacks</a>
                
                <a href="{{ route('case-studies') }}" class="text-gray-400 hover:text-white font-medium transition-colors py-4 tracking-wide text-sm uppercase" wire:navigate>Case Studies</a>

                <!-- Resources Dropdown -->
                <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button type="button" class="text-gray-400 hover:text-white font-medium flex items-center gap-1.5 transition-colors py-4 tracking-wide text-sm uppercase">
                        Resources
                        <svg class="w-4 h-4 transition-transform duration-300" :class="{ 'rotate-180 text-qavixx-copper': open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    
                    <!-- Dropdown with hover bridge -->
                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 translate-y-4"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-200"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-2"
                         class="absolute top-full right-0 pt-2 w-64" 
                         style="display: none; z-index: 100;">
                        <div class="rounded-2xl shadow-[0_20px_40px_rgb(0,0,0,0.8)] bg-[#0a0a0a]/95 backdrop-blur-3xl overflow-hidden border border-white/[0.05]">
                            <div class="p-3">
                                <a href="{{ route('about') }}#fees" class="block px-4 py-3 text-sm text-gray-300 hover:bg-white/[0.04] hover:text-white rounded-lg transition-all">Investigation Fees</a>
                                <a href="{{ route('about') }}#partners" class="block px-4 py-3 text-sm text-gray-300 hover:bg-white/[0.04] hover:text-white rounded-lg transition-all">Strategic Partners</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="hidden lg:flex items-center">
                <a href="{{ route('contact') }}" class="relative group" wire:navigate>
                    <!-- Ripple/Glow Animation -->
                    <div class="absolute -inset-0.5 bg-gradient-brand rounded-full blur opacity-60 group-hover:opacity-100 animate-pulse transition duration-500"></div>
                    <span class="relative bg-qavixx-base flex items-center justify-center px-7 py-3 rounded-full border border-white/10 text-white font-medium text-sm tracking-wide transition-all group-hover:bg-transparent">
                        Consult an Investigator
                    </span>
                </a>
            </div>

            <!-- Mobile menu button (Increased Size) -->
            <div class="lg:hidden flex items-center">
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="text-gray-400 hover:text-white p-3 focus:outline-none transition-colors border border-white/5 rounded-xl hover:bg-white/[0.02]">
                    <svg x-show="!mobileMenuOpen" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="lg:hidden absolute top-full inset-x-0 glass-panel border-b border-white/[0.05] shadow-2xl" 
         style="display: none;">
        <div class="px-4 pt-4 pb-8 space-y-2 overflow-y-auto max-h-[calc(100vh-6rem)]">
            <a href="{{ route('about') }}" class="block px-4 py-3 text-base font-medium text-gray-300 hover:text-white hover:bg-white/[0.04] rounded-xl transition-colors" @click="mobileMenuOpen = false" wire:navigate>About Us</a>
            <a href="{{ route('services') }}" class="block px-4 py-3 text-base font-medium text-gray-300 hover:text-white hover:bg-white/[0.04] rounded-xl transition-colors" @click="mobileMenuOpen = false" wire:navigate>All Services</a>
            <a href="{{ route('services.bec') }}" class="block px-4 py-3 text-base font-medium text-gray-300 hover:text-white hover:bg-white/[0.04] rounded-xl transition-colors" @click="mobileMenuOpen = false" wire:navigate>BEC Attacks</a>
            <a href="{{ route('case-studies') }}" class="block px-4 py-3 text-base font-medium text-gray-300 hover:text-white hover:bg-white/[0.04] rounded-xl transition-colors" @click="mobileMenuOpen = false" wire:navigate>Case Studies</a>
            <a href="{{ route('about') }}#fees" class="block px-4 py-3 text-base font-medium text-gray-300 hover:text-white hover:bg-white/[0.04] rounded-xl transition-colors" @click="mobileMenuOpen = false" wire:navigate>Pricing & Fees</a>
            
            <div class="mt-8 px-4 pt-6 border-t border-white/[0.05]">
                <a href="{{ route('contact') }}" class="block w-full text-center bg-gradient-brand text-white px-6 py-4 rounded-full font-medium shadow-lg hover:shadow-[0_0_20px_rgba(226,161,84,0.4)] transition-all text-lg" @click="mobileMenuOpen = false" wire:navigate>
                    Consult an Investigator
                </a>
            </div>
        </div>
    </div>
</nav>