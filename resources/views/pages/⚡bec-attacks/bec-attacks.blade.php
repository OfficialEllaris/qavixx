<div>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-32 bg-qavixx-base overflow-hidden">
        <!-- Grid pattern -->
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5 z-0"></div>
        
        <!-- Brand Glow -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-gradient-brand opacity-5 blur-[150px] z-0"></div>
        <div class="absolute top-1/4 right-0 w-1/3 h-1/2 bg-gradient-brand opacity-10 blur-[150px] z-0 transform translate-x-1/2"></div>
        
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-qavixx-copper/30 bg-qavixx-copper/10 text-qavixx-copper font-bold tracking-widest text-xs uppercase mb-8">
                <x-lucide-alert-triangle class="w-4 h-4" /> Priority 1 Emergency Response
            </div>
            
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-heading font-black text-white mb-6 tracking-tight uppercase leading-none">
                Business Email <br/>
                <span class="text-transparent bg-clip-text bg-gradient-brand">Compromise</span>
            </h1>
            
            <p class="text-xl md:text-2xl text-gray-300 leading-relaxed max-w-3xl mx-auto mb-16">
                The Financial Fraud Kill Chain starts here. Rapid incident response to freeze wired funds, identify the attack vector, and unmask the syndicate.
            </p>

            <!-- Floating Urgency Banner -->
            <div class="max-w-4xl mx-auto relative group">
                <div class="absolute -inset-1 bg-gradient-brand rounded-2xl blur opacity-20 group-hover:opacity-40 transition duration-1000 group-hover:duration-200"></div>
                <div class="relative glass-panel bg-black/50 p-6 md:p-8 rounded-2xl border border-qavixx-copper/20 text-left flex flex-col md:flex-row items-center gap-6">
                    <div class="w-16 h-16 rounded-full bg-qavixx-copper/10 border border-qavixx-copper/20 flex items-center justify-center shrink-0">
                        <x-lucide-clock class="w-8 h-8 text-qavixx-copper" />
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-white mb-2">The Critical 72-Hour Window</h3>
                        <p class="text-gray-400 text-sm md:text-base leading-relaxed">
                            If you have wired funds to a fraudulent account within the last 72 hours, <strong class="text-qavixx-copper">contact us immediately.</strong> The probability of full asset recovery drops significantly with every passing hour.
                        </p>
                    </div>
                    <div class="md:ml-auto shrink-0 w-full md:w-auto mt-4 md:mt-0">
                        <a href="{{ route('contact') }}" class="block w-full text-center px-6 py-3 bg-gradient-brand hover:bg-gradient-brand-hover text-white font-bold rounded-lg transition-colors whitespace-nowrap" wire:navigate>
                            Report Incident
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Metrics Grid -->
    <section class="py-24 bg-black border-y border-white/5 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Metric 1 -->
                <div class="p-8 border-l-2 border-qavixx-copper/30 hover:border-qavixx-copper transition-colors duration-300">
                    <div class="text-5xl font-heading font-black text-white mb-2">$50B+</div>
                    <div class="text-sm font-bold text-qavixx-copper uppercase tracking-widest mb-4">Global Losses</div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Business Email Compromise remains the single most financially damaging cybercrime reported worldwide.
                    </p>
                </div>
                <!-- Metric 2 -->
                <div class="p-8 border-l-2 border-qavixx-copper/30 hover:border-qavixx-copper transition-colors duration-300">
                    <div class="text-5xl font-heading font-black text-white mb-2">Multi</div>
                    <div class="text-sm font-bold text-qavixx-copper uppercase tracking-widest mb-4">Jurisdictional</div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Funds are rapidly laundered across borders. We leverage global relationships with financial institutions to intercept them.
                    </p>
                </div>
                <!-- Metric 3 -->
                <div class="p-8 border-l-2 border-qavixx-copper/30 hover:border-qavixx-copper transition-colors duration-300">
                    <div class="text-5xl font-heading font-black text-white mb-2">24/7</div>
                    <div class="text-sm font-bold text-qavixx-copper uppercase tracking-widest mb-4">Response Team</div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Our intelligence analysts and cyber investigators are on standby to initiate the kill chain immediately.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- The Anatomy of a BEC Attack (NEW CONTENT) -->
    <section class="py-24 bg-qavixx-surface border-b border-white/5 relative">
        <div class="absolute inset-0 bg-gradient-to-br from-qavixx-copper/5 to-transparent opacity-20"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <x-⚡section-heading 
                subtitle="Understanding the Threat" 
                title="The Anatomy of an Attack" 
                alignment="center"
            />
            
            <div class="mt-16 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <p class="text-lg text-gray-300 leading-relaxed">
                        BEC syndicates do not rely solely on malware; they rely on psychological manipulation, intelligence gathering, and impeccable timing. Once an inbox is compromised, attackers will monitor communications for weeks or months in stealth.
                    </p>
                    <p class="text-lg text-gray-300 leading-relaxed">
                        They wait for high-value transactions—such as real estate closings, vendor payments, or payroll cycles—and intervene at the precise moment by injecting fraudulent wire instructions into an active email thread.
                    </p>
                    
                    <div class="space-y-6 pt-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-full bg-qavixx-copper/10 flex items-center justify-center shrink-0 border border-qavixx-copper/20">
                                <x-lucide-user-cog class="w-6 h-6 text-qavixx-copper" />
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-white mb-1">CEO / Executive Fraud</h4>
                                <p class="text-gray-400">Attackers spoof or compromise the email account of a C-level executive and direct a subordinate in the finance department to urgently wire funds.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-full bg-qavixx-copper/10 flex items-center justify-center shrink-0 border border-qavixx-copper/20">
                                <x-lucide-briefcase class="w-6 h-6 text-qavixx-copper" />
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-white mb-1">Vendor Impersonation</h4>
                                <p class="text-gray-400">The syndicate compromises a legitimate vendor's email system, monitors billing cycles, and sends modified invoices with their own bank details to the victim company.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-brand opacity-10 blur-3xl rounded-full"></div>
                    <div class="glass-panel p-8 rounded-3xl border border-white/10 relative">
                        <h4 class="text-lg font-bold text-white mb-6 border-b border-white/10 pb-4">Common Compromise Vectors</h4>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3 text-gray-300">
                                <x-lucide-check-circle-2 class="w-5 h-5 text-qavixx-copper" /> Targeted Spear-Phishing
                            </li>
                            <li class="flex items-center gap-3 text-gray-300">
                                <x-lucide-check-circle-2 class="w-5 h-5 text-qavixx-copper" /> Credential Stuffing & Dark Web Leaks
                            </li>
                            <li class="flex items-center gap-3 text-gray-300">
                                <x-lucide-check-circle-2 class="w-5 h-5 text-qavixx-copper" /> Exploitation of legacy MFA protocols
                            </li>
                            <li class="flex items-center gap-3 text-gray-300">
                                <x-lucide-check-circle-2 class="w-5 h-5 text-qavixx-copper" /> Compromised third-party managed services
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Financial Fraud Kill Chain (Process Flow) -->
    <section class="py-16 md:py-20 bg-qavixx-base relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-qavixx-copper/5 via-black to-black opacity-50 pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <x-⚡section-heading 
                subtitle="The Methodology" 
                title="Financial Fraud Kill Chain" 
                alignment="center"
            />
            
            <div class="mt-12 max-w-4xl mx-auto">
                <div class="space-y-12 relative">
                    <!-- Vertical Line connecting nodes -->
                    <div class="absolute left-7 md:left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-qavixx-copper/50 via-qavixx-copper/20 to-transparent md:-translate-x-1/2"></div>
                    
                    <!-- Phase 1 -->
                    <div class="relative flex flex-col md:flex-row items-start md:justify-between group">
                        <div class="hidden md:block w-[45%] text-right pr-12 pt-2">
                            <h4 class="text-2xl font-bold text-white mb-2">Asset Freezing</h4>
                            <p class="text-gray-400">Liaising with international banks, compliance departments, and law enforcement to freeze fraudulent recipient accounts globally.</p>
                        </div>
                        <div class="absolute left-0 md:left-1/2 md:-translate-x-1/2 w-14 h-14 rounded-full bg-black border-2 border-qavixx-copper/50 flex items-center justify-center z-10 group-hover:border-qavixx-copper transition-colors duration-500 group-hover:shadow-[0_0_30px_rgba(226,161,84,0.3)]">
                            <span class="text-qavixx-copper font-black">01</span>
                        </div>
                        <div class="w-full md:w-[45%] pl-20 md:pl-12 pt-2 md:hidden">
                            <h4 class="text-2xl font-bold text-white mb-2">Asset Freezing</h4>
                            <p class="text-gray-400">Liaising with international banks, compliance departments, and law enforcement to freeze fraudulent recipient accounts globally.</p>
                        </div>
                        <div class="hidden md:block w-[45%]"></div>
                    </div>
                    
                    <!-- Phase 2 -->
                    <div class="relative flex flex-col md:flex-row items-start md:justify-between group">
                        <div class="hidden md:block w-[45%]"></div>
                        <div class="absolute left-0 md:left-1/2 md:-translate-x-1/2 w-14 h-14 rounded-full bg-black border-2 border-qavixx-copper/50 flex items-center justify-center z-10 group-hover:border-qavixx-copper transition-colors duration-500 group-hover:shadow-[0_0_30px_rgba(226,161,84,0.3)]">
                            <span class="text-qavixx-copper font-black">02</span>
                        </div>
                        <div class="w-full md:w-[45%] pl-20 md:pl-12 pt-2">
                            <h4 class="text-2xl font-bold text-white mb-2">Vector Analysis</h4>
                            <p class="text-gray-400">Analyzing email headers, forwarding rules, and access logs to determine how the compromise occurred and if the attacker still has access to your systems.</p>
                        </div>
                    </div>

                    <!-- Phase 3 -->
                    <div class="relative flex flex-col md:flex-row items-start md:justify-between group">
                        <div class="hidden md:block w-[45%] text-right pr-12 pt-2">
                            <h4 class="text-2xl font-bold text-white mb-2">Attacker Identification</h4>
                            <p class="text-gray-400">Tracing IP addresses and money mule networks to identify the operators behind the attack, building a comprehensive evidence packet for prosecution.</p>
                        </div>
                        <div class="absolute left-0 md:left-1/2 md:-translate-x-1/2 w-14 h-14 rounded-full bg-black border-2 border-qavixx-copper/50 flex items-center justify-center z-10 group-hover:border-qavixx-copper transition-colors duration-500 group-hover:shadow-[0_0_30px_rgba(226,161,84,0.3)]">
                            <span class="text-qavixx-copper font-black">03</span>
                        </div>
                        <div class="w-full md:w-[45%] pl-20 md:pl-12 pt-2 md:hidden">
                            <h4 class="text-2xl font-bold text-white mb-2">Attacker Identification</h4>
                            <p class="text-gray-400">Tracing IP addresses and money mule networks to identify the operators behind the attack, building a comprehensive evidence packet for prosecution.</p>
                        </div>
                        <div class="hidden md:block w-[45%]"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section (Cyber Intelligence Layout) -->
    <section class="relative py-16 md:py-24 bg-qavixx-base border-t border-white/5 overflow-hidden flex flex-col justify-center">
        <!-- Ambient Grid -->
        <div class="absolute inset-0 z-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:32px_32px]"></div>

        <!-- Concentric Radar Rings -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] z-0 pointer-events-none opacity-40">
            <div class="absolute inset-0 rounded-full border border-qavixx-copper/20"></div>
            <div class="absolute inset-[100px] rounded-full border border-qavixx-copper/20 border-dashed animate-[spin_120s_linear_infinite]"></div>
            <div class="absolute inset-[200px] rounded-full border border-qavixx-copper/10"></div>
            <div class="absolute inset-[300px] rounded-full border border-qavixx-copper/30 border-dashed animate-[spin_60s_linear_infinite_reverse]"></div>
        </div>

        <!-- Glow Orb -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-qavixx-copper/5 rounded-full blur-[100px] pointer-events-none z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="text-center mb-16 z-30 relative">
                <x-⚡section-heading 
                    subtitle="Common Questions" 
                    title="BEC Incident FAQs" 
                    alignment="center"
                />
            </div>
            
            <!-- Desktop & Mobile Layout: Centered Glass Cards -->
            <div class="relative w-full max-w-4xl mx-auto flex flex-col gap-4 z-20">
                
                <!-- FAQ 1 -->
                <div class="relative z-20 rounded-2xl p-6 border border-white/5 shadow-2xl backdrop-blur-xl bg-[#0f0f0f]/80 w-full hover:border-qavixx-copper/30 transition-colors pointer-events-auto" x-data="{ active: false }">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-qavixx-copper/10 border border-qavixx-copper/30 flex items-center justify-center text-qavixx-copper shrink-0 mt-0.5 shadow-[0_0_15px_rgba(226,161,84,0.15)]">
                            <span class="font-bold">01</span>
                        </div>
                        <div class="flex-1">
                            <button @click="active = !active" class="w-full text-left focus:outline-none">
                                <span class="font-bold text-white text-lg pr-8 block relative">
                                    What happens if we wired the funds over 72 hours ago?
                                    <x-lucide-chevron-down class="w-5 h-5 text-qavixx-copper absolute right-0 top-1/2 -translate-y-1/2 transition-transform duration-300" x-bind:class="active ? 'rotate-180' : ''" />
                                </span>
                            </button>
                            <div x-show="active" x-cloak>
                                <div class="pt-4 text-gray-400 text-sm leading-relaxed border-t border-white/5 mt-4">
                                    While the 72-hour window provides the highest probability of freezing funds in transit, recovery is still possible after this window. Syndicates move funds through secondary mule accounts, which can still be intercepted. However, the complexity increases significantly.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="relative z-20 rounded-2xl p-6 border border-white/5 shadow-2xl backdrop-blur-xl bg-[#0f0f0f]/80 w-full hover:border-qavixx-copper/30 transition-colors pointer-events-auto" x-data="{ active: false }">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-qavixx-copper/10 border border-qavixx-copper/30 flex items-center justify-center text-qavixx-copper shrink-0 mt-0.5 shadow-[0_0_15px_rgba(226,161,84,0.15)]">
                            <span class="font-bold">02</span>
                        </div>
                        <div class="flex-1">
                            <button @click="active = !active" class="w-full text-left focus:outline-none">
                                <span class="font-bold text-white text-lg pr-8 block relative">
                                    Our IT department locked the compromised account. Are we safe?
                                    <x-lucide-chevron-down class="w-5 h-5 text-qavixx-copper absolute right-0 top-1/2 -translate-y-1/2 transition-transform duration-300" x-bind:class="active ? 'rotate-180' : ''" />
                                </span>
                            </button>
                            <div x-show="active" x-cloak>
                                <div class="pt-4 text-gray-400 text-sm leading-relaxed border-t border-white/5 mt-4">
                                    Resetting passwords and enabling MFA is a critical first step, but it is rarely enough. Attackers often establish persistence via malicious forwarding rules, OAuth application consents, or hidden API access that survive a password reset. A full vector analysis is required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="relative z-20 rounded-2xl p-6 border border-white/5 shadow-2xl backdrop-blur-xl bg-[#0f0f0f]/80 w-full hover:border-qavixx-copper/30 transition-colors pointer-events-auto" x-data="{ active: false }">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-qavixx-copper/10 border border-qavixx-copper/30 flex items-center justify-center text-qavixx-copper shrink-0 mt-0.5 shadow-[0_0_15px_rgba(226,161,84,0.15)]">
                            <span class="font-bold">03</span>
                        </div>
                        <div class="flex-1">
                            <button @click="active = !active" class="w-full text-left focus:outline-none">
                                <span class="font-bold text-white text-lg pr-8 block relative">
                                    Can you identify the individuals who stole the money?
                                    <x-lucide-chevron-down class="w-5 h-5 text-qavixx-copper absolute right-0 top-1/2 -translate-y-1/2 transition-transform duration-300" x-bind:class="active ? 'rotate-180' : ''" />
                                </span>
                            </button>
                            <div x-show="active" x-cloak>
                                <div class="pt-4 text-gray-400 text-sm leading-relaxed border-t border-white/5 mt-4">
                                    Yes. By tracing the digital footprint left during the reconnaissance and execution phases of the attack, combined with tracking the movement of stolen funds through mule accounts, we can often identify critical leads and provide actionable intelligence packets to law enforcement.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-qavixx-base border-t border-white/5 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-brand opacity-5 z-0"></div>
        <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-black to-transparent z-0"></div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h2 class="text-4xl md:text-5xl font-heading font-black text-white mb-6">Every Minute Counts</h2>
            <p class="text-xl text-gray-400 mb-12 max-w-2xl mx-auto">
                {{ config('app.name') }} investigators have successfully frozen and recovered tens of millions of dollars stolen via BEC attacks globally. Do not wait for internal approvals if funds have been wired.
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
                <a href="{{ route('contact') }}" class="relative group w-full sm:w-auto" wire:navigate>
                    <div class="absolute -inset-1 bg-gradient-brand rounded-full blur opacity-60 group-hover:opacity-100 animate-pulse transition duration-500"></div>
                    <span class="relative flex items-center justify-center px-10 py-5 rounded-full bg-black border border-qavixx-copper/50 text-white font-bold text-lg tracking-wide uppercase group-hover:bg-qavixx-copper/10 transition-colors">
                        <x-lucide-alert-triangle class="w-6 h-6 mr-3 text-qavixx-copper" /> Initiate Emergency Response
                    </span>
                </a>
            </div>
        </div>
    </section>
</div>