<div class="overflow-hidden relative bg-qavixx-base min-h-screen">
    <!-- Hero Section -->
    <section class="relative pt-28 md:pt-32 pb-10 md:pb-20">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-brand opacity-10 blur-[150px] z-0 transform translate-x-1/4 -translate-y-1/4"></div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-white mb-6">
                Privacy <span class="text-transparent bg-clip-text bg-gradient-brand">Policy</span>
            </h1>
            <p class="text-lg text-gray-400 mb-6 font-light">Last updated: {{ date('F j, Y') }}</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="pb-20 md:pb-32 relative">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="glass-panel p-6 md:p-16 rounded-3xl text-gray-400 leading-relaxed font-light space-y-8 md:space-y-12">
                
                <div class="prose prose-invert max-w-none">
                    <p class="text-lg leading-relaxed mb-10 text-gray-300">{{ config('app.name') }} Intelligence ("we," "us," or "our") is committed to protecting the privacy and security of our clients, subjects of investigations, and website visitors. Due to the highly sensitive nature of digital forensics, intelligence gathering, and cybercrime investigations, we adhere to the strictest global data protection standards.</p>
                </div>

                <div>
                    <h2 class="text-2xl text-white font-heading font-semibold mb-6 flex items-center gap-4"><span class="w-8 h-px bg-qavixx-copper"></span> 1. Information We Collect</h2>
                    <p class="mb-4">To conduct effective investigations, we must collect and process various types of data. This includes:</p>
                    <ul class="list-disc pl-6 space-y-3 text-gray-400">
                        <li><strong class="text-gray-300">Client Information:</strong> Names, corporate entities, secure contact details, billing information, and identification required for Know Your Customer (KYC) compliance.</li>
                        <li><strong class="text-gray-300">Investigative Data:</strong> Digital artifacts, transaction hashes, wallet addresses, chat logs, email headers, and any other evidence provided by the client to initiate a case.</li>
                        <li><strong class="text-gray-300">Open Source Intelligence (OSINT):</strong> Publicly available data scraped or manually collected regarding threat actors, including social media profiles, public registries, and dark web forum posts.</li>
                        <li><strong class="text-gray-300">Technical Data:</strong> IP addresses, browser types, and usage data collected automatically when you securely access our portal or website.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl text-white font-heading font-semibold mb-6 flex items-center gap-4"><span class="w-8 h-px bg-qavixx-copper"></span> 2. How We Use Your Information</h2>
                    <p class="mb-4">Your data is strictly compartmentalized and utilized solely for the following purposes:</p>
                    <ul class="list-disc pl-6 space-y-3 text-gray-400">
                        <li>Conducting blockchain forensics, asset tracing, and threat actor de-anonymization.</li>
                        <li>Producing court-admissible affidavits, intelligence dossiers, and litigation support materials.</li>
                        <li>Communicating securely with you regarding case updates and strategic recommendations.</li>
                        <li>Complying with international legal obligations, including anti-money laundering (AML) regulations.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl text-white font-heading font-semibold mb-6 flex items-center gap-4"><span class="w-8 h-px bg-qavixx-copper"></span> 3. Data Security & Encryption (OPSEC)</h2>
                    <p class="mb-4">Given the adversarial nature of cybercrime, our infrastructure reflects military-grade operational security (OPSEC). All client communications, evidence files, and blockchain tracing algorithms are secured using:</p>
                    <ul class="list-disc pl-6 space-y-3 text-gray-400">
                        <li>End-to-end encryption (E2EE) for all active data transmissions.</li>
                        <li>Air-gapped offline storage vaults for sensitive intelligence and long-term evidence preservation.</li>
                        <li>Strict role-based access control (RBAC), ensuring only the lead investigator and necessary analysts have access to your case file.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl text-white font-heading font-semibold mb-6 flex items-center gap-4"><span class="w-8 h-px bg-qavixx-copper"></span> 4. Disclosure to Third Parties & Law Enforcement</h2>
                    <p class="mb-4">{{ config('app.name') }} does not sell, rent, or lease any data. Information is only disclosed under the following strict conditions:</p>
                    <ul class="list-disc pl-6 space-y-3 text-gray-400">
                        <li><strong class="text-gray-300">Law Enforcement Agencies:</strong> We frequently bridge the gap between victims and agencies (FBI, Interpol, Europol). We will only hand over intelligence dossiers to law enforcement with your explicit written consent or when legally compelled.</li>
                        <li><strong class="text-gray-300">Legal Counsel:</strong> We share findings directly with your retained attorneys or legal team for the purposes of civil litigation or asset freezing orders (e.g., Mareva injunctions).</li>
                        <li><strong class="text-gray-300">Subpoenas & Legal Process:</strong> If we are served with a valid subpoena, we will notify you immediately (unless legally prohibited from doing so) before complying.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl text-white font-heading font-semibold mb-6 flex items-center gap-4"><span class="w-8 h-px bg-qavixx-copper"></span> 5. Data Retention & Destruction</h2>
                    <p>We retain client and investigative data only for as long as necessary to fulfill the purposes outlined in this policy or as required by law. Once an investigation is concluded and all litigation has ceased, we implement secure, cryptographic wiping protocols to permanently destroy digital artifacts, unless you explicitly request cold-storage preservation of the evidence.</p>
                </div>

                <div>
                    <h2 class="text-2xl text-white font-heading font-semibold mb-6 flex items-center gap-4"><span class="w-8 h-px bg-qavixx-copper"></span> 6. International Data Transfers</h2>
                    <p>{{ config('app.name') }} Intelligence operates globally. In the course of investigating transnational cybercrimes, your data may be transferred to, stored, and processed in jurisdictions outside of your home country. By engaging our services, you consent to these secure transfers, which are protected by stringent internal data transfer agreements that comply with GDPR and CCPA frameworks.</p>
                </div>

                <div>
                    <h2 class="text-2xl text-white font-heading font-semibold mb-6 flex items-center gap-4"><span class="w-8 h-px bg-qavixx-copper"></span> 7. Your Rights</h2>
                    <p class="mb-4">Depending on your jurisdiction, you have specific rights regarding your personal data:</p>
                    <ul class="list-disc pl-6 space-y-3 text-gray-400">
                        <li>The right to access the personal data we hold about you.</li>
                        <li>The right to request the correction of inaccurate data.</li>
                        <li>The right to request the erasure of your data (subject to legal and investigatory retention requirements).</li>
                    </ul>
                    <p class="mt-4">Please note that the right to erasure may be suspended if the data is currently part of an active criminal investigation or civil litigation.</p>
                </div>

            </div>
        </div>
    </section>
</div>
{{-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead --}}