<div>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-24 bg-qavixx-base overflow-hidden border-b border-white/5">
        <!-- Ambient Grid -->
        <div class="absolute inset-0 z-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:32px_32px]"></div>
        
        <!-- Radar Map Hint -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full opacity-20 pointer-events-none z-0 flex items-center justify-center">
            <div class="w-[800px] h-[800px] rounded-full border-[0.5px] border-qavixx-copper/20"></div>
            <div class="absolute w-[600px] h-[600px] rounded-full border-[0.5px] border-qavixx-copper/30 border-dashed animate-[spin_120s_linear_infinite]"></div>
            <div class="absolute w-[400px] h-[400px] rounded-full border-[0.5px] border-qavixx-copper/40"></div>
        </div>

        <!-- Glow Orb -->
        <div class="absolute top-0 right-1/4 w-[600px] h-[600px] bg-qavixx-copper/5 rounded-full blur-[120px] pointer-events-none z-0"></div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-qavixx-copper/20 bg-qavixx-copper/5 mb-8 backdrop-blur-sm">
                <span class="w-2 h-2 rounded-full bg-qavixx-copper shadow-[0_0_8px_#e2a154] animate-pulse"></span>
                <span class="text-[10px] font-heading font-bold text-qavixx-copper tracking-[0.2em] uppercase">Global Operations Command</span>
            </div>
            
            <h1 class="text-4xl md:text-5xl lg:text-7xl font-heading font-bold text-white mb-6 tracking-tight">
                Declassified <br />
                <span class="text-transparent bg-clip-text bg-gradient-brand italic font-light">Intelligence</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-400 leading-relaxed max-w-2xl mx-auto font-light">
                Sanitized post-action reports detailing our asset recovery and threat actor de-anonymization operations. Client identifiers and specific exploitation tactics have been redacted to protect ongoing investigations.
            </p>
        </div>
    </section>

    <!-- Case Studies List (Vertical Dossiers) -->
    <section class="py-24 bg-qavixx-base relative">
        <!-- Vertical Timeline Line -->
        <div class="absolute left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-white/5 to-transparent hidden lg:block -translate-x-1/2"></div>
        
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="space-y-24">
                
                <!-- DOSSIER 01: BEC Attack -->
                <div class="relative bg-[#0a0a0a] border border-white/10 rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] group hover:border-qavixx-copper/30 transition-colors duration-500">
                    <!-- Subtle fingerprint watermark -->
                    <div class="absolute -right-20 -bottom-20 opacity-[0.03] text-white pointer-events-none z-0 group-hover:opacity-[0.05] transition-opacity">
                        <x-lucide-fingerprint class="w-96 h-96" />
                    </div>

                    <!-- Dossier Header -->
                    <div class="border-b border-white/10 bg-[#111] px-4 md:px-8 py-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4 relative z-10">
                        <div class="flex items-center gap-4">
                            <span class="text-qavixx-copper font-mono text-sm tracking-widest uppercase flex items-center gap-2">
                                <x-lucide-folder-lock class="w-4 h-4" />
                                File // 8402-A
                            </span>
                            <span class="hidden sm:inline-block px-2 py-0.5 bg-qavixx-copper/10 text-qavixx-copper border border-qavixx-copper/20 rounded text-[10px] font-bold tracking-widest uppercase">Cleared for Release</span>
                        </div>
                        <div class="text-gray-600 font-mono text-xs flex items-center gap-3">
                            <span>Auth: DIRECTOR, OSINT</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500/50"></span>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-3 relative z-10">
                        <!-- Main Intelligence Brief -->
                        <div class="lg:col-span-2 p-6 md:p-10 border-b lg:border-b-0 lg:border-r border-white/10">
                            <h2 class="text-3xl md:text-4xl font-heading font-bold text-white mb-2 leading-tight">Operation Phantom Invoice</h2>
                            <p class="text-qavixx-copper font-mono text-sm tracking-wide uppercase mb-8">Incident Type: Business Email Compromise (BEC)</p>
                            
                            <div class="space-y-8 text-gray-300 font-light leading-relaxed">
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-qavixx-copper"></div>
                                        Initial Compromise Vector
                                    </h3>
                                    <p>A multinational manufacturing firm wired <strong class="text-white">$4.2 million</strong> intended for an overseas supplier to a fraudulent account. The threat actor bypassed the firm's MFA protocols utilizing an AitM (Adversary-in-the-Middle) reverse proxy phishing framework, subsequently deploying inbox rules to intercept and alter vendor routing instructions.</p>
                                </div>
                                
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-gray-500"></div>
                                        Tactical Response
                                    </h3>
                                    <p>Upon retention at T+14 hours post-transfer, {{ config('app.name') }} analysts initiated immediate asset freezing protocols. By mapping the attacker's infrastructure, our cyber forensics team identified the proxy nodes utilized in the attack. We compiled a technical evidentiary packet and liaised directly with the compliance department of the receiving bank in Hong Kong, securing a freeze order before the syndicate could execute secondary distribution to mule accounts.</p>
                                </div>
                                
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-green-500"></div>
                                        Operational Outcome
                                    </h3>
                                    <p>Funds were successfully repatriated to the client within 45 days. Our final intelligence report de-anonymized the operational footprint of a highly structured West African cybercrime syndicate, resulting in actionable intelligence handoffs to international law enforcement.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Terminal Metrics Sidebar -->
                        <div class="p-6 md:p-10 bg-[#080808] flex flex-col justify-center font-mono">
                            <div class="text-[10px] text-gray-600 tracking-widest uppercase mb-6 flex items-center justify-between">
                                <span>Telemetry Data</span>
                                <x-lucide-activity class="w-3 h-3" />
                            </div>
                            
                            <ul class="space-y-6">
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Target Sector</div>
                                    <div class="text-white font-bold text-sm">Industrial Manufacturing</div>
                                </li>
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Total Recovery</div>
                                    <div class="text-qavixx-copper font-bold text-2xl">$4,200,000</div>
                                </li>
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Response Time (T-Zero)</div>
                                    <div class="text-white font-bold text-lg">14 Hours</div>
                                </li>
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Jurisdictions Navigated</div>
                                    <div class="text-white text-sm">US, UK, Hong Kong</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- DOSSIER 02: Defamation -->
                <div class="relative bg-[#0a0a0a] border border-white/10 rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] group hover:border-qavixx-copper/30 transition-colors duration-500">
                    <!-- Subtle target watermark -->
                    <div class="absolute -right-20 -bottom-20 opacity-[0.03] text-white pointer-events-none z-0 group-hover:opacity-[0.05] transition-opacity">
                        <x-lucide-crosshair class="w-96 h-96" />
                    </div>

                    <!-- Dossier Header -->
                    <div class="border-b border-white/10 bg-[#111] px-4 md:px-8 py-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4 relative z-10">
                        <div class="flex items-center gap-4">
                            <span class="text-gray-400 font-mono text-sm tracking-widest uppercase flex items-center gap-2">
                                <x-lucide-folder-lock class="w-4 h-4" />
                                File // 5199-D
                            </span>
                            <span class="hidden sm:inline-block px-2 py-0.5 bg-qavixx-copper/10 text-qavixx-copper border border-qavixx-copper/20 rounded text-[10px] font-bold tracking-widest uppercase">Cleared for Release</span>
                        </div>
                        <div class="text-gray-600 font-mono text-xs flex items-center gap-3">
                            <span>Auth: DIRECTOR, CYBER FORENSICS</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500/50"></span>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-3 relative z-10">
                        <!-- Main Intelligence Brief -->
                        <div class="lg:col-span-2 p-6 md:p-10 border-b lg:border-b-0 lg:border-r border-white/10">
                            <h2 class="text-3xl md:text-4xl font-heading font-bold text-white mb-2 leading-tight">Unmasking a Coordinated Smear Campaign</h2>
                            <p class="text-gray-400 font-mono text-sm tracking-wide uppercase mb-8">Incident Type: John Doe Defamation / Corporate Sabotage</p>
                            
                            <div class="space-y-8 text-gray-300 font-light leading-relaxed">
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-gray-400"></div>
                                        The Threat Landscape
                                    </h3>
                                    <p>A prominent surgical practice was targeted by a sudden, orchestrated influx of highly damaging, fabricated 1-star reviews across multiple platforms. The anonymous threat actors claimed severe malpractice, resulting in immediate reputational damage and revenue loss.</p>
                                </div>
                                
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-gray-500"></div>
                                        Forensic Analysis
                                    </h3>
                                    <p>{{ config('app.name') }} analysts mapped the technical footprint of the adversary. Through deep-web scraping and temporal analysis, we discovered a highly correlated pattern in account creation metadata and IP origins, linking 47 disparate profiles to a specific commercial VPN node.</p>
                                    <p class="mt-2">By applying forensic stylometry (advanced linguistic analysis) and cross-referencing the posting cadence with the digital footprints of known industry competitors, we isolated a highly probable primary suspect.</p>
                                </div>
                                
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-green-500"></div>
                                        Operational Outcome
                                    </h3>
                                    <p>We drafted a comprehensive technical affidavit. This instrument enabled the client's counsel to bypass standard John Doe delays and secure an expedited subpoena against the VPN provider, confirming our forensic hypothesis. The attacker was identified as a rival surgeon. All fabricated content was excised from the internet, and the client secured a seven-figure civil settlement.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Terminal Metrics Sidebar -->
                        <div class="p-6 md:p-10 bg-[#080808] flex flex-col justify-center font-mono">
                            <div class="text-[10px] text-gray-600 tracking-widest uppercase mb-6 flex items-center justify-between">
                                <span>Telemetry Data</span>
                                <x-lucide-activity class="w-3 h-3" />
                            </div>
                            
                            <ul class="space-y-6">
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Target Sector</div>
                                    <div class="text-white font-bold text-sm">Medical / Healthcare</div>
                                </li>
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Sockpuppet Accounts Identified</div>
                                    <div class="text-white font-bold text-2xl">47</div>
                                </li>
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Platforms Cleared</div>
                                    <div class="text-white font-bold text-lg">3</div>
                                </li>
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Final Resolution</div>
                                    <div class="text-white text-sm">Identity Confirmed / Civil Settlement</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- DOSSIER 03: Crypto Divorce -->
                <div class="relative bg-[#0a0a0a] border border-white/10 rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] group hover:border-qavixx-copper/30 transition-colors duration-500">
                    <!-- Subtle bitcoin watermark -->
                    <div class="absolute -right-20 -bottom-20 opacity-[0.03] text-white pointer-events-none z-0 group-hover:opacity-[0.05] transition-opacity">
                        <x-lucide-bitcoin class="w-96 h-96" />
                    </div>

                    <!-- Dossier Header -->
                    <div class="border-b border-white/10 bg-[#111] px-4 md:px-8 py-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4 relative z-10">
                        <div class="flex items-center gap-4">
                            <span class="text-qavixx-copper font-mono text-sm tracking-widest uppercase flex items-center gap-2">
                                <x-lucide-folder-lock class="w-4 h-4" />
                                File // 9912-C
                            </span>
                            <span class="hidden sm:inline-block px-2 py-0.5 bg-qavixx-copper/10 text-qavixx-copper border border-qavixx-copper/20 rounded text-[10px] font-bold tracking-widest uppercase">Cleared for Release</span>
                        </div>
                        <div class="text-gray-600 font-mono text-xs flex items-center gap-3">
                            <span>Auth: LEAD, BLOCKCHAIN INTELLIGENCE</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500/50"></span>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-3 relative z-10">
                        <!-- Main Intelligence Brief -->
                        <div class="lg:col-span-2 p-6 md:p-10 border-b lg:border-b-0 lg:border-r border-white/10">
                            <h2 class="text-3xl md:text-4xl font-heading font-bold text-white mb-2 leading-tight">Tracing Hidden Blockchain Assets in Marital Dissolution</h2>
                            <p class="text-qavixx-copper font-mono text-sm tracking-wide uppercase mb-8">Incident Type: Crypto Forensics / Asset Concealment</p>
                            
                            <div class="space-y-8 text-gray-300 font-light leading-relaxed">
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-qavixx-copper"></div>
                                        The Subject
                                    </h3>
                                    <p>During a high-net-worth divorce proceeding, the respondent declared minimal liquid assets. The petitioner's legal counsel suspected the concealment of significant wealth in cryptocurrency; however, standard financial discovery yielded zero centralized exchange (CEX) accounts or related bank transfers.</p>
                                </div>
                                
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-gray-500"></div>
                                        Chain Analysis & Exploitation
                                    </h3>
                                    <p>{{ config('app.name') }} was retained to perform a deep digital forensic extraction of the respondent's archived hardware. Analysts located a dormant BIP39 seed phrase disguised within a drafted, unsent email fragment dating back to 2017.</p>
                                    <p class="mt-2">Deploying proprietary blockchain analytics and clustering algorithms, we derived the associated cryptographic public keys and traced the subsequent movement of Bitcoin. The respondent had routed funds through several zero-knowledge mixers (tumblers) designed to obfuscate the ledger trail.</p>
                                </div>
                                
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-green-500"></div>
                                        Operational Outcome
                                    </h3>
                                    <p>We successfully unraveled the mixer pathways and mapped the hidden portfolio, which was dispersed across multiple decentralized finance (DeFi) protocols and cold storage hardware wallets. The total derived value exceeded $8.5 million. Our intelligence analysts provided expert witness testimony, resulting in a highly favorable equitable distribution ruling for the client.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Terminal Metrics Sidebar -->
                        <div class="p-6 md:p-10 bg-[#080808] flex flex-col justify-center font-mono">
                            <div class="text-[10px] text-gray-600 tracking-widest uppercase mb-6 flex items-center justify-between">
                                <span>Telemetry Data</span>
                                <x-lucide-activity class="w-3 h-3" />
                            </div>
                            
                            <ul class="space-y-6">
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Target Sector</div>
                                    <div class="text-white font-bold text-sm">High-Net-Worth Family Law</div>
                                </li>
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Hidden Assets Located</div>
                                    <div class="text-qavixx-copper font-bold text-2xl">$8,500,000+</div>
                                </li>
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Wallets Identified</div>
                                    <div class="text-white font-bold text-lg">14</div>
                                </li>
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Chain Analysis Depth</div>
                                    <div class="text-white text-sm">7 Hops + Mixer Evasion Bypass</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- DOSSIER 04: Pig Butchering -->
                <div class="relative bg-[#0a0a0a] border border-white/10 rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] group hover:border-qavixx-copper/30 transition-colors duration-500">
                    <div class="absolute -right-20 -bottom-20 opacity-[0.03] text-white pointer-events-none z-0 group-hover:opacity-[0.05] transition-opacity">
                        <x-lucide-smartphone class="w-96 h-96" />
                    </div>
                    <div class="border-b border-white/10 bg-[#111] px-4 md:px-8 py-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4 relative z-10">
                        <div class="flex items-center gap-4">
                            <span class="text-qavixx-copper font-mono text-sm tracking-widest uppercase flex items-center gap-2">
                                <x-lucide-folder-lock class="w-4 h-4" />
                                File // 7104-P
                            </span>
                            <span class="hidden sm:inline-block px-2 py-0.5 bg-qavixx-copper/10 text-qavixx-copper border border-qavixx-copper/20 rounded text-[10px] font-bold tracking-widest uppercase">Cleared for Release</span>
                        </div>
                        <div class="text-gray-600 font-mono text-xs flex items-center gap-3">
                            <span>Auth: LEAD, BLOCKCHAIN INTELLIGENCE</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500/50"></span>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-3 relative z-10">
                        <div class="lg:col-span-2 p-6 md:p-10 border-b lg:border-b-0 lg:border-r border-white/10">
                            <h2 class="text-3xl md:text-4xl font-heading font-bold text-white mb-2 leading-tight">Dismantling a Transnational 'Pig Butchering' Syndicate</h2>
                            <p class="text-gray-400 font-mono text-sm tracking-wide uppercase mb-8">Incident Type: Crypto Fraud / Romance Investment Scam</p>
                            <div class="space-y-8 text-gray-300 font-light leading-relaxed">
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-gray-400"></div>
                                        The Threat Landscape
                                    </h3>
                                    <p>A high-net-worth individual was manipulated over six months into transferring <strong class="text-white">$1.2M in USDT</strong> to a fraudulent liquidity mining platform. The sophisticated social engineering operation (commonly known as "pig butchering") was orchestrated by a persona claiming to be an algorithmic trading expert.</p>
                                </div>
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-gray-500"></div>
                                        Chain Analysis & Exploitation
                                    </h3>
                                    <p>{{ config('app.name') }} blockchain analysts mapped the transactional flow across multiple layer-1 blockchains, tracking the bridged assets from Ethereum to the Tron network. The syndicate utilized cross-chain bridges and nested exchanges to obfuscate the origin of funds.</p>
                                    <p class="mt-2">By correlating withdrawal timing with known syndicate wallet clusters, we successfully identified the ultimate cash-out node at a compliant Virtual Asset Service Provider (VASP) operating in the Seychelles.</p>
                                </div>
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-green-500"></div>
                                        Operational Outcome
                                    </h3>
                                    <p>We generated an emergency blockchain forensic report, enabling the client's counsel to secure an ex parte freezing injunction. The VASP complied, freezing $850,000 of the client's remaining funds before they could be liquidated to fiat. Our intelligence packet was subsequently handed over to INTERPOL, assisting in the raid of a cyber-scam compound in Southeast Asia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 md:p-10 bg-[#080808] flex flex-col justify-center font-mono">
                            <div class="text-[10px] text-gray-600 tracking-widest uppercase mb-6 flex items-center justify-between">
                                <span>Telemetry Data</span>
                                <x-lucide-activity class="w-3 h-3" />
                            </div>
                            <ul class="space-y-6">
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Target Sector</div>
                                    <div class="text-white font-bold text-sm">Private Wealth</div>
                                </li>
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Funds Frozen</div>
                                    <div class="text-white font-bold text-2xl">$850,000</div>
                                </li>
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Syndicate Origin</div>
                                    <div class="text-white font-bold text-lg">Southeast Asia</div>
                                </li>
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Chain Analysis Depth</div>
                                    <div class="text-white text-sm">Cross-chain bridging (ETH -> TRX)</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- DOSSIER 05: Insider Threat -->
                <div class="relative bg-[#0a0a0a] border border-white/10 rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] group hover:border-qavixx-copper/30 transition-colors duration-500">
                    <div class="absolute -right-20 -bottom-20 opacity-[0.03] text-white pointer-events-none z-0 group-hover:opacity-[0.05] transition-opacity">
                        <x-lucide-shield-alert class="w-96 h-96" />
                    </div>
                    <div class="border-b border-white/10 bg-[#111] px-4 md:px-8 py-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4 relative z-10">
                        <div class="flex items-center gap-4">
                            <span class="text-qavixx-copper font-mono text-sm tracking-widest uppercase flex items-center gap-2">
                                <x-lucide-folder-lock class="w-4 h-4" />
                                File // 1198-X
                            </span>
                            <span class="hidden sm:inline-block px-2 py-0.5 bg-qavixx-copper/10 text-qavixx-copper border border-qavixx-copper/20 rounded text-[10px] font-bold tracking-widest uppercase">Cleared for Release</span>
                        </div>
                        <div class="text-gray-600 font-mono text-xs flex items-center gap-3">
                            <span>Auth: DIRECTOR, CYBER FORENSICS</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500/50"></span>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-3 relative z-10">
                        <div class="lg:col-span-2 p-6 md:p-10 border-b lg:border-b-0 lg:border-r border-white/10">
                            <h2 class="text-3xl md:text-4xl font-heading font-bold text-white mb-2 leading-tight">Neutralizing an Insider Intellectual Property Theft</h2>
                            <p class="text-qavixx-copper font-mono text-sm tracking-wide uppercase mb-8">Incident Type: Corporate Sabotage / Insider Threat</p>
                            <div class="space-y-8 text-gray-300 font-light leading-relaxed">
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-qavixx-copper"></div>
                                        The Compromise
                                    </h3>
                                    <p>Proprietary CAD files for next-generation aerospace components belonging to a defense contractor appeared on an elite dark web marketplace. Standard Data Loss Prevention (DLP) alerts had not been triggered, suggesting a sophisticated exfiltration method utilized by someone with deep network access.</p>
                                </div>
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-gray-500"></div>
                                        Forensic Extraction
                                    </h3>
                                    <p>{{ config('app.name') }} executed advanced host-based forensics on the devices of recently departed senior engineering staff. By analyzing Volatility memory dumps, we identified anomalous egress traffic hidden within encrypted DNS (DoH) requests.</p>
                                    <p class="mt-2">This covert channel bypassed the corporate firewall, slowly beaconing the classified schematics to an offshore dead-drop server controlled by the adversary.</p>
                                </div>
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-green-500"></div>
                                        Operational Outcome
                                    </h3>
                                    <p>The forensic evidence directly implicated a former lead engineer who was actively negotiating the sale of the IP. We provided an evidentiary packet to federal authorities, leading to the subject's immediate apprehension. The data was neutralized on the dark web forum before a successful transaction could occur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 md:p-10 bg-[#080808] flex flex-col justify-center font-mono">
                            <div class="text-[10px] text-gray-600 tracking-widest uppercase mb-6 flex items-center justify-between">
                                <span>Telemetry Data</span>
                                <x-lucide-activity class="w-3 h-3" />
                            </div>
                            <ul class="space-y-6">
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Target Sector</div>
                                    <div class="text-white font-bold text-sm">Aerospace & Defense</div>
                                </li>
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Exfiltration Vector</div>
                                    <div class="text-qavixx-copper font-bold text-2xl">DNS over HTTPS</div>
                                </li>
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Dark Web Marketplace</div>
                                    <div class="text-white font-bold text-lg">Neutralized</div>
                                </li>
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Final Resolution</div>
                                    <div class="text-white text-sm">Federal Apprehension</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- DOSSIER 06: Romance Scam -->
                <div class="relative bg-[#0a0a0a] border border-white/10 rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] group hover:border-qavixx-copper/30 transition-colors duration-500">
                    <div class="absolute -right-20 -bottom-20 opacity-[0.03] text-white pointer-events-none z-0 group-hover:opacity-[0.05] transition-opacity">
                        <x-lucide-heart-crack class="w-96 h-96" />
                    </div>
                    <div class="border-b border-white/10 bg-[#111] px-4 md:px-8 py-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4 relative z-10">
                        <div class="flex items-center gap-4">
                            <span class="text-gray-400 font-mono text-sm tracking-widest uppercase flex items-center gap-2">
                                <x-lucide-folder-lock class="w-4 h-4" />
                                File // 3319-M
                            </span>
                            <span class="hidden sm:inline-block px-2 py-0.5 bg-qavixx-copper/10 text-qavixx-copper border border-qavixx-copper/20 rounded text-[10px] font-bold tracking-widest uppercase">Cleared for Release</span>
                        </div>
                        <div class="text-gray-600 font-mono text-xs flex items-center gap-3">
                            <span>Auth: DIRECTOR, OSINT</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500/50"></span>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-3 relative z-10">
                        <div class="lg:col-span-2 p-6 md:p-10 border-b lg:border-b-0 lg:border-r border-white/10">
                            <h2 class="text-3xl md:text-4xl font-heading font-bold text-white mb-2 leading-tight">Unraveling a Cross-Border Romance Scam Network</h2>
                            <p class="text-gray-400 font-mono text-sm tracking-wide uppercase mb-8">Incident Type: Financial Fraud / Romance Scam</p>
                            <div class="space-y-8 text-gray-300 font-light leading-relaxed">
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-gray-400"></div>
                                        The Compromise
                                    </h3>
                                    <p>An elderly client was defrauded of over $400,000 through a multi-year romance scam. The fabricated persona claimed to be an offshore oil rig engineer requiring emergency capital for equipment repairs. Funds were wired via traditional bank transfers to various "vendors" globally.</p>
                                </div>
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-gray-500"></div>
                                        OSINT Exploitation
                                    </h3>
                                    <p>{{ config('app.name') }} analysts initiated a deep Open-Source Intelligence (OSINT) sweep of the persona's digital footprint. We extracted EXIF metadata from sent images that had bypassed social media scrubbing protocols, revealing exact GPS coordinates.</p>
                                    <p class="mt-2">Simultaneously, we traced the VoIP numbers used for voice communication and mapped the financial flow of the "vendor" accounts, identifying a coordinated money mule network.</p>
                                </div>
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-green-500"></div>
                                        Operational Outcome
                                    </h3>
                                    <p>The threat actors were successfully geo-located to a cybercrime syndicate operating out of Lagos, Nigeria. We provided the intelligence packet to local authorities and successfully intercepted and froze $150,000 in a U.S.-based intermediary bank before it cleared international boundaries.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 md:p-10 bg-[#080808] flex flex-col justify-center font-mono">
                            <div class="text-[10px] text-gray-600 tracking-widest uppercase mb-6 flex items-center justify-between">
                                <span>Telemetry Data</span>
                                <x-lucide-activity class="w-3 h-3" />
                            </div>
                            <ul class="space-y-6">
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Target Sector</div>
                                    <div class="text-white font-bold text-sm">Vulnerable Individual</div>
                                </li>
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Primary Vector</div>
                                    <div class="text-white font-bold text-2xl">Social Engineering</div>
                                </li>
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Funds Intercepted</div>
                                    <div class="text-white font-bold text-lg">$150,000</div>
                                </li>
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Adversary Geo-location</div>
                                    <div class="text-white text-sm">Lagos, Nigeria</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- DOSSIER 07: Cyber-Stalking -->
                <div class="relative bg-[#0a0a0a] border border-white/10 rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] group hover:border-qavixx-copper/30 transition-colors duration-500">
                    <div class="absolute -right-20 -bottom-20 opacity-[0.03] text-white pointer-events-none z-0 group-hover:opacity-[0.05] transition-opacity">
                        <x-lucide-eye class="w-96 h-96" />
                    </div>
                    <div class="border-b border-white/10 bg-[#111] px-4 md:px-8 py-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4 relative z-10">
                        <div class="flex items-center gap-4">
                            <span class="text-qavixx-copper font-mono text-sm tracking-widest uppercase flex items-center gap-2">
                                <x-lucide-folder-lock class="w-4 h-4" />
                                File // 8820-K
                            </span>
                            <span class="hidden sm:inline-block px-2 py-0.5 bg-qavixx-copper/10 text-qavixx-copper border border-qavixx-copper/20 rounded text-[10px] font-bold tracking-widest uppercase">Cleared for Release</span>
                        </div>
                        <div class="text-gray-600 font-mono text-xs flex items-center gap-3">
                            <span>Auth: DIRECTOR, OSINT</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500/50"></span>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-3 relative z-10">
                        <div class="lg:col-span-2 p-6 md:p-10 border-b lg:border-b-0 lg:border-r border-white/10">
                            <h2 class="text-3xl md:text-4xl font-heading font-bold text-white mb-2 leading-tight">De-anonymizing a Persistent Cyber-Stalker</h2>
                            <p class="text-qavixx-copper font-mono text-sm tracking-wide uppercase mb-8">Incident Type: Cyber-Stalking / Doxxing</p>
                            <div class="space-y-8 text-gray-300 font-light leading-relaxed">
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-qavixx-copper"></div>
                                        The Threat Landscape
                                    </h3>
                                    <p>A high-profile entertainment figure was subjected to severe, anonymous cyber-stalking, doxxing, and SWATing threats. The adversary utilized end-to-end encrypted messaging applications, offshore VPNs, and burner email accounts to maintain strict operational security (OPSEC).</p>
                                </div>
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-gray-500"></div>
                                        Active Defense Deployment
                                    </h3>
                                    <p>{{ config('app.name') }} analysts transitioned from passive OSINT to an active defense posture. We engineered a highly targeted cyber-canary (a legally authorized tracking beacon) disguised as an innocuous legal cease-and-desist PDF document.</p>
                                    <p class="mt-2">When the adversary interacted with the payload, their VPN kill-switch failed momentarily, allowing our telemetry servers to capture their true, unmasked residential IP address and device fingerprint.</p>
                                </div>
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-green-500"></div>
                                        Operational Outcome
                                    </h3>
                                    <p>The subject was definitively identified as a former private security contractor who previously worked the client's estate. The resulting evidentiary packet led directly to their arrest by federal authorities on cyber-stalking and interstate threats charges.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 md:p-10 bg-[#080808] flex flex-col justify-center font-mono">
                            <div class="text-[10px] text-gray-600 tracking-widest uppercase mb-6 flex items-center justify-between">
                                <span>Telemetry Data</span>
                                <x-lucide-activity class="w-3 h-3" />
                            </div>
                            <ul class="space-y-6">
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Target Sector</div>
                                    <div class="text-white font-bold text-sm">Entertainment / VIP</div>
                                </li>
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Tactical Asset</div>
                                    <div class="text-qavixx-copper font-bold text-2xl">Cyber-Canary</div>
                                </li>
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">OPSEC Failure</div>
                                    <div class="text-white font-bold text-lg">VPN Kill-Switch Bypass</div>
                                </li>
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Final Resolution</div>
                                    <div class="text-white text-sm">Federal Arrest</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- DOSSIER 08: Ransomware -->
                <div class="relative bg-[#0a0a0a] border border-white/10 rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] group hover:border-qavixx-copper/30 transition-colors duration-500">
                    <div class="absolute -right-20 -bottom-20 opacity-[0.03] text-white pointer-events-none z-0 group-hover:opacity-[0.05] transition-opacity">
                        <x-lucide-skull class="w-96 h-96" />
                    </div>
                    <div class="border-b border-white/10 bg-[#111] px-4 md:px-8 py-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4 relative z-10">
                        <div class="flex items-center gap-4">
                            <span class="text-gray-400 font-mono text-sm tracking-widest uppercase flex items-center gap-2">
                                <x-lucide-folder-lock class="w-4 h-4" />
                                File // 1092-R
                            </span>
                            <span class="hidden sm:inline-block px-2 py-0.5 bg-qavixx-copper/10 text-qavixx-copper border border-qavixx-copper/20 rounded text-[10px] font-bold tracking-widest uppercase">Cleared for Release</span>
                        </div>
                        <div class="text-gray-600 font-mono text-xs flex items-center gap-3">
                            <span>Auth: INCIDENT COMMAND</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500/50"></span>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-3 relative z-10">
                        <div class="lg:col-span-2 p-6 md:p-10 border-b lg:border-b-0 lg:border-r border-white/10">
                            <h2 class="text-3xl md:text-4xl font-heading font-bold text-white mb-2 leading-tight">Ransomware Negotiation and Decryption Key Recovery</h2>
                            <p class="text-gray-400 font-mono text-sm tracking-wide uppercase mb-8">Incident Type: Ransomware / Extortion</p>
                            <div class="space-y-8 text-gray-300 font-light leading-relaxed">
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-gray-400"></div>
                                        The Compromise
                                    </h3>
                                    <p>A regional healthcare network was crippled by a targeted LockBit 3.0 ransomware deployment. Critical patient care systems were encrypted, and backups were compromised. The threat actors demanded an initial ransom of 250 BTC to provide the decryptor and prevent the leak of PHI (Protected Health Information).</p>
                                </div>
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-gray-500"></div>
                                        Tactical Engagement
                                    </h3>
                                    <p>{{ config('app.name') }} negotiators established covert communications with the affiliate over the dark web. Simultaneously, our threat intelligence team analyzed the affiliate's historical blockchain activity to assess their propensity to actually deliver a working decryptor upon payment (trust assessment).</p>
                                    <p class="mt-2">Utilizing advanced psychological profiling and stall tactics, we bought the client's internal IT team time to restore secondary systems while aggressively driving down the ransom demand.</p>
                                </div>
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-green-500"></div>
                                        Operational Outcome
                                    </h3>
                                    <p>We successfully negotiated the ransom down to 15 BTC (a 94% reduction). The payment was facilitated securely, and a functional decryption utility was procured. The hospital network restored critical operations within 72 hours, avoiding a catastrophic shutdown of patient services.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 md:p-10 bg-[#080808] flex flex-col justify-center font-mono">
                            <div class="text-[10px] text-gray-600 tracking-widest uppercase mb-6 flex items-center justify-between">
                                <span>Telemetry Data</span>
                                <x-lucide-activity class="w-3 h-3" />
                            </div>
                            <ul class="space-y-6">
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Target Sector</div>
                                    <div class="text-white font-bold text-sm">Healthcare</div>
                                </li>
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Initial Demand</div>
                                    <div class="text-white font-bold text-2xl">250 BTC</div>
                                </li>
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Settlement Reached</div>
                                    <div class="text-white font-bold text-lg">15 BTC</div>
                                </li>
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Final Resolution</div>
                                    <div class="text-white text-sm">Decryptor Procured / Systems Restored</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- DOSSIER 09: Corporate Espionage / TSCM -->
                <div class="relative bg-[#0a0a0a] border border-white/10 rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] group hover:border-qavixx-copper/30 transition-colors duration-500">
                    <div class="absolute -right-20 -bottom-20 opacity-[0.03] text-white pointer-events-none z-0 group-hover:opacity-[0.05] transition-opacity">
                        <x-lucide-radio class="w-96 h-96" />
                    </div>
                    <div class="border-b border-white/10 bg-[#111] px-4 md:px-8 py-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4 relative z-10">
                        <div class="flex items-center gap-4">
                            <span class="text-qavixx-copper font-mono text-sm tracking-widest uppercase flex items-center gap-2">
                                <x-lucide-folder-lock class="w-4 h-4" />
                                File // 2044-B
                            </span>
                            <span class="hidden sm:inline-block px-2 py-0.5 bg-qavixx-copper/10 text-qavixx-copper border border-qavixx-copper/20 rounded text-[10px] font-bold tracking-widest uppercase">Cleared for Release</span>
                        </div>
                        <div class="text-gray-600 font-mono text-xs flex items-center gap-3">
                            <span>Auth: DIRECTOR, CYBER FORENSICS</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500/50"></span>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-3 relative z-10">
                        <div class="lg:col-span-2 p-6 md:p-10 border-b lg:border-b-0 lg:border-r border-white/10">
                            <h2 class="text-3xl md:text-4xl font-heading font-bold text-white mb-2 leading-tight">Eradicating Covert Surveillance in the C-Suite</h2>
                            <p class="text-qavixx-copper font-mono text-sm tracking-wide uppercase mb-8">Incident Type: Corporate Espionage / Bug Sweeping (TSCM)</p>
                            <div class="space-y-8 text-gray-300 font-light leading-relaxed">
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-qavixx-copper"></div>
                                        The Compromise
                                    </h3>
                                    <p>A multi-billion dollar hedge fund suspected a leak after highly confidential M&A trading strategies were front-run by a competitor. Extensive IT audits and network forensics confirmed zero digital breaches, pointing to physical exfiltration.</p>
                                </div>
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-gray-500"></div>
                                        Tactical Sweep
                                    </h3>
                                    <p>{{ config('app.name') }} deployed a Technical Surveillance Counter-Measures (TSCM) team to perform an off-hours physical sweep of the executive boardroom and C-suite offices. Using non-linear junction detectors (NLJD) and spectrum analyzers, we identified an anomalous RF signal.</p>
                                    <p class="mt-2">A physical teardown revealed an advanced burst-transmission listening device (bug) hardwired directly into the motherboard of the boardroom's VoIP conference phone, designed to evade standard RF sweeps by compressing and bursting audio logs at 3 AM.</p>
                                </div>
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-green-500"></div>
                                        Operational Outcome
                                    </h3>
                                    <p>The device was safely neutralized and forensically analyzed. A subsequent OSINT investigation tracing the hardware serial numbers linked the device to a rogue corporate intelligence firm hired by the rival fund. The client initiated massive civil litigation against the competitor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 md:p-10 bg-[#080808] flex flex-col justify-center font-mono">
                            <div class="text-[10px] text-gray-600 tracking-widest uppercase mb-6 flex items-center justify-between">
                                <span>Telemetry Data</span>
                                <x-lucide-activity class="w-3 h-3" />
                            </div>
                            <ul class="space-y-6">
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Target Sector</div>
                                    <div class="text-white font-bold text-sm">Financial Services</div>
                                </li>
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Device Type</div>
                                    <div class="text-qavixx-copper font-bold text-2xl">Burst RF Bug</div>
                                </li>
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Location Discovered</div>
                                    <div class="text-white font-bold text-lg">Boardroom VoIP</div>
                                </li>
                                <li class="border-l-2 border-qavixx-copper/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Final Resolution</div>
                                    <div class="text-white text-sm">Neutralized / Civil Litigation</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- DOSSIER 10: Sextortion -->
                <div class="relative bg-[#0a0a0a] border border-white/10 rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)] group hover:border-qavixx-copper/30 transition-colors duration-500">
                    <div class="absolute -right-20 -bottom-20 opacity-[0.03] text-white pointer-events-none z-0 group-hover:opacity-[0.05] transition-opacity">
                        <x-lucide-file-warning class="w-96 h-96" />
                    </div>
                    <div class="border-b border-white/10 bg-[#111] px-4 md:px-8 py-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4 relative z-10">
                        <div class="flex items-center gap-4">
                            <span class="text-gray-400 font-mono text-sm tracking-widest uppercase flex items-center gap-2">
                                <x-lucide-folder-lock class="w-4 h-4" />
                                File // 6601-S
                            </span>
                            <span class="hidden sm:inline-block px-2 py-0.5 bg-qavixx-copper/10 text-qavixx-copper border border-qavixx-copper/20 rounded text-[10px] font-bold tracking-widest uppercase">Cleared for Release</span>
                        </div>
                        <div class="text-gray-600 font-mono text-xs flex items-center gap-3">
                            <span>Auth: DIRECTOR, OSINT</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500/50"></span>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-3 relative z-10">
                        <div class="lg:col-span-2 p-6 md:p-10 border-b lg:border-b-0 lg:border-r border-white/10">
                            <h2 class="text-3xl md:text-4xl font-heading font-bold text-white mb-2 leading-tight">Mitigating a High-Stakes Sextortion Threat</h2>
                            <p class="text-gray-400 font-mono text-sm tracking-wide uppercase mb-8">Incident Type: Extortion / Digital Blackmail</p>
                            <div class="space-y-8 text-gray-300 font-light leading-relaxed">
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-gray-400"></div>
                                        The Threat Landscape
                                    </h3>
                                    <p>The CEO of a publicly traded technology firm was targeted by an extortionist who possessed deeply compromising audio and visual material. The adversary threatened to mass-distribute the material to the board of directors and tier-1 media outlets unless a $500k Monero (XMR) payment was secured within 48 hours.</p>
                                </div>
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-gray-500"></div>
                                        Forensic Profiling
                                    </h3>
                                    <p>Given Monero's untraceable nature, {{ config('app.name') }} pivoted away from blockchain tracing and focused entirely on the communication vector. We analyzed the threat actor's encrypted emails and message payloads.</p>
                                    <p class="mt-2">Utilizing forensic stylometry, we identified a highly specific reuse of linguistic structures and grammatical anomalies. Cross-referencing this fingerprint against our proprietary threat databases matched the actor to a known extortion ring operating in Eastern Europe that historically bluffed on releasing data if paid, but leaked immediately if ignored.</p>
                                </div>
                                <div>
                                    <h3 class="text-white font-bold tracking-widest text-xs uppercase mb-3 flex items-center gap-2">
                                        <div class="w-1 h-4 bg-green-500"></div>
                                        Operational Outcome
                                    </h3>
                                    <p>Armed with this intelligence, we advised the client against payment and engineered a stalling negotiation loop. We provided actionable intelligence to the FBI Cyber Division, who collaborated with EUROPOL to dismantle the ring's command-and-control servers. The material was never released, and the client suffered zero reputational damage.</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 md:p-10 bg-[#080808] flex flex-col justify-center font-mono">
                            <div class="text-[10px] text-gray-600 tracking-widest uppercase mb-6 flex items-center justify-between">
                                <span>Telemetry Data</span>
                                <x-lucide-activity class="w-3 h-3" />
                            </div>
                            <ul class="space-y-6">
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Target Sector</div>
                                    <div class="text-white font-bold text-sm">C-Suite Executive</div>
                                </li>
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Extortion Demand</div>
                                    <div class="text-white font-bold text-2xl">$500,000 (XMR)</div>
                                </li>
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Forensic Focus</div>
                                    <div class="text-white font-bold text-lg">Stylometry</div>
                                </li>
                                <li class="border-l-2 border-gray-500/30 pl-4">
                                    <div class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Final Resolution</div>
                                    <div class="text-white text-sm">Material Secured / Zero Leakage</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-24 bg-gradient-to-br from-qavixx-surface to-qavixx-base border-t border-white/5 relative overflow-hidden">
        <div class="absolute right-0 top-0 w-1/2 h-full bg-gradient-brand opacity-5 blur-[150px] pointer-events-none"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-heading font-bold text-white mb-6">Require immediate intelligence deployment?</h2>
            <p class="text-xl text-gray-400 mb-10 font-light">Contact our analysts for a confidential review of your case parameters.</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-transparent border border-qavixx-copper hover:bg-qavixx-copper/10 text-qavixx-copper px-8 py-4 rounded-full font-bold text-sm uppercase tracking-widest transition-all shadow-[0_0_20px_rgba(212,148,58,0.1)] hover:shadow-[0_0_30px_rgba(212,148,58,0.2)]" wire:navigate>
                Initiate Consultation
                <x-lucide-arrow-right class="w-4 h-4" />
            </a>
        </div>
    </section>
</div>