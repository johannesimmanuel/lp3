<x-layout :title="'Contact & Confidential Enquiry | PT Vlex Reinsurance Brokers'">
    <!-- Page Header Banner -->
    <section class="section section--deep" style="padding-top: 160px; padding-bottom: 80px; position: relative; overflow: hidden;">
        <div class="footer-watermark" style="opacity: 0.1;" aria-hidden="true"></div>
        <div class="container container--wide">
            <h1 style="color: #fff; font-size: clamp(2.5rem, 4.5vw, 3.8rem); margin-bottom: 20px;" x-html="t('contact_h1')">
                Start a Confidential Discussion.<br>
                <em style="font-family: var(--font-quote); color: var(--gold-light);">Treasury Tower, District 8 SCBD.</em>
            </h1>
            <p style="max-width: 740px; font-size: 1.25rem; color: var(--on-dark-soft); line-height: 1.6;" x-text="t('contact_intro')">
                Reach out to our leadership team for independent treaty evaluations, facultative risk engineering surveys, or reinsurance portfolio structuring under complete confidentiality.
            </p>
        </div>
    </section>

    <!-- Main Contact & Form Section -->
    <section class="section">
        <div class="container container--wide">
            <div class="contact-grid-layout">
                <!-- Left: Form (Full width on mobile) -->
                <div class="contact-form-panel">
                    <h2 style="font-size: 1.75rem; margin-bottom: 8px;" x-text="t('contact_form_title')">Institutional Enquiry</h2>
                    <p style="color: var(--ink-mute); font-size: 0.95rem; margin-bottom: 32px;" x-text="t('contact_form_desc')">
                        Please submit your corporate details. A licensed senior reinsurance broker will reach out within one business day.
                    </p>

                    @if(session('status'))
                        <div style="padding: 16px 20px; background: #EBF8EE; border: 1px solid #84D69B; border-radius: var(--radius); color: #1B5E20; font-size: 0.9375rem; margin-bottom: 24px;">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('/contact') }}" method="POST" class="clean-form">
                        @csrf

                        <!-- Row 1: Full Name & Company -->
                        <div class="clean-form-row">
                            <div class="clean-field">
                                <label for="contact_name" class="clean-label">
                                    <span x-show="lang === 'en'">FULL NAME *</span>
                                    <span x-show="lang === 'id'" x-cloak>NAMA LENGKAP *</span>
                                </label>
                                <input type="text" id="contact_name" name="contact_name" required
                                       class="clean-input" autocomplete="name">
                            </div>
                            <div class="clean-field">
                                <label for="institution_name" class="clean-label">
                                    <span x-show="lang === 'en'">COMPANY</span>
                                    <span x-show="lang === 'id'" x-cloak>PERUSAHAAN</span>
                                </label>
                                <input type="text" id="institution_name" name="institution_name"
                                       class="clean-input" autocomplete="organization">
                            </div>
                        </div>

                        <!-- Row 2: Email & Phone -->
                        <div class="clean-form-row">
                            <div class="clean-field">
                                <label for="email" class="clean-label">
                                    <span x-show="lang === 'en'">EMAIL *</span>
                                    <span x-show="lang === 'id'" x-cloak>EMAIL *</span>
                                </label>
                                <input type="email" id="email" name="email" required
                                       class="clean-input" autocomplete="email">
                            </div>
                            <div class="clean-field">
                                <label for="phone" class="clean-label">
                                    <span x-show="lang === 'en'">PHONE</span>
                                    <span x-show="lang === 'id'" x-cloak>TELEPON</span>
                                </label>
                                <input type="tel" id="phone" name="phone"
                                       class="clean-input" autocomplete="tel">
                            </div>
                        </div>

                        <!-- Row 3: What Can We Help With? -->
                        <div class="clean-field">
                            <label for="service_interest" class="clean-label">
                                <span x-show="lang === 'en'">WHAT CAN WE HELP WITH?</span>
                                <span x-show="lang === 'id'" x-cloak>BAGAIMANA KAMI BISA MEMBANTU?</span>
                            </label>
                            <div class="clean-select-wrap">
                                <select id="service_interest" name="service_interest" class="clean-select">
                                    <option value="general" x-text="lang === 'id' ? 'Pertanyaan umum' : 'General enquiry'">General enquiry</option>
                                    <option value="property" x-text="t('prod_property')">Property Treaty & Catastrophe XOL</option>
                                    <option value="marine" x-text="t('prod_marine')">Marine Hull, Cargo & Specie</option>
                                    <option value="energy" x-text="t('prod_energy')">Energy & Petrochemicals</option>
                                    <option value="financial-lines" x-text="t('prod_financial')">Financial Lines & Cyber Risk</option>
                                    <option value="retakaful" x-text="t('prod_retakaful')">Retakaful (Islamic Reinsurance)</option>
                                    <option value="specialty" x-text="t('prod_specialty')">Specialty & Complex Risks</option>
                                </select>
                                <div class="clean-select-chevron" aria-hidden="true">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Row 4: Message -->
                        <div class="clean-field">
                            <label for="message" class="clean-label">
                                <span x-show="lang === 'en'">MESSAGE *</span>
                                <span x-show="lang === 'id'" x-cloak>PESAN *</span>
                            </label>
                            <textarea id="message" name="message" rows="4" required class="clean-textarea"></textarea>
                        </div>

                        <button type="submit" class="clean-submit-btn">
                            <span x-text="lang === 'id' ? 'Kirim Pesan' : 'Send Message'">Send Message</span>
                            <span aria-hidden="true">→</span>
                        </button>
                    </form>
                </div>

                <!-- Right: Office Addresses & Contacts (SS3 - Placed Below Form on Mobile) -->
                <div class="contact-offices-panel">
                    <!-- Head Office SCBD -->
                    <div style="background: var(--paper-2); border: 1px solid var(--line); border-radius: var(--radius); padding: 32px;">
                        <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.12em; color: var(--maroon); font-weight: 700; display: block; margin-bottom: 8px;" x-text="t('contact_side_addr_title')">Head Office</span>
                        <h3 style="font-size: 1.35rem; margin-bottom: 12px;" x-text="lang === 'id' ? 'Kantor Pusat Jakarta' : 'Jakarta Head Office'">Jakarta Head Office</h3>
                        <p style="font-size: 0.95rem; color: var(--ink-body); line-height: 1.6; margin-bottom: 16px;">
                            Treasury Tower, 31st Floor<br>
                            District 8 SCBD Lot 28<br>
                            Jl. Jend. Sudirman Kav. 52-53<br>
                            Jakarta Selatan 12190, Indonesia
                        </p>
                        <div style="font-size: 0.9rem; color: var(--ink-mute); line-height: 1.8;">
                            <div><strong x-text="lang === 'id' ? 'Telepon:' : 'Telephone:'">Telephone:</strong> +62 21 5088 7700</div>
                            <div><strong x-text="lang === 'id' ? 'Faksimili:' : 'Facsimile:'">Facsimile:</strong> +62 21 5088 7701</div>
                            <div><strong>Email:</strong> contact@vlexre.co.id</div>
                        </div>
                    </div>

                    <!-- Representative Office Surabaya -->
                    <div style="background: var(--paper-2); border: 1px solid var(--line); border-radius: var(--radius); padding: 32px;">
                        <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.12em; color: var(--maroon); font-weight: 700; display: block; margin-bottom: 8px;" x-text="t('contact_side_rep_title')">Representative Office</span>
                        <h3 style="font-size: 1.35rem; margin-bottom: 12px;" x-text="lang === 'id' ? 'Kantor Perwakilan Surabaya' : 'Surabaya Office'">Surabaya Office</h3>
                        <p style="font-size: 0.95rem; color: var(--ink-body); line-height: 1.6; margin-bottom: 16px;">
                            Intiland Tower, 8th Floor, Suite 802<br>
                            Jl. Panglima Sudirman No. 101-103<br>
                            Surabaya 60271, Jawa Timur, Indonesia
                        </p>
                        <div style="font-size: 0.9rem; color: var(--ink-mute); line-height: 1.8;">
                            <div><strong x-text="lang === 'id' ? 'Telepon:' : 'Telephone:'">Telephone:</strong> +62 31 535 8822</div>
                            <div><strong>Email:</strong> surabaya@vlexre.co.id</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
