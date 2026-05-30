<div>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 bg-qavixx-base overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5 z-0"></div>
        <div class="absolute inset-0 bg-[url('/images/art-social.png')] bg-cover bg-center opacity-10 mix-blend-screen z-0 mask-image:linear-gradient(to_bottom,rgba(0,0,0,1),rgba(0,0,0,0))"></div>
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-brand opacity-10 blur-[150px] z-0 transform translate-x-1/4"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-panel mb-8 border-qavixx-copper/30 text-qavixx-copper font-medium text-sm">
                        Private Investigations
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white mb-6">
                        Social Media <span class="text-transparent bg-clip-text bg-gradient-brand">Investigations</span>
                    </h1>
                    <p class="text-xl text-gray-400 leading-relaxed mb-8">
                        Comprehensive intelligence gathering across social platforms to support civil litigation, criminal cases, and background checks.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-gradient-brand hover:bg-gradient-brand-hover text-white px-8 py-4 rounded-full font-medium transition-all shadow-[0_0_20px_rgba(212,148,58,0.2)] hover:shadow-[0_0_30px_rgba(212,148,58,0.4)]" wire:navigate>
                        Discuss Your Requirements
                        <x-lucide-arrow-right class="w-5 h-5" />
                    </a>
                </div>
                <div class="hidden lg:block relative">
                    <div class="relative w-full aspect-square max-w-md ml-auto">
                        <div class="absolute inset-0 bg-gradient-brand opacity-20 blur-[100px] rounded-full"></div>
                        <img src="/images/art-social.png" alt="Social Media Intelligence OSINT" class="relative z-10 w-full h-full object-cover rounded-3xl border border-white/10 shadow-2xl mix-blend-lighten opacity-80" />
                        <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-3xl pointer-events-none z-20"></div>
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
                            The Digital Witness
                        </h2>
                        <p class="text-gray-300 leading-relaxed">
                            In modern litigation, social media data is often the most critical evidence. However, identifying, preserving, and authenticating this evidence requires specialized tools and expertise to ensure it holds up in court.
                        </p>
                        <p class="text-gray-300 leading-relaxed">
                            {{ config('app.name') }} provides deep-dive SOCMINT (Social Media Intelligence) services. We uncover deleted content, map network associations, and establish timelines that prove or disprove claims.
                        </p>
                    </div>
                    
                    <div class="pt-8">
                        <h2 class="text-3xl font-heading font-bold text-white mb-10 flex items-center gap-4">
                            <span class="w-8 h-px bg-qavixx-copper"></span>
                            Our Capabilities
                        </h2>
                        
                        <div class="space-y-8 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-white/10 before:to-transparent">
                            
                            <!-- Step 1 -->
                            <div class="relative flex items-start gap-8">
                                <div class="relative z-10 w-10 h-10 rounded-full bg-qavixx-surface border-2 border-qavixx-copper flex items-center justify-center shadow-[0_0_15px_rgba(226,161,84,0.3)] shrink-0 mt-1">
                                    <span class="w-2.5 h-2.5 rounded-full bg-qavixx-copper"></span>
                                </div>
                                <div class="glass-panel p-6 rounded-2xl border-white/5 hover:border-qavixx-copper/30 transition-colors w-full group">
                                    <div class="flex items-center gap-3 mb-3 text-qavixx-copper group-hover:text-white transition-colors">
                                        <x-lucide-database class="w-5 h-5" />
                                        <h3 class="text-xl font-heading font-bold text-white">Forensic Preservation</h3>
                                    </div>
                                    <p class="text-gray-400">Capturing social media content with full metadata hashing to establish chain of custody for legal proceedings.</p>
                                </div>
                            </div>
                            
                            <!-- Step 2 -->
                            <div class="relative flex items-start gap-8">
                                <div class="relative z-10 w-10 h-10 rounded-full bg-qavixx-surface border-2 border-qavixx-copper flex items-center justify-center shadow-[0_0_15px_rgba(226,161,84,0.3)] shrink-0 mt-1">
                                    <span class="w-2.5 h-2.5 rounded-full bg-qavixx-copper"></span>
                                </div>
                                <div class="glass-panel p-6 rounded-2xl border-white/5 hover:border-qavixx-copper/30 transition-colors w-full group">
                                    <div class="flex items-center gap-3 mb-3 text-qavixx-copper group-hover:text-white transition-colors">
                                        <x-lucide-users class="w-5 h-5" />
                                        <h3 class="text-xl font-heading font-bold text-white">Network Mapping</h3>
                                    </div>
                                    <p class="text-gray-400">Identifying associations between individuals, shell companies, and fraudulent profiles across multiple platforms.</p>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="relative flex items-start gap-8">
                                <div class="relative z-10 w-10 h-10 rounded-full bg-qavixx-surface border-2 border-qavixx-copper flex items-center justify-center shadow-[0_0_15px_rgba(226,161,84,0.3)] shrink-0 mt-1">
                                    <span class="w-2.5 h-2.5 rounded-full bg-qavixx-copper"></span>
                                </div>
                                <div class="glass-panel p-6 rounded-2xl border-white/5 hover:border-qavixx-copper/30 transition-colors w-full group">
                                    <div class="flex items-center gap-3 mb-3 text-qavixx-copper group-hover:text-white transition-colors">
                                        <x-lucide-archive class="w-5 h-5" />
                                        <h3 class="text-xl font-heading font-bold text-white">Historical Analysis</h3>
                                    </div>
                                    <p class="text-gray-400">Recovering archived or deleted data from the deep web and historical caches.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="lg:col-span-5 relative">
                    <div class="glass-panel-interactive p-8 rounded-3xl sticky top-28 border-qavixx-copper/20 shadow-2xl relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-brand"></div>
                        <h3 class="text-2xl font-heading font-bold text-white mb-6">Common Use Cases</h3>
                        <div class="space-y-4 text-gray-300 mb-8 text-sm leading-relaxed">
                            <p><strong class="text-white">Personal Injury:</strong> Verifying plaintiff claims regarding physical limitations and lifestyle.</p>
                            <p><strong class="text-white">Family Law:</strong> Uncovering hidden assets, lifestyle discrepancies, or character evidence.</p>
                            <p><strong class="text-white">Corporate Litigation:</strong> Identifying IP theft, non-compete violations, or insider trading associations.</p>
                        </div>
                        
                        <div class="mt-8 pt-8 border-t border-white/10 text-center">
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center w-full bg-white/5 hover:bg-qavixx-copper hover:text-qavixx-base border border-white/10 hover:border-transparent text-white px-6 py-4 rounded-xl font-bold text-base transition-all duration-300 group" wire:navigate>
                                Discuss Your Requirements
                                <x-lucide-arrow-right class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>