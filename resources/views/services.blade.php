<x-layout :title="'Reinsurance Solutions & Products | PT Vlex Reinsurance Brokers'">
    <!-- Page Header Banner -->
    <section class="section section--deep" style="padding-top: 160px; padding-bottom: 80px; position: relative; overflow: hidden;">
        <div class="footer-watermark" style="opacity: 0.1;" aria-hidden="true"></div>
        <div class="container container--wide">
            <h1 style="color: #fff; font-size: clamp(2.5rem, 4.5vw, 3.8rem); margin-bottom: 20px;" x-html="t('serv_h1')">
                Comprehensive Risk Placement.<br>
                <em style="font-family: var(--font-quote); color: var(--gold-light);">Tailored Treaty Engineering.</em>
            </h1>
            <p style="max-width: 760px; font-size: 1.25rem; color: var(--on-dark-soft); line-height: 1.6;" x-text="t('serv_intro')">
                From high-capacity catastrophe excess of loss treaties to bespoke single-risk facultative placements, Vlex Re provides analytical underwriting support and tier-1 syndication across all major insurance classes.
            </p>
        </div>
    </section>

    <!-- Services Detailed Grid -->
    <section class="section" id="products">
        <div class="container container--wide">
            <div class="section-head">
                <h2 x-text="t('serv_grid_h2')">Structured reinsurance across conventional and Islamic sectors</h2>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(360px, 1fr)); gap: 36px;">
                <!-- Product 1: Property -->
                <article style="background: var(--paper); border: 1px solid var(--line); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-soft); display: flex; flex-direction: column;">
                    <img src="{{ asset('assets/img/service-property.jpg') }}" alt="Property Reinsurance" style="width: 100%; height: 220px; object-fit: cover;">
                    <div style="padding: 32px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.12em; color: var(--maroon); font-weight: 700; display: block; margin-bottom: 6px;" x-text="t('tag_property')">Treaty & Facultative</span>
                            <h3 style="font-size: 1.4rem; margin-bottom: 12px;" x-text="t('prod_property')">Property Treaty & Cat XOL</h3>
                            <p style="color: var(--ink-mute); font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;" x-text="t('serv_prop_desc')">
                                Sophisticated proportional quota share, surplus, and multi-layer catastrophe excess of loss (Cat XOL) modeling protecting insurance balance sheets against earthquake, flood, and secondary peril events.
                            </p>
                            <ul style="font-size: 0.875rem; color: var(--ink-body); line-height: 1.8; margin-bottom: 24px;">
                                <template x-if="lang === 'id'">
                                    <div>
                                        <li>• Catastrophe Excess of Loss (Cat XOL)</li>
                                        <li>• Risk Excess of Loss & Stop Loss</li>
                                        <li>• Fakultatif Property All Risks (PAR) Berbahaya Tinggi</li>
                                        <li>• Gangguan Usaha (Business Interruption / DSU)</li>
                                    </div>
                                </template>
                                <template x-if="lang === 'en'">
                                    <div>
                                        <li>• Catastrophe Excess of Loss (Cat XOL)</li>
                                        <li>• Risk Excess of Loss & Stop Loss</li>
                                        <li>• Property All Risks (PAR) High-Hazard Facultative</li>
                                        <li>• Business Interruption & Delay in Start-Up (DSU)</li>
                                    </div>
                                </template>
                            </ul>
                        </div>
                        <a href="{{ url('/services/property') }}" class="link-arrow">
                            <span x-text="lang === 'id' ? 'Pelajari spesifikasi properti' : 'Explore property specifications'">Explore property specifications</span>
                            <span>→</span>
                        </a>
                    </div>
                </article>

                <!-- Product 2: Marine -->
                <article style="background: var(--paper); border: 1px solid var(--line); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-soft); display: flex; flex-direction: column;">
                    <img src="{{ asset('assets/img/service-marine.jpg') }}" alt="Marine Reinsurance" style="width: 100%; height: 220px; object-fit: cover;">
                    <div style="padding: 32px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.12em; color: var(--maroon); font-weight: 700; display: block; margin-bottom: 6px;" x-text="t('tag_marine')">Maritime & Logistics</span>
                            <h3 style="font-size: 1.4rem; margin-bottom: 12px;" x-text="t('prod_marine')">Marine Hull, Cargo & Specie</h3>
                            <p style="color: var(--ink-mute); font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;" x-text="t('serv_marine_desc')">
                                Tailored treaty facilities and facultative binders for commercial shipping fleets, deepwater offshore supply vessels, port authority liability, project cargo, and fine art & specie.
                            </p>
                            <ul style="font-size: 0.875rem; color: var(--ink-body); line-height: 1.8; margin-bottom: 24px;">
                                <template x-if="lang === 'id'">
                                    <div>
                                        <li>• Rangka Kapal Niaga & Tongkang (Hull & Machinery)</li>
                                        <li>• Fasilitas Tanggung Gugat Pelabuhan & Terminal</li>
                                        <li>• Transit Kargo Proyek Bernilai Tinggi</li>
                                        <li>• Uang Dalam Pengangkutan, Vault & Barang Antik (Specie)</li>
                                    </div>
                                </template>
                                <template x-if="lang === 'en'">
                                    <div>
                                        <li>• Blue Water & Brown Water Hull & Machinery</li>
                                        <li>• Ports & Terminals Package Policies</li>
                                        <li>• High-Value Project Cargo Transit</li>
                                        <li>• Fine Art, Cash in Transit & Vault Specie</li>
                                    </div>
                                </template>
                            </ul>
                        </div>
                        <a href="{{ url('/services/marine') }}" class="link-arrow">
                            <span x-text="lang === 'id' ? 'Pelajari spesifikasi maritim' : 'Explore marine specifications'">Explore marine specifications</span>
                            <span>→</span>
                        </a>
                    </div>
                </article>

                <!-- Product 3: Energy & Petrochemical -->
                <article style="background: var(--paper); border: 1px solid var(--line); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-soft); display: flex; flex-direction: column;">
                    <img src="{{ asset('assets/img/service-energy.jpg') }}" alt="Energy Reinsurance" style="width: 100%; height: 220px; object-fit: cover;">
                    <div style="padding: 32px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.12em; color: var(--maroon); font-weight: 700; display: block; margin-bottom: 6px;" x-text="t('tag_energy')">Energy & Resources</span>
                            <h3 style="font-size: 1.4rem; margin-bottom: 12px;" x-text="t('prod_energy')">Energy & Petrochemicals</h3>
                            <p style="color: var(--ink-mute); font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;" x-text="t('serv_energy_desc')">
                                Direct access to leading upstream, midstream, and downstream energy syndicates across Singapore and London for offshore platforms, refineries, LNG terminals, and geothermal power plants.
                            </p>
                            <ul style="font-size: 0.875rem; color: var(--ink-body); line-height: 1.8; margin-bottom: 24px;">
                                <template x-if="lang === 'id'">
                                    <div>
                                        <li>• Fasilitas Eksplorasi & Produksi Lepas Pantai</li>
                                        <li>• Kilang Minyak & Kompleks Pengolahan Kimia Hilir</li>
                                        <li>• Pembangkit Listrik Geotermal, Hidro & Surya</li>
                                        <li>• Operator's Extra Expense (OEE) & Control of Well</li>
                                    </div>
                                </template>
                                <template x-if="lang === 'en'">
                                    <div>
                                        <li>• Offshore Exploration & Production Facilities</li>
                                        <li>• Downstream Refinery & Chemical Processing</li>
                                        <li>• Geothermal, Hydroelectric & Solar Utilities</li>
                                        <li>• Operator’s Extra Expense (OEE) & Control of Well</li>
                                    </div>
                                </template>
                            </ul>
                        </div>
                        <a href="{{ url('/services/energy') }}" class="link-arrow">
                            <span x-text="lang === 'id' ? 'Pelajari spesifikasi energi' : 'Explore energy specifications'">Explore energy specifications</span>
                            <span>→</span>
                        </a>
                    </div>
                </article>

                <!-- Product 4: Financial Lines -->
                <article style="background: var(--paper); border: 1px solid var(--line); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-soft); display: flex; flex-direction: column;">
                    <img src="{{ asset('assets/img/service-financial.jpg') }}" alt="Financial Lines Reinsurance" style="width: 100%; height: 220px; object-fit: cover;">
                    <div style="padding: 32px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.12em; color: var(--maroon); font-weight: 700; display: block; margin-bottom: 6px;" x-text="t('tag_financial')">Liability & Governance</span>
                            <h3 style="font-size: 1.4rem; margin-bottom: 12px;" x-text="t('prod_financial')">Financial Lines & Cyber</h3>
                            <p style="color: var(--ink-mute); font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;" x-text="t('serv_fin_desc')">
                                Safeguarding enterprise balance sheets and corporate boards against complex liability lawsuits, regulatory enforcement proceedings, cyber breach extortion, and financial crime.
                            </p>
                            <ul style="font-size: 0.875rem; color: var(--ink-body); line-height: 1.8; margin-bottom: 24px;">
                                <template x-if="lang === 'id'">
                                    <div>
                                        <li>• Tanggung Gugat Direksi & Komisaris (D&O)</li>
                                        <li>• Asuransi Profesional Lembaga Keuangan (FIPI)</li>
                                        <li>• Risiko Siber Korporasi & Gangguan Bisnis</li>
                                        <li>• Kejahatan Keuangan Komersial & Bankers Blanket Bond (BBB)</li>
                                    </div>
                                </template>
                                <template x-if="lang === 'en'">
                                    <div>
                                        <li>• Directors & Officers Liability (D&O)</li>
                                        <li>• Professional Indemnity for Financial Institutions</li>
                                        <li>• Cyber Enterprise Risk & Business Disruption</li>
                                        <li>• Commercial Crime & Bankers Blanket Bond (BBB)</li>
                                    </div>
                                </template>
                            </ul>
                        </div>
                        <a href="{{ url('/services/financial-lines') }}" class="link-arrow">
                            <span x-text="lang === 'id' ? 'Pelajari spesifikasi lini keuangan' : 'Explore financial specifications'">Explore financial specifications</span>
                            <span>→</span>
                        </a>
                    </div>
                </article>

                <!-- Product 5: Retakaful -->
                <article style="background: var(--paper); border: 1px solid var(--line); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-soft); display: flex; flex-direction: column;">
                    <img src="{{ asset('assets/img/service-retakaful.jpg') }}" alt="Retakaful Islamic Reinsurance" style="width: 100%; height: 220px; object-fit: cover;">
                    <div style="padding: 32px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.12em; color: var(--gold); font-weight: 700; display: block; margin-bottom: 6px;" x-text="t('tag_retakaful')">Islamic Reinsurance</span>
                            <h3 style="font-size: 1.4rem; margin-bottom: 12px;" x-text="t('prod_retakaful')">Retakaful Syariah</h3>
                            <p style="color: var(--ink-mute); font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;" x-text="t('serv_retak_desc')">
                                Certified Sharia-compliant reinsurance broking adhering to DSN-MUI and AAOIFI standards. Ensuring risk mutualization purity and transparent Tabarru’ fund pool administration.
                            </p>
                            <ul style="font-size: 0.875rem; color: var(--ink-body); line-height: 1.8; margin-bottom: 24px;">
                                <template x-if="lang === 'id'">
                                    <div>
                                        <li>• Treaty Retakaful Proporsional & Non-Proporsional</li>
                                        <li>• Struktur Akad Wakalah bi al-Ujrah & Mudharabah</li>
                                        <li>• Penyatuan Surplus Risiko Asuransi Jiwa & Kesehatan Syariah</li>
                                        <li>• Sindikasi Retakaful Kawasan Teluk (GCC) & Asia Tenggara</li>
                                    </div>
                                </template>
                                <template x-if="lang === 'en'">
                                    <div>
                                        <li>• Sharia Proportional & Non-Proportional Treaties</li>
                                        <li>• Wakalah bi al-Ujrah & Mudharabah Treaty Structures</li>
                                        <li>• Sharia Family & Takaful Health Surplus Pooling</li>
                                        <li>• GCC & Southeast Asian Retakaful Syndication</li>
                                    </div>
                                </template>
                            </ul>
                        </div>
                        <a href="{{ url('/services/retakaful') }}" class="link-arrow">
                            <span x-text="lang === 'id' ? 'Pelajari spesifikasi retakaful' : 'Explore retakaful specifications'">Explore retakaful specifications</span>
                            <span>→</span>
                        </a>
                    </div>
                </article>

                <!-- Product 6: Specialty Risks -->
                <article style="background: var(--paper); border: 1px solid var(--line); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-soft); display: flex; flex-direction: column;">
                    <img src="{{ asset('assets/img/hero-scbd-dusk.jpg') }}" alt="Specialty Reinsurance" style="width: 100%; height: 220px; object-fit: cover;">
                    <div style="padding: 32px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.12em; color: var(--maroon); font-weight: 700; display: block; margin-bottom: 6px;" x-text="t('tag_specialty')">Complex Placements</span>
                            <h3 style="font-size: 1.4rem; margin-bottom: 12px;" x-text="t('prod_specialty')">Specialty & Complex Risks</h3>
                            <p style="color: var(--ink-mute); font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;" x-text="t('serv_spec_desc')">
                                Structured solutions for non-standard risks requiring bespoke policy wordings, including mega civil engineering projects, aviation hull & liability, trade credit, and political violence.
                            </p>
                            <ul style="font-size: 0.875rem; color: var(--ink-body); line-height: 1.8; margin-bottom: 24px;">
                                <template x-if="lang === 'id'">
                                    <div>
                                        <li>• Contractors' All Risks (CAR) / Erection All Risks (EAR) Proyek Nasional</li>
                                        <li>• Rangka Pesawat, Liabilitas Penumpang & Operator Bandara</li>
                                        <li>• Kerusuhan Politik, Sabotase & Terorisme (PVT)</li>
                                        <li>• Asuransi Kredit Perdagangan & Jaminan Surety Bond</li>
                                    </div>
                                </template>
                                <template x-if="lang === 'en'">
                                    <div>
                                        <li>• Contractors' All Risks (CAR) / Erection All Risks (EAR)</li>
                                        <li>• Aviation Hull, Airport Operators & Satellite Space</li>
                                        <li>• Political Violence, Sabotage & Terrorism (PVT)</li>
                                        <li>• Trade Credit & Performance Surety Guarantees</li>
                                    </div>
                                </template>
                            </ul>
                        </div>
                        <a href="{{ url('/services/specialty') }}" class="link-arrow">
                            <span x-text="lang === 'id' ? 'Pelajari spesifikasi risiko khusus' : 'Explore specialty specifications'">Explore specialty specifications</span>
                            <span>→</span>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <x-cta-banner />
</x-layout>
