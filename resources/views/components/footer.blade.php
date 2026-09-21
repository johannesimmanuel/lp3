<footer class="site-footer" aria-label="Corporate Institutional Footer">
    <!-- Subtle Watermark Emblem -->
    <div class="footer-watermark" aria-hidden="true"></div>

    <div class="container container--wide">
        <div class="footer-grid">
            <!-- Brand & Mission Column -->
            <div class="footer-brand">
                <a href="{{ url('/') }}" class="brand" style="color: #fff;">
                    <img class="brand-mark" src="{{ asset('assets/img/logo-mark.svg') }}" alt="Vlex Re Logo" width="32" height="38">
                    <div class="brand-text">
                        <span class="brand-name" style="color: #fff;">Vlex<span style="font-weight: 400; opacity: 0.85;">Re</span></span>
                        <span class="brand-sub" style="color: var(--gold-light);">Reinsurance Brokers</span>
                    </div>
                </a>
                <p x-text="t('footer_desc')">
                    Independent reinsurance advice, structured in Indonesia and connected to premier underwriting syndicates worldwide.
                </p>
                <div class="footer-social">
                    <a href="https://linkedin.com" class="footer-social-btn" aria-label="LinkedIn" target="_blank" rel="noopener">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.2V10.9H6.46M7.83 6.46a1.64 1.64 0 1 0 0 3.28 1.64 1.64 0 0 0 0-3.28Z"/>
                        </svg>
                    </a>
                    <a href="mailto:contact@vlexre.co.id" class="footer-social-btn" aria-label="Email Enquiry">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Company Column -->
            <div class="footer-col">
                <h4 x-text="t('footer_col_company')">Company</h4>
                <ul class="footer-links">
                    <li><a href="{{ url('/about') }}" x-text="t('footer_link_about')">About Us</a></li>
                    <li><a href="{{ url('/about#leadership') }}" x-text="t('footer_link_leadership')">Executive Leadership</a></li>
                    <li><a href="{{ url('/network') }}" x-text="t('footer_link_syndicates')">Global Syndicates</a></li>
                    <li><a href="{{ url('/contact') }}" x-text="t('footer_link_contact')">Contact & Enquiries</a></li>
                </ul>
            </div>

            <!-- Services Column -->
            <div class="footer-col">
                <h4 x-text="t('footer_col_services')">Services</h4>
                <ul class="footer-links">
                    <li><a href="{{ url('/services/property') }}" x-text="t('prod_property')">Property Treaty & Cat XOL</a></li>
                    <li><a href="{{ url('/services/marine') }}" x-text="t('prod_marine')">Marine Hull & Cargo</a></li>
                    <li><a href="{{ url('/services/energy') }}" x-text="t('prod_energy')">Energy & Petrochemicals</a></li>
                    <li><a href="{{ url('/services/financial-lines') }}" x-text="t('prod_financial')">Financial Lines & Cyber</a></li>
                    <li><a href="{{ url('/services/retakaful') }}" x-text="t('prod_retakaful')">Retakaful Syariah</a></li>
                    <li><a href="{{ url('/services/specialty') }}" x-text="t('prod_specialty')">Specialty & Complex Risks</a></li>
                </ul>
            </div>

            <!-- Offices Column -->
            <div class="footer-col">
                <h4 x-text="t('footer_col_offices')">Offices</h4>
                <div class="footer-office">
                    <b x-text="t('footer_head_office')">Head Office, Jakarta</b>
                    <span x-text="t('footer_head_addr')">Treasury Tower, 31st Floor, District 8 SCBD Lot 28, Jl. Jend. Sudirman Kav. 52-53, Jakarta 12190</span><br>
                    <span style="color: var(--gold-light); font-weight: 600;" x-text="t('footer_head_phone')">+62 21 5088 7700</span>
                </div>
                <div class="footer-office">
                    <b x-text="t('footer_rep_office')">Representative Office, Surabaya</b>
                    <span x-text="t('footer_rep_addr')">Intiland Tower, 8th Floor, Suite 802, Jl. Panglima Sudirman No. 101-103, Surabaya 60271</span><br>
                    <span style="color: var(--gold-light); font-weight: 600;" x-text="t('footer_rep_phone')">+62 31 535 8822</span>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Legal Notice -->
        <div class="footer-bottom">
            <span>
                © 2026 <span x-text="t('footer_rights')">PT Vlex Reinsurance Brokers. All rights reserved.</span>
            </span>
            <span x-text="t('footer_ojk')">
                Licensed reinsurance broker, registered with and supervised by Otoritas Jasa Keuangan (OJK). Member of APPARINDO.
            </span>
        </div>
    </div>
</footer>
