<div>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 bg-qavixx-base overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5 z-0"></div>
        <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-brand opacity-10 blur-[150px] z-0 transform translate-x-1/2"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-panel mb-8 border-qavixx-copper/30 text-qavixx-copper font-medium text-sm">
                        Private Investigations
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white mb-6">
                        Defamation & <span class="text-transparent bg-clip-text bg-gradient-brand">Harassment</span>
                    </h1>
                    <p class="text-xl text-gray-400 leading-relaxed mb-8">
                        Identify perpetrators of online defamation, review bombing, revenge porn, and coordinated corporate sabotage campaigns.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-gradient-brand hover:bg-gradient-brand-hover text-white px-8 py-4 rounded-full font-medium transition-all shadow-[0_0_20px_rgba(212,148,58,0.2)] hover:shadow-[0_0_30px_rgba(212,148,58,0.4)]" wire:navigate>
                        Contact an Investigator
                        <x-lucide-arrow-right class="w-5 h-5" />
                    </a>
                </div>
                <div class="hidden lg:block relative">
                    <!-- Dashboard Graphic / Shield styling -->
                    <div class="relative w-full aspect-[4/3] max-w-lg ml-auto bg-qavixx-surface rounded-3xl border border-white/10 shadow-2xl p-8 flex flex-col items-center justify-center gap-6 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-qavixx-copper/5 opacity-50 z-0"></div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-qavixx-copper/10 blur-[60px] rounded-full z-0"></div>
                        
                        <div class="relative z-10 w-24 h-24 rounded-full bg-white/5 border border-qavixx-copper/30 flex items-center justify-center text-qavixx-copper shadow-[0_0_30px_rgba(226,161,84,0.2)]">
                            <x-lucide-shield-alert class="w-12 h-12" />
                        </div>
                        
                        <div class="relative z-10 text-center">
                            <h3 class="text-xl font-heading font-bold text-white mb-2 tracking-wide">Reputation Shield Active</h3>
                            <p class="text-gray-400 text-sm max-w-xs mx-auto">Monitoring digital footprints, intercepting defamatory nodes, and tracing hostile IPs.</p>
                        </div>
                        
                        <div class="relative z-10 w-full mt-4 flex flex-col gap-3">
                            <div class="flex items-center justify-between text-xs font-mono text-gray-500">
                                <span>Tracing Source IP...</span>
                                <span class="text-qavixx-copper">LOCATED</span>
                            </div>
                            <div class="flex items-center justify-between text-xs font-mono text-gray-500">
                                <span>Analyzing Metadata...</span>
                                <span class="text-qavixx-copper">MATCH FOUND</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-24 bg-qavixx-surface border-t border-white/5 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
                
                <div class="lg:col-span-7 space-y-12">
                    <div class="prose prose-invert prose-lg max-w-none">
                        <h2 class="text-3xl font-heading font-bold text-white mb-6 flex items-center gap-4">
                            <span class="w-8 h-px bg-qavixx-copper"></span>
                            Restoring Your Reputation
                        </h2>
                        <p class="text-gray-300 leading-relaxed">
                            Online defamation can destroy businesses and personal reputations overnight. Perpetrators often hide behind the anonymity of fake review platforms, anonymous blogs, or social media throwaway accounts, making them difficult to hold accountable.
                        </p>
                        <p class="text-gray-300 leading-relaxed">
                            {{ config('app.name') }} provides rapid-response investigation services to unmask the individuals behind these attacks, enabling legal teams to secure injunctions and seek damages.
                        </p>
                    </div>
                    
                    <div class="pt-8">
                        <h2 class="text-3xl font-heading font-bold text-white mb-10 flex items-center gap-4">
                            <span class="w-8 h-px bg-qavixx-copper"></span>
                            Our Tactics
                        </h2>
                        
                        <div class="space-y-8 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-white/10 before:to-transparent">
                            
                            <!-- Step 1 -->
                            <div class="relative flex items-start gap-8">
                                <div class="relative z-10 w-10 h-10 rounded-full bg-qavixx-surface border-2 border-qavixx-copper flex items-center justify-center shadow-[0_0_15px_rgba(226,161,84,0.3)] shrink-0 mt-1">
                                    <span class="w-2.5 h-2.5 rounded-full bg-qavixx-copper"></span>
                                </div>
                                <div class="glass-panel p-6 rounded-2xl border-white/5 hover:border-qavixx-copper/30 transition-colors w-full group">
                                    <div class="flex items-center gap-3 mb-3 text-qavixx-copper group-hover:text-white transition-colors">
                                        <x-lucide-globe class="w-5 h-5" />
                                        <h3 class="text-xl font-heading font-bold text-white">Platform Exploitation Analysis</h3>
                                    </div>
                                    <p class="text-gray-400">Analyzing the technical footprint of review bombers and defamatory bloggers.</p>
                                </div>
                            </div>
                            
                            <!-- Step 2 -->
                            <div class="relative flex items-start gap-8">
                                <div class="relative z-10 w-10 h-10 rounded-full bg-qavixx-surface border-2 border-qavixx-copper flex items-center justify-center shadow-[0_0_15px_rgba(226,161,84,0.3)] shrink-0 mt-1">
                                    <span class="w-2.5 h-2.5 rounded-full bg-qavixx-copper"></span>
                                </div>
                                <div class="glass-panel p-6 rounded-2xl border-white/5 hover:border-qavixx-copper/30 transition-colors w-full group">
                                    <div class="flex items-center gap-3 mb-3 text-qavixx-copper group-hover:text-white transition-colors">
                                        <x-lucide-fingerprint class="w-5 h-5" />
                                        <h3 class="text-xl font-heading font-bold text-white">Behavioral Profiling</h3>
                                    </div>
                                    <p class="text-gray-400">Using stylometry and forensic linguistics to match anonymous posts to known suspects.</p>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="relative flex items-start gap-8">
                                <div class="relative z-10 w-10 h-10 rounded-full bg-qavixx-surface border-2 border-qavixx-copper flex items-center justify-center shadow-[0_0_15px_rgba(226,161,84,0.3)] shrink-0 mt-1">
                                    <span class="w-2.5 h-2.5 rounded-full bg-qavixx-copper"></span>
                                </div>
                                <div class="glass-panel p-6 rounded-2xl border-white/5 hover:border-qavixx-copper/30 transition-colors w-full group">
                                    <div class="flex items-center gap-3 mb-3 text-qavixx-copper group-hover:text-white transition-colors">
                                        <x-lucide-scale class="w-5 h-5" />
                                        <h3 class="text-xl font-heading font-bold text-white">Litigation Support</h3>
                                    </div>
                                    <p class="text-gray-400">Drafting technical affidavits to compel ISPs and platforms to release identifying information.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="lg:col-span-5 relative">
                    <div class="glass-panel-interactive p-8 rounded-3xl sticky top-28 border-qavixx-copper/20 shadow-2xl relative overflow-hidden bg-qavixx-surface">
                        <!-- Stronger CTA accent for Defamation urgency -->
                        <div class="absolute top-0 left-0 w-full h-1 bg-red-500 shadow-[0_0_20px_rgba(239,68,68,0.8)]"></div>
                        <h3 class="text-2xl font-heading font-bold text-white mb-6">Protect Your Digital Identity</h3>
                        <div class="space-y-4 text-gray-300 mb-8 text-sm leading-relaxed">
                            <p>We handle sensitive cases involving extortion, revenge porn, and corporate sabotage with absolute discretion.</p>
                            <p>Once the perpetrator is identified, our evidence packages are designed to immediately support Cease & Desist orders, DMCA takedowns, and civil litigation.</p>
                        </div>
                        
                        <div class="mt-8 pt-8 border-t border-white/10 text-center">
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center w-full bg-red-600/10 hover:bg-red-600 text-white border border-red-500/50 hover:border-transparent px-6 py-4 rounded-xl font-bold text-base transition-all duration-300 group" wire:navigate>
                                Get Urgent Assistance
                                <x-lucide-arrow-right class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>