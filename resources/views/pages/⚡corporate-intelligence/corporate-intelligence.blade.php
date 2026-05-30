<div>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 bg-qavixx-base overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5 z-0"></div>
        <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-brand opacity-10 blur-[150px] z-0 transform translate-x-1/2"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-panel mb-8 border-qavixx-copper/30 text-qavixx-copper font-medium text-sm">
                        Corporate Investigations
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white mb-6">
                        Corporate <span class="text-transparent bg-clip-text bg-gradient-brand">Intelligence</span>
                    </h1>
                    <p class="text-xl text-gray-400 leading-relaxed mb-8">
                        Deep due diligence, insider threat identification, intellectual property theft investigations, and executive risk assessments.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-gradient-brand hover:bg-gradient-brand-hover text-white px-8 py-4 rounded-full font-medium transition-all shadow-[0_0_20px_rgba(212,148,58,0.2)] hover:shadow-[0_0_30px_rgba(212,148,58,0.4)]" wire:navigate>
                        Discuss Your Requirements
                        <x-lucide-arrow-right class="w-5 h-5" />
                    </a>
                </div>
                <div class="hidden lg:block relative">
                    <!-- Dashboard Graphic / Stats styling -->
                    <div class="relative w-full aspect-[4/3] max-w-lg ml-auto bg-qavixx-surface rounded-3xl border border-white/10 shadow-2xl p-6 flex flex-col gap-4 overflow-hidden">
                        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-20"></div>
                        <div class="absolute -top-24 -right-24 w-64 h-64 bg-qavixx-copper/20 blur-[80px] rounded-full z-0"></div>
                        
                        <div class="relative z-10 flex items-center justify-between border-b border-white/10 pb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-3 h-3 rounded-full bg-red-500 animate-pulse"></div>
                                <span class="text-sm font-heading font-bold text-white uppercase tracking-wider">Threat Radar Active</span>
                            </div>
                            <x-lucide-radar class="w-6 h-6 text-qavixx-copper" />
                        </div>
                        
                        <div class="relative z-10 grid grid-cols-2 gap-4 flex-1">
                            <div class="glass-panel rounded-xl border border-white/5 p-4 flex flex-col justify-center">
                                <span class="text-gray-400 text-xs uppercase tracking-wider mb-1">Risk Score</span>
                                <span class="text-3xl font-heading font-bold text-white">94<span class="text-qavixx-copper text-lg">.2%</span></span>
                            </div>
                            <div class="glass-panel rounded-xl border border-white/5 p-4 flex flex-col justify-center">
                                <span class="text-gray-400 text-xs uppercase tracking-wider mb-1">Anomalies Detected</span>
                                <span class="text-3xl font-heading font-bold text-white">12</span>
                            </div>
                            <div class="col-span-2 glass-panel rounded-xl border border-white/5 p-4 flex flex-col gap-2">
                                <span class="text-gray-400 text-xs uppercase tracking-wider">Data Exfiltration Nodes</span>
                                <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-brand w-[68%] rounded-full"></div>
                                </div>
                                <div class="h-2 w-full bg-white/5 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-brand w-[32%] rounded-full opacity-50"></div>
                                </div>
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
                            Information is Security
                        </h2>
                        <p class="text-gray-300 leading-relaxed">
                            In the modern business landscape, the greatest threats often come from within or from seemingly trusted partners. Whether you are entering a major M&A transaction, hiring a C-level executive, or suspecting corporate espionage, operating without complete intelligence is an unacceptable risk.
                        </p>
                        <p class="text-gray-300 leading-relaxed">
                            {{ config('app.name') }} provides discreet, comprehensive corporate intelligence services to protect your assets, IP, and brand reputation.
                        </p>
                    </div>
                    
                    <div class="pt-8">
                        <h2 class="text-3xl font-heading font-bold text-white mb-10 flex items-center gap-4">
                            <span class="w-8 h-px bg-qavixx-copper"></span>
                            Our Services
                        </h2>
                        
                        <div class="space-y-8 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-white/10 before:to-transparent">
                            
                            <!-- Step 1 -->
                            <div class="relative flex items-start gap-8">
                                <div class="relative z-10 w-10 h-10 rounded-full bg-qavixx-surface border-2 border-qavixx-copper flex items-center justify-center shadow-[0_0_15px_rgba(226,161,84,0.3)] shrink-0 mt-1">
                                    <span class="w-2.5 h-2.5 rounded-full bg-qavixx-copper"></span>
                                </div>
                                <div class="glass-panel p-6 rounded-2xl border-white/5 hover:border-qavixx-copper/30 transition-colors w-full group">
                                    <div class="flex items-center gap-3 mb-3 text-qavixx-copper group-hover:text-white transition-colors">
                                        <x-lucide-file-search class="w-5 h-5" />
                                        <h3 class="text-xl font-heading font-bold text-white">Enhanced Due Diligence</h3>
                                    </div>
                                    <p class="text-gray-400">Deep background investigations on prospective partners, acquisition targets, and key executives to identify undisclosed liabilities or conflicts of interest.</p>
                                </div>
                            </div>
                            
                            <!-- Step 2 -->
                            <div class="relative flex items-start gap-8">
                                <div class="relative z-10 w-10 h-10 rounded-full bg-qavixx-surface border-2 border-qavixx-copper flex items-center justify-center shadow-[0_0_15px_rgba(226,161,84,0.3)] shrink-0 mt-1">
                                    <span class="w-2.5 h-2.5 rounded-full bg-qavixx-copper"></span>
                                </div>
                                <div class="glass-panel p-6 rounded-2xl border-white/5 hover:border-qavixx-copper/30 transition-colors w-full group">
                                    <div class="flex items-center gap-3 mb-3 text-qavixx-copper group-hover:text-white transition-colors">
                                        <x-lucide-shield class="w-5 h-5" />
                                        <h3 class="text-xl font-heading font-bold text-white">Insider Threat Investigations</h3>
                                    </div>
                                    <p class="text-gray-400">Identifying employees engaged in corporate espionage, embezzlement, data exfiltration, or intellectual property theft.</p>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="relative flex items-start gap-8">
                                <div class="relative z-10 w-10 h-10 rounded-full bg-qavixx-surface border-2 border-qavixx-copper flex items-center justify-center shadow-[0_0_15px_rgba(226,161,84,0.3)] shrink-0 mt-1">
                                    <span class="w-2.5 h-2.5 rounded-full bg-qavixx-copper"></span>
                                </div>
                                <div class="glass-panel p-6 rounded-2xl border-white/5 hover:border-qavixx-copper/30 transition-colors w-full group">
                                    <div class="flex items-center gap-3 mb-3 text-qavixx-copper group-hover:text-white transition-colors">
                                        <x-lucide-radar class="w-5 h-5" />
                                        <h3 class="text-xl font-heading font-bold text-white">Brand & IP Protection</h3>
                                    </div>
                                    <p class="text-gray-400">Monitoring the dark web, competitor networks, and global markets to identify trademark infringement and counterfeit networks.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="lg:col-span-5 relative">
                    <div class="glass-panel-interactive p-8 rounded-3xl sticky top-28 border-qavixx-copper/20 shadow-2xl relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-brand"></div>
                        <h3 class="text-2xl font-heading font-bold text-white mb-6">Discreet Operations</h3>
                        <div class="space-y-4 text-gray-300 mb-8 text-sm leading-relaxed">
                            <p>Corporate intelligence gathering requires absolute discretion to protect our clients' strategic interests. All investigations are strictly confidential and conducted within legal boundaries to ensure evidence admissibility.</p>
                            <p>We work seamlessly with your internal security team and outside counsel to provide the intelligence needed to make critical business decisions.</p>
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