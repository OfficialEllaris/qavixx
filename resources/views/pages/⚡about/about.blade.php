<div class="overflow-hidden relative bg-qavixx-base min-h-screen">
    <!-- Hero Section -->
    <section class="relative pt-40 pb-40 flex items-center justify-center min-h-[70vh]">
        
        <!-- Enhanced Background Elements -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <!-- Dynamic Grid -->
            <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:60px_60px] [mask-image:radial-gradient(ellipse_80%_80%_at_50%_50%,black_20%,transparent_100%)]"></div>
            
            <!-- Glowing Core -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] opacity-20 animate-pulse" style="animation-duration: 5s;">
                <div class="w-full h-full bg-gradient-brand opacity-30 blur-[150px] rounded-full"></div>
            </div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] opacity-20 animate-pulse" style="animation-duration: 5s; animation-delay: 2.5s;">
                <div class="w-full h-full bg-qavixx-copper opacity-40 blur-[100px] rounded-full"></div>
            </div>
            
            <!-- Decorative Targeting Crosshairs -->
            <div class="absolute top-[25%] md:top-[20%] left-[5%] md:left-[15%] w-12 h-12 border-l-2 border-t-2 border-qavixx-copper/30 opacity-60"></div>
            <div class="absolute bottom-[15%] md:bottom-[20%] right-[5%] md:right-[15%] w-12 h-12 border-r-2 border-b-2 border-qavixx-copper/30 opacity-60"></div>
            
            <div class="absolute top-[30%] right-[20%] flex items-center gap-2 opacity-40">
                <div class="w-1 h-1 bg-qavixx-copper rounded-full"></div>
                <div class="w-8 h-px bg-qavixx-copper"></div>
            </div>
            <div class="absolute bottom-[30%] left-[20%] flex items-center gap-2 opacity-40">
                <div class="w-8 h-px bg-qavixx-copper"></div>
                <div class="w-1 h-1 bg-qavixx-copper rounded-full"></div>
            </div>
        </div>
        
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 text-center">
            <div class="inline-flex items-center gap-2 px-6 py-2 rounded-full glass-panel mb-10 border border-qavixx-copper/40 text-qavixx-copper font-medium text-xs tracking-[0.3em] uppercase shadow-[0_0_30px_rgba(226,161,84,0.2)] animate-fade-in-up backdrop-blur-xl">
                <div class="w-2 h-2 rounded-full bg-qavixx-copper animate-pulse shadow-[0_0_10px_#e2a154]"></div>
                The Agency
            </div>
            
            <h1 class="text-6xl md:text-7xl lg:text-8xl font-heading font-bold mb-8 leading-[1.1] animate-fade-in-up tracking-tight" style="animation-delay: 100ms;">
                <span class="text-transparent bg-clip-text bg-gradient-to-b from-white to-gray-400">About</span> 
                <span class="text-transparent bg-clip-text bg-gradient-brand filter drop-shadow-[0_0_20px_rgba(226,161,84,0.3)]">{{ config('app.name') }}</span>
            </h1>
            
            <p class="text-xl md:text-2xl text-gray-400 leading-relaxed mx-auto max-w-3xl animate-fade-in-up font-light" style="animation-delay: 200ms;">
                Elite digital forensics, asset tracing, and intelligence gathering for the world's most complex cybercrimes and corporate disputes.
            </p>
            
            <div class="mt-14 flex justify-center animate-fade-in-up" style="animation-delay: 300ms;">
                <a href="#manifesto" class="group relative inline-flex items-center gap-3 px-8 py-4 rounded-xl glass-panel-interactive border border-qavixx-copper/30 text-qavixx-copper hover:text-white transition-all duration-300 font-medium tracking-wide shadow-[0_0_20px_rgba(226,161,84,0.1)] hover:shadow-[0_0_30px_rgba(226,161,84,0.3)] hover:border-qavixx-copper/60 overflow-hidden">
                    <div class="absolute inset-0 bg-qavixx-copper/10 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                    <span class="relative z-10">Read our manifesto</span> 
                    <x-lucide-arrow-down class="w-5 h-5 relative z-10 group-hover:translate-y-1 transition-transform" />
                </a>
            </div>
        </div>
    </section>

    <!-- Mission & Manifesto Section -->
    <section class="py-24 bg-qavixx-surface border-t border-white/5 relative overflow-hidden">
        <!-- Cyber grid background -->
        <div class="absolute inset-0 opacity-10 bg-[linear-gradient(rgba(255,255,255,0.1)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.1)_1px,transparent_1px)] bg-[size:40px_40px] [mask-image:radial-gradient(ellipse_at_center,black_40%,transparent_70%)]"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
                
                <div class="lg:col-span-7 space-y-8">
                    <h2 class="text-3xl font-heading font-bold text-white mb-6 flex items-center gap-4">
                        <span class="w-12 h-px bg-qavixx-copper"></span>
                        Our Manifesto
                    </h2>
                    
                    <div class="space-y-6 text-lg text-gray-300 leading-relaxed">
                        <p class="first-letter:text-5xl first-letter:font-heading first-letter:font-bold first-letter:text-qavixx-copper first-letter:mr-3 first-letter:float-left">
                            {{ config('app.name') }} was founded to address a critical vulnerability in the modern justice system: the growing gap between the sophistication of transnational cybercriminals and the resources available to their victims. 
                        </p>
                        <p>
                            Traditional law enforcement agencies are fundamentally constrained by jurisdictional borders, red tape, and overwhelming caseloads. By the time a subpoena is drafted, digital assets have already crossed six borders and vanished into decentralized protocols.
                        </p>
                        <div class="pl-6 border-l-2 border-qavixx-copper py-2 my-8 glass-panel-interactive rounded-r-xl">
                            <p class="text-white font-medium italic">
                                "We do not just investigate. We build unassailable, court-admissible cases that force the hand of regulatory bodies and compel law enforcement action."
                            </p>
                        </div>
                        <p>
                            We provide victims, top-tier law firms, and multinational corporations with the actionable intelligence required to pierce the veil of digital anonymity. Our intelligence unit consists of former state-sponsored analysts, elite blockchain forensics experts, and master OSINT operatives.
                        </p>
                    </div>
                </div>
                
                <div class="lg:col-span-5">
                    <div class="relative">
                        <!-- Sleek, toned-down metrics card -->
                        <div class="glass-panel p-8 md:p-10 rounded-3xl relative z-10 border border-white/10 shadow-2xl">
                            <h3 class="text-xl font-heading font-bold text-white mb-8 border-b border-white/10 pb-4">Operational Metrics</h3>
                            
                            <div class="grid grid-cols-2 gap-4 md:gap-8 text-center relative">
                                <!-- Center crosshair decorative element -->
                                <div class="absolute inset-0 pointer-events-none flex items-center justify-center">
                                    <div class="w-full h-px bg-white/5"></div>
                                    <div class="absolute h-full w-px bg-white/5"></div>
                                </div>
                                
                                <div class="p-2 md:p-4" x-data="{ count: 0, target: 15, startCounting() { let start = null; const step = (t) => { if(!start) start = t; const p = Math.min((t - start) / 2000, 1); this.count = Math.floor(p * this.target); if(p < 1) requestAnimationFrame(step); }; requestAnimationFrame(step); } }" x-init="let observer = new IntersectionObserver(entries => { if(entries[0].isIntersecting) { startCounting(); observer.disconnect(); } }); observer.observe($el);">
                                    <div class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-qavixx-copper mb-1 md:mb-2"><span x-text="count">0</span>+</div>
                                    <div class="text-gray-400 text-[9px] md:text-[10px] font-bold uppercase tracking-wider md:tracking-widest">Years Expertise</div>
                                </div>
                                <div class="p-2 md:p-4" x-data="{ count: 0, target: 150, startCounting() { let start = null; const step = (t) => { if(!start) start = t; const p = Math.min((t - start) / 2000, 1); this.count = Math.floor(p * this.target); if(p < 1) requestAnimationFrame(step); }; requestAnimationFrame(step); } }" x-init="let observer = new IntersectionObserver(entries => { if(entries[0].isIntersecting) { startCounting(); observer.disconnect(); } }); observer.observe($el);">
                                    <div class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-qavixx-copper mb-1 md:mb-2">$<span x-text="count">0</span>M+</div>
                                    <div class="text-gray-400 text-[9px] md:text-[10px] font-bold uppercase tracking-wider md:tracking-widest">Assets Located</div>
                                </div>
                                <div class="p-2 md:p-4" x-data="{ count: 0, target: 98, startCounting() { let start = null; const step = (t) => { if(!start) start = t; const p = Math.min((t - start) / 2000, 1); this.count = Math.floor(p * this.target); if(p < 1) requestAnimationFrame(step); }; requestAnimationFrame(step); } }" x-init="let observer = new IntersectionObserver(entries => { if(entries[0].isIntersecting) { startCounting(); observer.disconnect(); } }); observer.observe($el);">
                                    <div class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-qavixx-copper mb-1 md:mb-2"><span x-text="count">0</span>%</div>
                                    <div class="text-gray-400 text-[9px] md:text-[10px] font-bold uppercase tracking-wider md:tracking-widest">Unmask Rate</div>
                                </div>
                                <div class="p-2 md:p-4" x-data="{ count: 0, target: 24, startCounting() { let start = null; const step = (t) => { if(!start) start = t; const p = Math.min((t - start) / 2000, 1); this.count = Math.floor(p * this.target); if(p < 1) requestAnimationFrame(step); }; requestAnimationFrame(step); } }" x-init="let observer = new IntersectionObserver(entries => { if(entries[0].isIntersecting) { startCounting(); observer.disconnect(); } }); observer.observe($el);">
                                    <div class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-qavixx-copper mb-1 md:mb-2"><span x-text="count">0</span>/7</div>
                                    <div class="text-gray-400 text-[9px] md:text-[10px] font-bold uppercase tracking-wider md:tracking-widest">Global Response</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Strategic Partners - Premium Carousel -->
    <section id="partners" class="py-24 bg-qavixx-surface relative border-t border-white/5 scroll-mt-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 mb-16">
            <x-⚡section-heading 
                subtitle="Global Reach" 
                title="Strategic Partners" 
                alignment="center"
            />
            
            <p class="text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed">
                Cybercrime is inherently borderless. We maintain a trusted, highly-vetted network of international law firms, cyber incident response teams, and local investigators to execute physical operations globally.
            </p>
        </div>

        <!-- Infinite Logo Carousel -->
        <div class="relative w-full flex overflow-hidden before:absolute before:left-0 before:top-0 before:z-10 before:h-full before:w-32 before:bg-gradient-to-r before:from-qavixx-surface before:to-transparent after:absolute after:right-0 after:top-0 after:z-10 after:h-full after:w-32 after:bg-gradient-to-l after:from-qavixx-surface after:to-transparent">
            <!-- First marquee track -->
            <div class="flex animate-marquee whitespace-nowrap items-center">
                <!-- Partner 1 -->
                <div class="mx-8 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-500 opacity-60 hover:opacity-100 min-w-[250px]">
                    <div class="flex items-center gap-3">
                        <x-lucide-scale class="w-10 h-10 text-qavixx-copper" />
                        <span class="font-heading font-bold text-2xl text-white">LegalNet <span class="text-qavixx-copper">Global</span></span>
                    </div>
                </div>
                <!-- Partner 2 -->
                <div class="mx-8 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-500 opacity-60 hover:opacity-100 min-w-[250px]">
                    <div class="flex items-center gap-3">
                        <x-lucide-link class="w-10 h-10 text-white" />
                        <span class="font-heading font-bold text-2xl text-white">ChainTrace <span class="text-gray-400 font-light">Forensics</span></span>
                    </div>
                </div>
                <!-- Partner 3 -->
                <div class="mx-8 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-500 opacity-60 hover:opacity-100 min-w-[250px]">
                    <div class="flex items-center gap-3">
                        <x-lucide-shield-half class="w-10 h-10 text-qavixx-copper" />
                        <span class="font-heading font-bold text-2xl text-white tracking-widest uppercase">SecureIR Group</span>
                    </div>
                </div>
                <!-- Partner 4 -->
                <div class="mx-8 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-500 opacity-60 hover:opacity-100 min-w-[250px]">
                    <div class="flex items-center gap-3">
                        <x-lucide-gavel class="w-10 h-10 text-white" />
                        <span class="font-heading font-bold text-2xl text-white">EuroLegal <span class="text-qavixx-copper">Alliance</span></span>
                    </div>
                </div>
                <!-- Partner 5 -->
                <div class="mx-8 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-500 opacity-60 hover:opacity-100 min-w-[250px]">
                    <div class="flex items-center gap-3">
                        <x-lucide-binary class="w-10 h-10 text-gray-500" />
                        <span class="font-heading text-2xl text-white">ZeroDay <span class="font-bold text-qavixx-copper">Intel</span></span>
                    </div>
                </div>
            </div>
            
            <!-- Duplicated track for infinite scroll -->
            <div class="flex animate-marquee whitespace-nowrap items-center" aria-hidden="true">
                <!-- Partner 1 -->
                <div class="mx-8 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-500 opacity-60 hover:opacity-100 min-w-[250px]">
                    <div class="flex items-center gap-3">
                        <x-lucide-scale class="w-10 h-10 text-qavixx-copper" />
                        <span class="font-heading font-bold text-2xl text-white">LegalNet <span class="text-qavixx-copper">Global</span></span>
                    </div>
                </div>
                <!-- Partner 2 -->
                <div class="mx-8 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-500 opacity-60 hover:opacity-100 min-w-[250px]">
                    <div class="flex items-center gap-3">
                        <x-lucide-link class="w-10 h-10 text-white" />
                        <span class="font-heading font-bold text-2xl text-white">ChainTrace <span class="text-gray-400 font-light">Forensics</span></span>
                    </div>
                </div>
                <!-- Partner 3 -->
                <div class="mx-8 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-500 opacity-60 hover:opacity-100 min-w-[250px]">
                    <div class="flex items-center gap-3">
                        <x-lucide-shield-half class="w-10 h-10 text-qavixx-copper" />
                        <span class="font-heading font-bold text-2xl text-white tracking-widest uppercase">SecureIR Group</span>
                    </div>
                </div>
                <!-- Partner 4 -->
                <div class="mx-8 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-500 opacity-60 hover:opacity-100 min-w-[250px]">
                    <div class="flex items-center gap-3">
                        <x-lucide-gavel class="w-10 h-10 text-white" />
                        <span class="font-heading font-bold text-2xl text-white">EuroLegal <span class="text-qavixx-copper">Alliance</span></span>
                    </div>
                </div>
                <!-- Partner 5 -->
                <div class="mx-8 flex items-center justify-center grayscale hover:grayscale-0 transition-all duration-500 opacity-60 hover:opacity-100 min-w-[250px]">
                    <div class="flex items-center gap-3">
                        <x-lucide-binary class="w-10 h-10 text-gray-500" />
                        <span class="font-heading text-2xl text-white">ZeroDay <span class="font-bold text-qavixx-copper">Intel</span></span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-16 flex justify-center z-10 relative px-4 w-full">
            <div class="inline-flex items-center gap-3 px-5 py-3 md:px-6 rounded-2xl md:rounded-full bg-qavixx-copper/10 border border-qavixx-copper/20 text-qavixx-copper text-xs md:text-sm font-medium max-w-[280px] md:max-w-none text-balance leading-snug">
                <x-lucide-globe class="w-5 h-5 shrink-0" />
                <span>Operations actively executed in 45+ jurisdictions</span>
            </div>
        </div>
    </section>

    <!-- Fees & Pricing -->
    <section id="fees" class="py-24 bg-qavixx-base border-t border-white/5 relative scroll-mt-24">
        <div class="absolute top-0 right-0 w-1/2 h-1/2 bg-gradient-brand opacity-5 blur-[150px] z-0"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <x-⚡section-heading 
                subtitle="Transparent Financials" 
                title="Investigation Fees" 
                alignment="center"
            />
            
            <p class="text-xl text-gray-400 max-w-3xl mx-auto text-center mb-16 leading-relaxed">
                We <strong class="text-white">do not</strong> operate on contingency. Our fees reflect the specialized expertise, proprietary tool licensing, and dedicated intelligence analyst hours required for high-stakes digital forensics.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Tier 1 -->
                <div class="glass-panel p-8 rounded-3xl flex flex-col h-full border border-white/[0.05] hover:border-white/20 transition-all relative overflow-hidden group">
                    <div class="absolute top-0 left-0 w-full h-1 bg-white/10 group-hover:bg-white/30 transition-colors"></div>
                    <h3 class="text-2xl font-heading font-bold text-white mb-6">Financial Crime & Scams</h3>
                    <p class="text-gray-400 mb-8 flex-grow text-sm leading-relaxed">Due to the complexity and global scope of these cases, pricing is determined on a case-by-case basis following an initial consultation.<br><br>Custom quotes ensure tailored investigative strategies and resource allocation.</p>
                    <a href="{{ route('contact') }}" class="w-full mt-auto block text-center py-4 rounded-xl border border-white/20 text-white hover:bg-white/5 transition-all font-bold tracking-wide" wire:navigate>Custom Quote</a>
                </div>
                
                <!-- Tier 2 -->
                <div class="glass-panel p-8 rounded-3xl flex flex-col h-full border border-qavixx-copper/40 relative overflow-hidden transform md:-translate-y-6 shadow-[0_20px_50px_rgba(0,0,0,0.5)] group">
                    <div class="absolute inset-0 bg-gradient-brand opacity-0 group-hover:opacity-5 transition-opacity duration-500"></div>
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-brand"></div>
                    
                    <h3 class="text-2xl font-heading font-bold text-white mb-6">Digital Investigations</h3>
                    <div class="flex items-baseline gap-2 mb-1 tracking-tight">
                        <span class="text-qavixx-copper font-bold text-xl">USD</span>
                        <span class="text-white font-bold text-5xl leading-none">5,000</span>
                    </div>
                    <div class="text-gray-400 font-medium text-sm mb-8 uppercase tracking-wider">Minimum fee</div>
                    <p class="text-gray-300 mb-8 flex-grow text-sm leading-relaxed">These cases typically involve identifying anonymous offenders and gathering legally admissible evidence.</p>
                    
                    <a href="{{ route('contact') }}" class="relative group/btn mt-auto block w-full z-10" wire:navigate>
                        <div class="absolute -inset-1 bg-gradient-brand rounded-xl blur opacity-40 group-hover/btn:opacity-100 transition duration-500"></div>
                        <div class="relative w-full block text-center py-4 rounded-xl bg-qavixx-surface border border-white/10 text-white font-bold tracking-wide transition-all group-hover/btn:bg-transparent">
                            Contact Us
                        </div>
                    </a>
                </div>
                
                <!-- Tier 3 -->
                <div class="glass-panel p-8 rounded-3xl flex flex-col h-full border border-white/[0.05] hover:border-white/20 transition-all relative overflow-hidden group">
                    <div class="absolute top-0 left-0 w-full h-1 bg-white/10 group-hover:bg-white/30 transition-colors"></div>
                    <h3 class="text-2xl font-heading font-bold text-white mb-6">Corporate Cyber Fraud</h3>
                    <div class="flex items-baseline gap-2 mb-1 tracking-tight">
                        <span class="text-qavixx-copper font-bold text-xl">USD</span>
                        <span class="text-white font-bold text-5xl leading-none">15,000</span>
                    </div>
                    <div class="text-gray-500 font-medium text-sm mb-8 uppercase tracking-wider">Minimum fee</div>
                    <p class="text-gray-400 mb-8 flex-grow text-sm leading-relaxed">Complex investigations involving internal threats, data breaches, or cyber fraud within organizations.</p>
                    
                    <a href="{{ route('contact') }}" class="w-full mt-auto block text-center py-4 rounded-xl border border-white/20 text-white hover:bg-white/5 transition-all font-bold tracking-wide" wire:navigate>Contact Us</a>
                </div>
            </div>
            
            <div class="mt-16 p-6 rounded-2xl glass-panel border border-white/5 text-center flex flex-col md:flex-row items-center justify-center gap-4">
                <x-lucide-shield-alert class="w-6 h-6 text-gray-500" />
                <span class="text-gray-400 text-sm font-medium">All investigation retainers and inquiries are strictly confidential. We accept payments via bank wire and major cryptocurrencies.</span>
            </div>
        </div>
    </section>
</div>