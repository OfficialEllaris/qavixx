<div>
    <!-- Hero Section -->
    <section class="relative min-h-[900px] flex items-center justify-center pt-28 pb-32 overflow-hidden selection:bg-qavixx-copper selection:text-black bg-qavixx-base w-full">

        <!-- Ambient Grid -->
        <div class="absolute inset-0 z-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:32px_32px]"></div>

        <!-- Concentric Radar Rings -->
        <div class="absolute top-1/2 right-0 -translate-y-1/2 translate-x-1/4 w-[800px] h-[800px] z-0 pointer-events-none opacity-40 hidden lg:block">
            <div class="absolute inset-0 rounded-full border border-qavixx-copper/20"></div>
            <div class="absolute inset-[100px] rounded-full border border-qavixx-copper/20 border-dashed animate-[spin_120s_linear_infinite]"></div>
            <div class="absolute inset-[200px] rounded-full border border-qavixx-copper/10"></div>
        </div>

        <!-- Glow Orb -->
        <div class="absolute top-1/2 right-1/4 -translate-y-1/2 w-[600px] h-[600px] bg-qavixx-copper/5 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="w-full max-w-[1000px] mx-auto px-4 sm:px-6 lg:px-0 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-center lg:justify-between min-h-[700px] gap-8 lg:gap-4 py-8 lg:py-0">

                <!-- Main Hub (Clean Typography, No Background) -->
                <div class="relative z-30 w-full lg:w-[600px] shrink-0 pt-5 pb-0 lg:py-10">

                    <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-white/10 bg-white/5 mb-8 backdrop-blur-sm shadow-xl">
                        <span class="w-2 h-2 rounded-full bg-qavixx-copper shadow-[0_0_8px_#e2a154] animate-pulse"></span>
                        <span class="text-[10px] font-heading font-bold text-gray-300 tracking-[0.2em] uppercase">Global Intelligence Operations</span>
                    </div>

                    <h1 class="text-5xl md:text-6xl lg:text-[76px] font-heading font-bold text-white mb-8 leading-[1.05] tracking-tight">
                        Solve complex <br />
                        cybercrimes <br />
                        <span class="text-transparent bg-clip-text bg-gradient-brand italic font-light">others cannot.</span>
                    </h1>

                    <p class="text-lg md:text-xl text-gray-400 mb-10 leading-relaxed font-light max-w-[500px]">
                        {{ config('app.name') }} is the apex intelligence and digital asset tracing firm. We support elite legal teams, law enforcement, and global victims to unmask anonymous threats.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-5">
                        <a href="{{ route('contact') }}" class="group relative inline-flex items-center justify-center px-8 py-4 bg-transparent rounded-full" wire:navigate>
                            <div class="absolute inset-0 bg-gradient-brand rounded-full blur-[10px] opacity-60 group-hover:opacity-100 transition duration-500"></div>
                            <div class="absolute inset-0 bg-gradient-brand rounded-full"></div>
                            <span class="relative text-black font-bold tracking-wide group-hover:scale-105 transition-transform duration-300 flex items-center gap-2">
                                Get started
                            </span>
                        </a>
                        <a href="{{ route('services') }}" class="inline-flex items-center justify-center px-8 py-4 rounded-full font-bold text-white border border-white/10 hover:bg-white/5 transition-all gap-2 backdrop-blur-sm" wire:navigate>
                            View capabilities
                        </a>
                    </div>
                </div>

                <!-- Sleek Premium Widgets Canvas -->
                <div class="relative w-full lg:w-[450px] lg:h-[600px] z-20 shrink-0 flex flex-col items-center lg:block">

                    <!-- Desktop Connection Port floating next to text -->
                    <div class="hidden lg:flex absolute top-1/2 left-0 -translate-y-1/2 -translate-x-1/2 w-4 h-4 rounded-full bg-[#0a0a0a] border border-qavixx-copper/50 items-center justify-center z-40 shadow-[0_0_15px_rgba(226,161,84,0.3)]">
                        <div class="w-1.5 h-1.5 rounded-full bg-qavixx-copper shadow-[0_0_8px_#e2a154] animate-pulse"></div>
                    </div>

                    <!-- Mobile Animated Data Node -->
                    <svg class="lg:hidden absolute inset-0 w-full h-full z-10 pointer-events-none">
                        <defs>
                            <filter id="glow-mobile-node">
                                <feGaussianBlur stdDeviation="2" result="coloredBlur"/>
                                <feMerge>
                                    <feMergeNode in="coloredBlur"/>
                                    <feMergeNode in="SourceGraphic"/>
                                </feMerge>
                            </filter>
                        </defs>
                        <circle r="3" fill="#e2a154" cx="50%" cy="0" filter="url(#glow-mobile-node)">
                            <animate attributeName="cy" values="0%;100%" dur="3.5s" repeatCount="indefinite" />
                        </circle>
                    </svg>

                    <!-- Desktop SVG Circuit Lines -->
                    <svg class="hidden lg:block absolute inset-0 w-full h-full z-0 pointer-events-none opacity-60" viewBox="0 0 450 600">
                        <defs>
                            <linearGradient id="line-glow-right" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="rgba(226,161,84,0.1)" />
                                <stop offset="100%" stop-color="rgba(226,161,84,0.8)" />
                            </linearGradient>
                            <filter id="glow-right">
                                <feGaussianBlur stdDeviation="2" result="coloredBlur" />
                                <feMerge>
                                    <feMergeNode in="coloredBlur" />
                                    <feMergeNode in="SourceGraphic" />
                                </feMerge>
                            </filter>
                        </defs>

                        <path d="M 0,300 C 50,300 50,140 100,140" fill="none" stroke="url(#line-glow-right)" stroke-width="1.5" stroke-dasharray="4 4" />
                        <path d="M 0,300 C 80,300 80,320 160,320" fill="none" stroke="url(#line-glow-right)" stroke-width="1.5" stroke-dasharray="4 4" />
                        <path d="M 0,300 C 50,300 50,460 100,460" fill="none" stroke="url(#line-glow-right)" stroke-width="1.5" stroke-dasharray="4 4" />

                        <!-- Animated Data Nodes -->
                        <circle r="3" fill="#e2a154" filter="url(#glow-right)">
                            <animateMotion dur="3s" repeatCount="indefinite" path="M 0,300 C 50,300 50,140 100,140" />
                        </circle>
                        <circle r="3" fill="#e2a154" filter="url(#glow-right)">
                            <animateMotion dur="4s" repeatCount="indefinite" path="M 0,300 C 80,300 80,320 160,320" />
                        </circle>
                        <circle r="3" fill="#e2a154" filter="url(#glow-right)">
                            <animateMotion dur="3.5s" repeatCount="indefinite" path="M 0,300 C 50,300 50,460 100,460" />
                        </circle>
                    </svg>

                    <!-- Mobile Connection Port (Top) -->
                    <div class="lg:hidden w-4 h-4 rounded-full bg-[#0a0a0a] border border-qavixx-copper/50 flex items-center justify-center z-40 shadow-[0_0_15px_rgba(226,161,84,0.3)] mb-0">
                        <div class="w-1.5 h-1.5 rounded-full bg-qavixx-copper shadow-[0_0_8px_#e2a154] animate-pulse"></div>
                    </div>

                    <!-- Mobile Vertical Line -->
                    <div class="lg:hidden h-8 w-px border-l-[1.5px] border-dashed border-qavixx-copper/40"></div>

                    <!-- Widget 1: Investigative Targets -->
                    <div class="relative lg:absolute z-20 rounded-2xl p-5 border border-white/5 shadow-2xl backdrop-blur-xl bg-[#0f0f0f]/80 w-full max-w-[300px] lg:max-w-none lg:w-[260px] hover:border-white/10 transition-colors pointer-events-auto lg:top-[80px] lg:left-[100px]">
                        <div class="text-[10px] text-gray-500 font-bold tracking-widest uppercase mb-4 flex items-center justify-between">
                            <span>Targets</span>
                            <div class="w-1.5 h-1.5 rounded-full bg-qavixx-copper animate-pulse"></div>
                        </div>
                        <div class="grid grid-cols-3 gap-3" x-data="{ activeIndex: 1 }" x-init="setInterval(() => { activeIndex = Math.floor(Math.random() * 6) }, 2000)">
                            <div class="h-10 rounded-xl border flex items-center justify-center transition-all duration-500" :class="activeIndex === 0 ? 'bg-qavixx-copper/10 border-qavixx-copper/20 text-qavixx-copper shadow-[0_0_15px_rgba(226,161,84,0.15)] scale-105' : 'bg-white/5 border-white/5 text-gray-400 scale-100'"><x-lucide-user-x class="w-4 h-4" /></div>
                            <div class="h-10 rounded-xl border flex items-center justify-center transition-all duration-500" :class="activeIndex === 1 ? 'bg-qavixx-copper/10 border-qavixx-copper/20 text-qavixx-copper shadow-[0_0_15px_rgba(226,161,84,0.15)] scale-105' : 'bg-white/5 border-white/5 text-gray-400 scale-100'"><x-lucide-bitcoin class="w-4 h-4" /></div>
                            <div class="h-10 rounded-xl border flex items-center justify-center transition-all duration-500" :class="activeIndex === 2 ? 'bg-qavixx-copper/10 border-qavixx-copper/20 text-qavixx-copper shadow-[0_0_15px_rgba(226,161,84,0.15)] scale-105' : 'bg-white/5 border-white/5 text-gray-400 scale-100'"><x-lucide-building class="w-4 h-4" /></div>
                            <div class="h-10 rounded-xl border flex items-center justify-center transition-all duration-500" :class="activeIndex === 3 ? 'bg-qavixx-copper/10 border-qavixx-copper/20 text-qavixx-copper shadow-[0_0_15px_rgba(226,161,84,0.15)] scale-105' : 'bg-white/5 border-white/5 text-gray-400 scale-100'"><x-lucide-globe class="w-4 h-4" /></div>
                            <div class="h-10 rounded-xl border flex items-center justify-center transition-all duration-500" :class="activeIndex === 4 ? 'bg-qavixx-copper/10 border-qavixx-copper/20 text-qavixx-copper shadow-[0_0_15px_rgba(226,161,84,0.15)] scale-105' : 'bg-white/5 border-white/5 text-gray-400 scale-100'"><x-lucide-server class="w-4 h-4" /></div>
                            <div class="h-10 rounded-xl border flex items-center justify-center transition-all duration-500" :class="activeIndex === 5 ? 'bg-qavixx-copper/10 border-qavixx-copper/20 text-qavixx-copper shadow-[0_0_15px_rgba(226,161,84,0.15)] scale-105' : 'bg-white/5 border-white/5 text-gray-400 scale-100'"><x-lucide-search class="w-4 h-4" /></div>
                        </div>
                    </div>

                    <!-- Mobile Vertical Line -->
                    <div class="lg:hidden h-8 w-px border-l-[1.5px] border-dashed border-qavixx-copper/40"></div>

                    <!-- Widget 2: Tracing Complete -->
                <div class="relative lg:absolute z-20 rounded-2xl p-4 border border-white/5 shadow-2xl backdrop-blur-xl bg-[#0f0f0f]/80 w-full max-w-[300px] lg:max-w-none lg:w-[260px] flex items-start gap-3.5 hover:border-white/10 transition-colors pointer-events-auto lg:top-[280px] lg:left-[160px]">
                    <div class="w-10 h-10 rounded-full bg-qavixx-copper/10 border border-qavixx-copper/30 flex items-center justify-center text-qavixx-copper shrink-0 shadow-[0_0_15px_rgba(226,161,84,0.1)] mt-0.5">
                        <x-lucide-bitcoin class="w-4 h-4" />
                    </div>
                    <div class="flex-1">
                        <div class="text-[9px] text-gray-500 font-bold tracking-widest uppercase mb-0.5">Tracing Complete</div>
                        <div class="text-[14px] font-bold text-white tracking-wide mb-1.5"><span class="text-qavixx-copper">$2.4M</span> Recovered</div>
                        <div class="text-[10px] text-gray-400 leading-snug">Illicit blockchain transfers successfully traced and frozen.</div>
                    </div>
                </div>

                    <!-- Mobile Vertical Line -->
                    <div class="lg:hidden h-8 w-px border-l-[1.5px] border-dashed border-qavixx-copper/40"></div>

                    <!-- Widget 3: Task Force -->
                <div class="relative lg:absolute z-20 rounded-2xl p-5 border border-white/5 shadow-2xl backdrop-blur-xl bg-[#0f0f0f]/80 w-full max-w-[300px] lg:max-w-none lg:w-[260px] hover:border-white/10 transition-colors pointer-events-auto lg:top-[420px] lg:left-[100px]">
                    <div class="text-[10px] text-gray-500 font-bold tracking-widest uppercase mb-4 flex items-center justify-between">
                        <span>Task Force</span>
                        <x-lucide-users class="w-3 h-3 text-gray-600" />
                    </div>
                    <div class="flex items-start gap-3.5">
                        <div class="w-10 h-10 rounded-full border border-gray-500/30 flex items-center justify-center shrink-0 shadow-[0_0_10px_rgba(156,163,175,0.05)] mt-0.5">
                            <div class="w-8 h-8 rounded-full bg-gray-500/10 flex items-center justify-center text-gray-400">
                                <x-lucide-fingerprint class="w-4 h-4" />
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="text-[13px] font-bold text-white mb-0.5">OSINT Team</div>
                            <div class="text-[10px] text-gray-400 flex items-center gap-1.5 mb-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-gray-400 animate-pulse"></span> Operation Active
                            </div>
                            <div class="text-[10px] text-gray-500 leading-snug">Elite analysts deployed on digital footprint reconnaissance.</div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
    </section>

    <!-- Statistics Section (Editorial Layout) -->
    <section class="relative z-20 -mt-16 pb-12">
        <!-- Ambient Gradient Glow -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-[800px] h-[200px] bg-qavixx-copper/10 rounded-full blur-[100px] pointer-events-none -z-10"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="glass-panel rounded-3xl p-1 md:p-8">
                <div class="grid grid-cols-2 lg:grid-cols-4 divide-x divide-white/5">
                    <div class="p-6 text-center" x-data="{ count: 0, target: 2008, animate() { let observer = new IntersectionObserver(e => { if(e[0].isIntersecting) { let i = setInterval(() => { this.count += Math.ceil((this.target - this.count) / 10); if(this.count >= this.target) { this.count = this.target; clearInterval(i); } }, 30); observer.disconnect(); } }); observer.observe($el); } }" x-init="animate()">
                        <div class="text-sm font-heading font-bold text-gray-500 tracking-[0.2em] uppercase mb-2">Founded</div>
                        <div class="text-4xl lg:text-5xl font-light text-white font-mono" x-text="count">2008</div>
                    </div>
                    <div class="p-6 text-center" x-data="{ count: 0, target: 95, animate() { let observer = new IntersectionObserver(e => { if(e[0].isIntersecting) { let i = setInterval(() => { this.count += Math.ceil((this.target - this.count) / 10); if(this.count >= this.target) { this.count = this.target; clearInterval(i); } }, 30); observer.disconnect(); } }); observer.observe($el); } }" x-init="animate()">
                        <div class="text-sm font-heading font-bold text-gray-500 tracking-[0.2em] uppercase mb-2">Resolution Rate</div>
                        <div class="text-4xl lg:text-5xl font-light text-white font-mono flex items-center justify-center gap-1"><span x-text="count">95</span><span class="text-qavixx-copper text-2xl">%</span></div>
                    </div>
                    <div class="p-6 text-center" x-data="{ count: 0, target: 50, animate() { let observer = new IntersectionObserver(e => { if(e[0].isIntersecting) { let i = setInterval(() => { this.count += Math.ceil((this.target - this.count) / 10); if(this.count >= this.target) { this.count = this.target; clearInterval(i); } }, 30); observer.disconnect(); } }); observer.observe($el); } }" x-init="animate()">
                        <div class="text-sm font-heading font-bold text-gray-500 tracking-[0.2em] uppercase mb-2">Jurisdictions</div>
                        <div class="text-4xl lg:text-5xl font-light text-white font-mono flex items-center justify-center gap-1"><span x-text="count">50</span><span class="text-qavixx-copper text-2xl">+</span></div>
                    </div>
                    <div class="p-6 text-center" x-data="{ count: 0, target: 150, animate() { let observer = new IntersectionObserver(e => { if(e[0].isIntersecting) { let i = setInterval(() => { this.count += Math.ceil((this.target - this.count) / 10); if(this.count >= this.target) { this.count = this.target; clearInterval(i); } }, 30); observer.disconnect(); } }); observer.observe($el); } }" x-init="animate()">
                        <div class="text-sm font-heading font-bold text-gray-500 tracking-[0.2em] uppercase mb-2">Recovered</div>
                        <div class="text-4xl lg:text-5xl font-light text-white font-mono flex items-center justify-center gap-1"><span class="text-qavixx-copper text-3xl">$</span><span x-text="count">150</span><span class="text-qavixx-copper text-2xl">M+</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About / Mission Section -->
    <section class="py-32 relative overflow-hidden bg-qavixx-base">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="order-2 lg:order-1 relative">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-qavixx-surface rounded-full blur-[100px] z-0"></div>
                    <div class="grid grid-cols-2 gap-4 relative z-10">
                        <div class="space-y-4 pt-12">
                            <div class="glass-panel-interactive overflow-hidden relative rounded-2xl p-8 aspect-square flex flex-col justify-center items-center text-center group border border-white/5 hover:border-qavixx-copper/30 transition-colors duration-500">
                                <div class="absolute inset-0 bg-cover bg-center opacity-30 mix-blend-screen group-hover:opacity-50 transition-opacity duration-700 z-0" style="background-image: url('{{ asset('images/cyber-trace.png') }}')"></div>
                                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#050505]/95 z-0"></div>
                                <div class="relative z-10 flex flex-col items-center w-full">
                                    <x-lucide-search class="w-10 h-10 text-gray-500 group-hover:text-qavixx-copper transition-all duration-500 mb-6 drop-shadow-md group-hover:scale-110 group-hover:drop-shadow-[0_0_15px_rgba(226,161,84,0.4)]" />
                                    <h4 class="text-white font-heading font-semibold tracking-widest text-sm uppercase drop-shadow-md">Trace</h4>
                                </div>
                            </div>
                            <div class="glass-panel-interactive overflow-hidden relative rounded-2xl p-8 aspect-square flex flex-col justify-center items-center text-center group border border-white/5 hover:border-qavixx-copper/30 transition-colors duration-500">
                                <div class="absolute inset-0 bg-cover bg-center opacity-30 mix-blend-screen group-hover:opacity-50 transition-opacity duration-700 z-0" style="background-image: url('{{ asset('images/cyber-unmask.png') }}')"></div>
                                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#050505]/95 z-0"></div>
                                <div class="relative z-10 flex flex-col items-center w-full">
                                    <x-lucide-user-check class="w-10 h-10 text-gray-500 group-hover:text-qavixx-copper transition-all duration-500 mb-6 drop-shadow-md group-hover:scale-110 group-hover:drop-shadow-[0_0_15px_rgba(226,161,84,0.4)]" />
                                    <h4 class="text-white font-heading font-semibold tracking-widest text-sm uppercase drop-shadow-md">Unmask</h4>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="glass-panel-interactive overflow-hidden relative rounded-2xl p-8 aspect-square flex flex-col justify-center items-center text-center group border border-qavixx-copper/30 shadow-[0_0_30px_rgba(226,161,84,0.1)]">
                                <div class="absolute inset-0 bg-cover bg-center opacity-40 mix-blend-screen group-hover:opacity-60 transition-opacity duration-700 z-0" style="background-image: url('{{ asset('images/cyber-pattern.png') }}')"></div>
                                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#050505]/90 z-0"></div>
                                <div class="relative z-10 flex flex-col items-center w-full">
                                    <x-lucide-file-search class="w-10 h-10 text-qavixx-copper mb-6 scale-110 drop-shadow-[0_0_15px_rgba(226,161,84,0.4)]" />
                                    <h4 class="text-white font-heading font-semibold tracking-widest text-sm uppercase drop-shadow-md">Investigate</h4>
                                </div>
                            </div>
                            <div class="glass-panel-interactive overflow-hidden relative rounded-2xl p-8 aspect-square flex flex-col justify-center items-center text-center group border border-white/5 hover:border-qavixx-copper/30 transition-colors duration-500">
                                <div class="absolute inset-0 bg-cover bg-center opacity-30 mix-blend-screen group-hover:opacity-50 transition-opacity duration-700 z-0" style="background-image: url('{{ asset('images/cyber-prosecute.png') }}')"></div>
                                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-[#050505]/95 z-0"></div>
                                <div class="relative z-10 flex flex-col items-center w-full">
                                    <x-lucide-gavel class="w-10 h-10 text-gray-500 group-hover:text-qavixx-copper transition-all duration-500 mb-6 drop-shadow-md group-hover:scale-110 group-hover:drop-shadow-[0_0_15px_rgba(226,161,84,0.4)]" />
                                    <h4 class="text-white font-heading font-semibold tracking-widest text-sm uppercase drop-shadow-md">Prosecute</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <div class="text-[10px] font-heading font-bold text-qavixx-copper tracking-[0.3em] uppercase mb-4 flex items-center gap-4">
                        <span class="w-8 h-px bg-qavixx-copper"></span>
                        The {{ config('app.name') }} Methodology
                    </div>
                    <h2 class="text-4xl md:text-5xl font-heading font-bold text-white mb-8 leading-tight">
                        When traditional methods fail, we uncover the truth.
                    </h2>
                    <p class="text-lg text-gray-400 mb-12 font-light leading-relaxed">
                        {{ config('app.name') }} bridges the critical gap between complex cybercrimes and successful law enforcement action. Our intelligence gathering and forensic analysis provide the actionable evidence required for subpoenas, asset freezing, and successful prosecution.
                    </p>

                    <ul class="space-y-6 mb-12">
                        <li class="flex items-start gap-4">
                            <div class="mt-1 w-6 h-6 rounded-full bg-qavixx-copper/10 border border-qavixx-copper/30 flex items-center justify-center flex-shrink-0">
                                <x-lucide-check class="w-3.5 h-3.5 text-qavixx-copper" />
                            </div>
                            <div class="text-gray-300 font-light">
                                <strong class="text-white font-medium block mb-1">Court-Admissible Evidence</strong>
                                Comprehensive reports designed specifically for legal proceedings and law enforcement.
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="mt-1 w-6 h-6 rounded-full bg-qavixx-copper/10 border border-qavixx-copper/30 flex items-center justify-center flex-shrink-0">
                                <x-lucide-check class="w-3.5 h-3.5 text-qavixx-copper" />
                            </div>
                            <div class="text-gray-300 font-light">
                                <strong class="text-white font-medium block mb-1">Global Reach</strong>
                                Cross-border investigation capabilities targeting offshore scammers and hidden assets.
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="mt-1 w-6 h-6 rounded-full bg-qavixx-copper/10 border border-qavixx-copper/30 flex items-center justify-center flex-shrink-0">
                                <x-lucide-check class="w-3.5 h-3.5 text-qavixx-copper" />
                            </div>
                            <div class="text-gray-300 font-light">
                                <strong class="text-white font-medium block mb-1">Proprietary Technology</strong>
                                Advanced tracking methods that succeed where standard investigations stall.
                            </div>
                        </li>
                    </ul>

                    <a href="{{ route('about') }}" class="group inline-flex items-center text-sm font-heading font-bold text-white tracking-[0.1em] uppercase hover:text-qavixx-copper transition-colors" wire:navigate>
                        Explore our framework
                        <svg class="w-5 h-5 ml-3 group-hover:translate-x-2 transition-transform text-qavixx-copper" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-32 relative">
        <div class="absolute inset-0 bg-qavixx-surface"></div>
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <div class="text-[10px] font-heading font-bold text-qavixx-copper tracking-[0.3em] uppercase mb-4 inline-flex items-center gap-4">
                    <span class="w-8 h-px bg-qavixx-copper"></span>
                    Specialized Capabilities
                    <span class="w-8 h-px bg-qavixx-copper"></span>
                </div>
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-white leading-tight">
                    We investigate a broad range of cybercrimes.
                </h2>
            </div>

            <div class="mt-16">
                <div class="flex items-center justify-between mb-10">
                    <h3 class="text-2xl font-heading font-semibold text-white flex items-center gap-4">
                        <span class="w-1.5 h-6 bg-gradient-brand rounded-full"></span>
                        Private Investigations
                    </h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <x-service-card title="Identify Anonymous Users" description="Unmask anonymous cyberstalkers, trolls, and perpetrators hiding behind fake profiles or VPNs." icon="user-search" href="{{ route('services.identify') }}" />
                    <x-service-card title="Scam Investigations" description="Trace funds and identify operators behind investment fraud, pig butchering, and complex online scams." icon="alert-triangle" href="{{ route('services.scams') }}" active="true" />
                    <x-service-card title="Crypto & Divorce" description="Locate hidden digital assets and cryptocurrency wallets during high-net-worth divorce proceedings." icon="bitcoin" href="{{ route('services.crypto') }}" />
                    <x-service-card title="Romance Scams" description="Verify identities and trace stolen funds across international borders for victims of romance fraud." icon="heart-crack" href="{{ route('services.romance') }}" />
                    <x-service-card title="Social Media Investigations" description="Comprehensive intelligence gathering across social platforms to support civil litigation and criminal cases." icon="share-2" href="{{ route('services.social') }}" />
                    <x-service-card title="Defamation & Harassment" description="Identify perpetrators of online defamation, revenge porn, and corporate sabotage campaigns." icon="message-square-x" href="{{ route('services.defamation') }}" />
                </div>
            </div>

            <div class="mt-24">
                <div class="flex items-center justify-between mb-10">
                    <h3 class="text-2xl font-heading font-semibold text-white flex items-center gap-4">
                        <span class="w-1.5 h-6 bg-gradient-brand rounded-full"></span>
                        Corporate Investigations
                    </h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <x-service-card title="BEC Attacks" description="Rapid response to Business Email Compromise to freeze funds and identify the attack vector." icon="mail-warning" href="{{ route('services.bec') }}" />
                    <x-service-card title="Corporate Intelligence" description="Deep due diligence, insider threat identification, and intellectual property theft investigations." icon="briefcase" href="{{ route('services.corporate') }}" />

                    <div class="glass-panel rounded-2xl p-8 flex flex-col justify-center items-center text-center border-dashed border-white/20">
                        <div class="w-16 h-16 rounded-full bg-white/5 flex items-center justify-center mb-6">
                            <x-lucide-grid class="w-6 h-6 text-gray-500" />
                        </div>
                        <h4 class="text-white font-heading font-medium mb-4">View Complete Service Roster</h4>
                        <a href="{{ route('services') }}" class="px-6 py-2 rounded-full border border-white/20 hover:bg-white/10 text-sm font-medium transition-colors" wire:navigate>
                            Browse All
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies / Editorial Layout -->
    <section class="py-32 bg-qavixx-base relative overflow-hidden">
        <div class="absolute top-1/2 right-0 w-[800px] h-[800px] bg-qavixx-copper-darker/5 rounded-full blur-[150px] -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                <div class="lg:col-span-4 flex flex-col justify-center">
                    <div class="text-[10px] font-heading font-bold text-qavixx-copper tracking-[0.3em] uppercase mb-4 flex items-center gap-4">
                        <span class="w-8 h-px bg-qavixx-copper"></span>
                        Proven Results
                    </div>
                    <h2 class="text-4xl md:text-5xl font-heading font-bold text-white mb-6 leading-tight">
                        Real cases. <br />
                        <span class="text-transparent bg-clip-text bg-gradient-brand">Real recovery.</span>
                    </h2>
                    <p class="text-gray-400 font-light mb-8 leading-relaxed">
                        Don't just take our word for it. Review our redacted case files detailing how we've unmasked criminals and recovered millions for our clients globally.
                    </p>
                    <a href="{{ route('case-studies') }}" class="group inline-flex items-center text-sm font-heading font-bold text-white tracking-[0.1em] uppercase hover:text-qavixx-copper transition-colors" wire:navigate>
                        Access Case Files
                        <svg class="w-5 h-5 ml-3 group-hover:translate-x-2 transition-transform text-qavixx-copper" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <div class="lg:col-span-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 relative">
                        <!-- Connecting lines behind cards -->
                        <div class="hidden md:block absolute top-1/2 left-1/4 right-1/4 h-px bg-qavixx-copper/20 z-0"></div>
                        <div class="hidden md:block absolute top-1/4 bottom-1/4 left-1/2 w-px bg-qavixx-copper/20 z-0"></div>

                        <!-- Case Study Card 1 -->
                        <div class="glass-panel-interactive rounded-2xl p-8 relative z-10 md:mt-12">
                            <div class="flex justify-between items-start mb-6">
                                <div class="px-3 py-1 bg-white/5 border border-white/10 rounded-md text-xs font-mono text-gray-400">CASE #0482</div>
                                <div class="flex items-center gap-1 text-qavixx-copper">
                                    <x-lucide-star class="w-4 h-4 fill-current" />
                                    <x-lucide-star class="w-4 h-4 fill-current" />
                                    <x-lucide-star class="w-4 h-4 fill-current" />
                                    <x-lucide-star class="w-4 h-4 fill-current" />
                                    <x-lucide-star class="w-4 h-4 fill-current" />
                                </div>
                            </div>
                            <h4 class="text-xl font-heading font-semibold text-white mb-4">Crypto Theft Recovery</h4>
                            <p class="text-gray-400 font-light text-sm italic mb-6 leading-relaxed">"{{ config('app.name') }} traced my stolen crypto across 14 wallets and provided a report that led the FBI directly to the perpetrators. We recovered 80% of the funds."</p>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center">
                                    <x-lucide-user class="w-4 h-4 text-white" />
                                </div>
                                <div class="text-xs font-medium text-gray-300 uppercase tracking-wider">Tech Executive, CA</div>
                            </div>
                        </div>

                        <!-- Case Study Card 2 -->
                        <div class="glass-panel-interactive rounded-2xl p-8 relative z-10 md:-mt-12">
                            <div class="flex justify-between items-start mb-6">
                                <div class="px-3 py-1 bg-white/5 border border-white/10 rounded-md text-xs font-mono text-gray-400">CASE #0891</div>
                                <div class="flex items-center gap-1 text-qavixx-copper">
                                    <x-lucide-star class="w-4 h-4 fill-current" />
                                    <x-lucide-star class="w-4 h-4 fill-current" />
                                    <x-lucide-star class="w-4 h-4 fill-current" />
                                    <x-lucide-star class="w-4 h-4 fill-current" />
                                    <x-lucide-star class="w-4 h-4 fill-current" />
                                </div>
                            </div>
                            <h4 class="text-xl font-heading font-semibold text-white mb-4">BEC Intercept</h4>
                            <p class="text-gray-400 font-light text-sm italic mb-6 leading-relaxed">"When $2.4M was wired to a fraudulent account, {{ config('app.name') }}'s rapid response team worked with international banks to freeze the assets within hours."</p>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center">
                                    <x-lucide-briefcase class="w-4 h-4 text-white" />
                                </div>
                                <div class="text-xs font-medium text-gray-300 uppercase tracking-wider">CFO, Manufacturing</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ultimate CTA Section -->
    <section class="py-32 relative overflow-hidden">
        <div class="absolute inset-0 bg-qavixx-surface"></div>
        <!-- Huge central gradient glow -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-4xl h-[400px] bg-gradient-brand blur-[120px] opacity-20 pointer-events-none"></div>
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:60px_60px] [mask-image:radial-gradient(ellipse_60%_60%_at_50%_50%,#000_20%,transparent_100%)]"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="w-20 h-20 mx-auto bg-qavixx-base rounded-2xl border border-white/10 flex items-center justify-center shadow-2xl mb-8 transform -rotate-3">
                <x-lucide-shield class="w-10 h-10 text-qavixx-copper" />
            </div>

            <h2 class="text-4xl md:text-6xl font-heading font-bold text-white mb-8 leading-tight tracking-tight drop-shadow-xl">
                Ready to uncover the <span class="text-transparent bg-clip-text bg-gradient-brand">truth?</span>
            </h2>
            <p class="text-xl text-gray-400 mb-12 max-w-2xl mx-auto font-light leading-relaxed">
                Time is the most critical factor in digital asset recovery and cyber investigations. Secure a confidential assessment of your case immediately.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="{{ route('contact') }}" class="group relative inline-flex items-center justify-center px-10 py-5 bg-transparent" wire:navigate>
                    <div class="absolute inset-0 bg-gradient-brand rounded-full blur-[15px] opacity-60 group-hover:opacity-100 transition duration-500"></div>
                    <div class="absolute inset-0 bg-gradient-brand rounded-full"></div>
                    <span class="relative text-white font-medium text-lg tracking-wide flex items-center gap-3">
                        <x-lucide-lock class="w-5 h-5" />
                        Secure Confidential Consultation
                    </span>
                </a>
            </div>
            <p class="mt-8 text-sm text-gray-500 font-mono tracking-widest uppercase">Strictly Confidential • Global Response</p>
        </div>
    </section>
</div>