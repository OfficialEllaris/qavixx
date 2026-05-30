<div class="overflow-hidden relative bg-qavixx-base min-h-screen">
    <!-- Hero Section -->
    <section class="relative pt-28 md:pt-32 pb-10 md:pb-20">
        <div class="absolute top-0 left-0 w-1/2 h-full bg-gradient-brand opacity-10 blur-[150px] z-0 transform -translate-x-1/4 -translate-y-1/4"></div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white mb-6">
                Terms of <span class="text-transparent bg-clip-text bg-gradient-brand">Service</span>
            </h1>
            <p class="text-lg text-gray-400 mb-6 font-light">Last updated: {{ date('F j, Y') }}</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="pb-20 md:pb-32 relative">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="glass-panel p-6 md:p-16 rounded-3xl text-gray-400 leading-relaxed font-light space-y-8 md:space-y-12">
                
                <div class="prose prose-invert max-w-none">
                    <p class="text-lg leading-relaxed mb-10 text-gray-300">These Terms of Service ("Terms") govern your engagement with {{ config('app.name') }} Intelligence ("{{ config('app.name') }}," "we," "us," or "our") for intelligence gathering, digital forensics, blockchain analysis, and investigatory services. By engaging our firm or utilizing our services, you agree to be bound by these Terms.</p>
                </div>

                <div>
                    <h2 class="text-2xl text-white font-heading font-semibold mb-6 flex items-center gap-4"><span class="w-8 h-px bg-qavixx-copper"></span> 1. Acceptance & Lawful Use</h2>
                    <p>Our services are provided strictly for lawful purposes, including but not limited to civil litigation support, asset recovery, fraud investigations, and assisting law enforcement. You warrant that you are legally authorized to request the investigation and that the information you provide to initiate the case is accurate and obtained legally.</p>
                </div>

                <div>
                    <h2 class="text-2xl text-white font-heading font-semibold mb-6 flex items-center gap-4"><span class="w-8 h-px bg-qavixx-copper"></span> 2. Scope of Services & Disclaimer of Guarantee</h2>
                    <p class="mb-4">{{ config('app.name') }} provides elite intelligence and forensic services utilizing proprietary methodologies. However, the nature of cybercrime, obfuscation techniques, and decentralized ledgers means that <strong class="text-qavixx-copper">we cannot guarantee specific outcomes or the successful recovery of stolen assets.</strong></p>
                    <ul class="list-disc pl-6 space-y-3 text-gray-400">
                        <li>Asset recovery ultimately depends on jurisdictional cooperation, law enforcement action, and exchange compliance.</li>
                        <li>{{ config('app.name') }} acts as the intelligence and forensic arm to empower legal and enforcement teams; we do not execute the physical seizure of assets ourselves.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl text-white font-heading font-semibold mb-6 flex items-center gap-4"><span class="w-8 h-px bg-qavixx-copper"></span> 3. Mutual Confidentiality & Non-Disclosure (NDA)</h2>
                    <p class="mb-4">Given the sensitivity of our operations, both parties agree to maintain strict, mutual confidentiality.</p>
                    <ul class="list-disc pl-6 space-y-3 text-gray-400">
                        <li><strong class="text-gray-300">Client Obligations:</strong> You agree not to disclose {{ config('app.name') }}'s investigative methodologies, proprietary tools, or interim findings without our express written consent. Premature disclosure can tip off threat actors, resulting in the rapid movement of illicit assets and compromising the investigation.</li>
                        <li><strong class="text-gray-300">{{ config('app.name') }} Obligations:</strong> We will not disclose your identity, the nature of your case, or any findings to third parties other than your designated legal counsel, except when legally compelled by a court of competent jurisdiction.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl text-white font-heading font-semibold mb-6 flex items-center gap-4"><span class="w-8 h-px bg-qavixx-copper"></span> 4. Compliance & Ethical Boundaries</h2>
                    <p>{{ config('app.name') }} operates strictly within the bounds of international law. We do not engage in offensive cyber operations, "hack-backs," illegal surveillance, or any form of vigilantism. If a client requests services that violate ethical guidelines or international law, {{ config('app.name') }} reserves the right to terminate the engagement immediately without refund.</p>
                </div>

                <div>
                    <h2 class="text-2xl text-white font-heading font-semibold mb-6 flex items-center gap-4"><span class="w-8 h-px bg-qavixx-copper"></span> 5. Intellectual Property & Work Product</h2>
                    <p>All affidavits, intelligence dossiers, blockchain flowcharts, and written reports produced during the engagement remain the intellectual property of {{ config('app.name') }} until payment is rendered in full. Upon full payment, the client is granted an exclusive, perpetual license to use these materials for their specific legal, internal, or law enforcement proceedings. {{ config('app.name') }} retains the rights to our underlying methodologies and proprietary tracing algorithms.</p>
                </div>

                <div>
                    <h2 class="text-2xl text-white font-heading font-semibold mb-6 flex items-center gap-4"><span class="w-8 h-px bg-qavixx-copper"></span> 6. Payment Terms & Retainers</h2>
                    <p>Investigatory services are generally billed against an initial retainer. Because cyber investigations require the immediate allocation of highly specialized analysts and proprietary resources, retainers are non-refundable once the investigation has formally commenced, unless explicitly agreed upon in writing within a separate Master Services Agreement (MSA).</p>
                </div>

                <div>
                    <h2 class="text-2xl text-white font-heading font-semibold mb-6 flex items-center gap-4"><span class="w-8 h-px bg-qavixx-copper"></span> 7. Limitation of Liability & Indemnification</h2>
                    <p>To the maximum extent permitted by law, {{ config('app.name') }} Intelligence shall not be liable for any indirect, incidental, special, or consequential damages resulting from the use or inability to use our services, or from reliance on our intelligence reports. You agree to indemnify and hold {{ config('app.name') }} harmless from any claims, damages, or legal actions arising out of your misuse of our findings or any misrepresentations you made when engaging our services.</p>
                </div>

            </div>
        </div>
    </section>
</div>
    {{-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama --}}
</div>