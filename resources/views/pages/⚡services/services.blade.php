<div>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 bg-qavixx-base overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5 z-0"></div>
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-brand opacity-10 blur-[150px] z-0 transform translate-x-1/4 -translate-y-1/4"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white mb-6">
                Our Investigative <span class="text-transparent bg-clip-text bg-gradient-brand">Services</span>
            </h1>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed">
                {{ config('app.name') }} provides elite digital forensics and intelligence gathering for complex cybercrimes, empowering legal teams, law enforcement, and victims to unmask perpetrators and recover assets.
            </p>
        </div>
    </section>

    <!-- Unified Bento Services Section -->
    <section class="py-24 bg-qavixx-surface border-t border-white/5 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 auto-rows-[250px]">
                
                <!-- Item 1: Scam Investigations (2x2) -->
                <a href="{{ route('services.scams') }}" class="group relative md:col-span-2 md:row-span-2 rounded-3xl overflow-hidden border border-qavixx-copper/30 hover:border-qavixx-copper/60 transition-all duration-500 shadow-[0_0_30px_rgba(226,161,84,0.15)] bg-qavixx-base flex flex-col justify-end p-8" wire:navigate>
                    <div class="absolute inset-0 bg-[url('/images/bg-scam.png')] bg-cover bg-center opacity-40 group-hover:opacity-60 transition-opacity duration-700 group-hover:scale-105"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-[#0a0a0a]/80 to-transparent"></div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 rounded-xl bg-qavixx-copper flex items-center justify-center text-qavixx-surface mb-6 shadow-[0_0_15px_rgba(226,161,84,0.5)]">
                            <x-lucide-alert-triangle class="w-6 h-6" />
                        </div>
                        <h3 class="text-3xl font-heading font-bold text-white mb-3">Scam Investigations</h3>
                        <p class="text-gray-300 text-lg leading-relaxed max-w-md">Trace funds and identify operators behind investment fraud, pig butchering, fake exchanges, and complex online scams.</p>
                    </div>
                </a>

                <!-- Item 2: Identify Anonymous Users (1x1) -->
                <a href="{{ route('services.identify') }}" class="group relative rounded-3xl overflow-hidden border border-white/10 hover:border-white/30 transition-all duration-500 bg-gradient-to-br from-qavixx-base to-white/[0.02] p-6 flex flex-col" wire:navigate>
                    <div class="w-10 h-10 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-qavixx-copper mb-auto group-hover:bg-qavixx-copper/10 transition-colors">
                        <x-lucide-user-search class="w-5 h-5" />
                    </div>
                    <div class="mt-4">
                        <h3 class="text-xl font-heading font-bold text-white mb-2">Identify Anonymous</h3>
                        <p class="text-sm text-gray-400 line-clamp-3">Unmask cyberstalkers and perpetrators hiding behind fake profiles or VPNs using advanced OSINT.</p>
                    </div>
                </a>

                <!-- Item 3: Romance Scams (1x1) -->
                <a href="{{ route('services.romance') }}" class="group relative rounded-3xl overflow-hidden border border-white/10 hover:border-white/30 transition-all duration-500 bg-gradient-to-br from-qavixx-base to-white/[0.02] p-6 flex flex-col" wire:navigate>
                    <div class="w-10 h-10 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-qavixx-copper mb-auto group-hover:bg-qavixx-copper/10 transition-colors">
                        <x-lucide-heart-crack class="w-5 h-5" />
                    </div>
                    <div class="mt-4">
                        <h3 class="text-xl font-heading font-bold text-white mb-2">Romance Scams</h3>
                        <p class="text-sm text-gray-400 line-clamp-3">Verify identities and trace stolen funds across international borders for victims of catfishing.</p>
                    </div>
                </a>

                <!-- Item 4: Crypto & Divorce (2x1) -->
                <a href="{{ route('services.crypto') }}" class="group relative md:col-span-2 rounded-3xl overflow-hidden border border-white/10 hover:border-qavixx-copper/30 transition-all duration-500 bg-qavixx-base p-8 flex items-center gap-6" wire:navigate>
                    <div class="absolute inset-0 bg-[url('/images/bg-crypto.png')] bg-cover bg-center opacity-20 group-hover:opacity-40 transition-opacity duration-700 mix-blend-screen"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-[#0a0a0a] via-[#0a0a0a]/90 to-transparent"></div>
                    <div class="relative z-10 flex-1">
                        <div class="w-10 h-10 rounded-lg bg-qavixx-copper/20 border border-qavixx-copper/30 flex items-center justify-center text-qavixx-copper mb-4">
                            <x-lucide-bitcoin class="w-5 h-5" />
                        </div>
                        <h3 class="text-2xl font-heading font-bold text-white mb-2">Crypto & Divorce</h3>
                        <p class="text-sm text-gray-400 max-w-sm">Locate hidden digital assets, DeFi investments, and cryptocurrency wallets during high-net-worth divorce proceedings.</p>
                    </div>
                </a>

                <!-- Item 5: Corporate Intelligence (2x1) -->
                <a href="{{ route('services.corporate') }}" class="group relative md:col-span-2 rounded-3xl overflow-hidden border border-white/10 hover:border-qavixx-copper/30 transition-all duration-500 bg-qavixx-base p-8 flex items-center gap-6" wire:navigate>
                    <div class="absolute inset-0 bg-[url('/images/bg-corporate.png')] bg-cover bg-center opacity-20 group-hover:opacity-40 transition-opacity duration-700 mix-blend-screen"></div>
                    <div class="absolute inset-0 bg-gradient-to-l from-[#0a0a0a] via-[#0a0a0a]/90 to-transparent"></div>
                    <div class="relative z-10 flex-1 flex flex-col items-end text-right">
                        <div class="w-10 h-10 rounded-lg bg-qavixx-copper/20 border border-qavixx-copper/30 flex items-center justify-center text-qavixx-copper mb-4">
                            <x-lucide-briefcase class="w-5 h-5" />
                        </div>
                        <h3 class="text-2xl font-heading font-bold text-white mb-2">Corporate Intelligence</h3>
                        <p class="text-sm text-gray-400 max-w-sm">Deep due diligence, insider threat identification, intellectual property theft investigations, and executive risk assessments.</p>
                    </div>
                </a>

                <!-- Item 6: BEC Attacks (2x2) -->
                <a href="{{ route('services.bec') }}" class="group relative md:col-span-2 md:row-span-2 rounded-3xl overflow-hidden border border-white/10 hover:border-qavixx-copper/40 transition-all duration-500 bg-qavixx-base flex flex-col justify-end p-8" wire:navigate>
                    <div class="absolute inset-0 bg-[url('/images/bg-bec.png')] bg-cover bg-center opacity-30 group-hover:opacity-50 transition-opacity duration-700 group-hover:scale-105"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-[#0a0a0a]/70 to-transparent"></div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-white mb-6">
                            <x-lucide-mail-warning class="w-6 h-6" />
                        </div>
                        <h3 class="text-3xl font-heading font-bold text-white mb-3">BEC Attacks</h3>
                        <p class="text-gray-300 text-lg leading-relaxed max-w-md">Rapid incident response to freeze wired funds, identify the attack vector, and unmask the syndicate behind the compromise.</p>
                    </div>
                </a>

                <!-- Item 7: Social Media Investigations (1x1) -->
                <a href="{{ route('services.social') }}" class="group relative rounded-3xl overflow-hidden border border-white/10 hover:border-white/30 transition-all duration-500 bg-gradient-to-br from-qavixx-base to-white/[0.02] p-6 flex flex-col" wire:navigate>
                    <div class="w-10 h-10 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-qavixx-copper mb-auto group-hover:bg-qavixx-copper/10 transition-colors">
                        <x-lucide-share-2 class="w-5 h-5" />
                    </div>
                    <div class="mt-4">
                        <h3 class="text-xl font-heading font-bold text-white mb-2">Social Media</h3>
                        <p class="text-sm text-gray-400 line-clamp-3">Comprehensive intelligence gathering to support civil litigation and background checks.</p>
                    </div>
                </a>

                <!-- Item 8: Defamation & Harassment (1x1) -->
                <a href="{{ route('services.defamation') }}" class="group relative rounded-3xl overflow-hidden border border-white/10 hover:border-white/30 transition-all duration-500 bg-gradient-to-br from-qavixx-base to-white/[0.02] p-6 flex flex-col" wire:navigate>
                    <div class="w-10 h-10 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-qavixx-copper mb-auto group-hover:bg-qavixx-copper/10 transition-colors">
                        <x-lucide-message-square-x class="w-5 h-5" />
                    </div>
                    <div class="mt-4">
                        <h3 class="text-xl font-heading font-bold text-white mb-2">Defamation</h3>
                        <p class="text-sm text-gray-400 line-clamp-3">Identify perpetrators of online defamation, review bombing, and coordinated sabotage.</p>
                    </div>
                </a>

            </div>
            
        </div>
    </section>

    <!-- Methodology / Why Choose Us -->
    <section class="py-24 bg-qavixx-base relative border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-⚡section-heading 
                subtitle="The {{ config('app.name') }} Difference" 
                title="Our Methodology" 
                alignment="center"
            />
            
            <div class="relative grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
                <!-- Connecting Line (Desktop) -->
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-px bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-y-1/2 -z-10"></div>

                <div class="group relative glass-panel-interactive p-8 rounded-3xl text-center border border-white/5 hover:border-white/20 transition-all duration-500 bg-qavixx-surface">
                    <div class="w-20 h-20 rounded-full bg-qavixx-base border-2 border-white/10 flex items-center justify-center text-gray-500 group-hover:text-qavixx-copper group-hover:border-qavixx-copper/50 transition-all duration-500 mx-auto mb-8 shadow-[0_0_20px_rgba(0,0,0,0.5)]">
                        <span class="font-heading font-bold text-2xl">01</span>
                    </div>
                    <h3 class="text-xl font-heading font-semibold text-white mb-4 group-hover:text-qavixx-copper transition-colors">Intelligence Gathering</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">We deploy advanced OSINT, HUMINT, and proprietary scraping tools to build a comprehensive digital profile of the threat actor.</p>
                </div>
                
                <div class="group relative glass-panel-interactive p-8 rounded-3xl text-center border border-qavixx-copper/30 hover:border-qavixx-copper/60 transition-all duration-500 bg-qavixx-surface shadow-[0_0_30px_rgba(226,161,84,0.1)]">
                    <div class="absolute inset-0 bg-gradient-to-b from-qavixx-copper/5 to-transparent rounded-3xl pointer-events-none"></div>
                    <div class="relative z-10 w-20 h-20 rounded-full bg-qavixx-copper text-qavixx-base flex items-center justify-center mx-auto mb-8 shadow-[0_0_20px_rgba(226,161,84,0.4)] group-hover:scale-110 transition-transform duration-500">
                        <span class="font-heading font-bold text-2xl">02</span>
                    </div>
                    <h3 class="text-xl font-heading font-semibold text-white mb-4">Asset Tracing</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Our blockchain forensics team traces fiat and cryptocurrency across borders, exchanges, and tumblers to locate stolen funds.</p>
                </div>
                
                <div class="group relative glass-panel-interactive p-8 rounded-3xl text-center border border-white/5 hover:border-white/20 transition-all duration-500 bg-qavixx-surface">
                    <div class="w-20 h-20 rounded-full bg-qavixx-base border-2 border-white/10 flex items-center justify-center text-gray-500 group-hover:text-qavixx-copper group-hover:border-qavixx-copper/50 transition-all duration-500 mx-auto mb-8 shadow-[0_0_20px_rgba(0,0,0,0.5)]">
                        <span class="font-heading font-bold text-2xl">03</span>
                    </div>
                    <h3 class="text-xl font-heading font-semibold text-white mb-4 group-hover:text-qavixx-copper transition-colors">Actionable Reporting</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">We provide court-admissible affidavits and intelligence reports designed specifically for subpoenas and law enforcement action.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-24 bg-qavixx-base border-t border-white/5 relative overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="relative rounded-3xl overflow-hidden border border-white/10 p-12 md:p-16 text-center bg-qavixx-surface shadow-2xl">
                <!-- Subtle copper top glow instead of murky blur -->
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-1/2 h-px bg-gradient-to-r from-transparent via-qavixx-copper/50 to-transparent"></div>
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-1/3 h-[2px] bg-gradient-to-r from-transparent via-qavixx-copper to-transparent blur-sm"></div>
                
                <div class="relative z-10">
                    <div class="w-20 h-20 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-qavixx-copper mx-auto mb-8 shadow-[0_0_15px_rgba(226,161,84,0.15)]">
                        <x-lucide-shield-check class="w-10 h-10" />
                    </div>
                    <h2 class="text-3xl md:text-5xl font-heading font-bold text-white mb-6 tracking-tight">Need an investigation not listed here?</h2>
                    <p class="text-lg md:text-xl text-gray-400 mb-10 max-w-2xl mx-auto">We handle bespoke intelligence and highly sensitive forensic requests for complex international cases.</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 bg-gradient-brand hover:bg-gradient-brand-hover text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-[0_0_30px_rgba(212,148,58,0.3)] hover:shadow-[0_0_50px_rgba(212,148,58,0.5)] hover:-translate-y-1" wire:navigate>
                        Consult an Investigator
                        <x-lucide-arrow-right class="w-5 h-5" />
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>