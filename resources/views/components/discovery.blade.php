<section class="section discovery-section" id="services-discovery" aria-label="Reinsurance Solutions">
    <div class="container container--wide">
        <!-- Section Header -->
        <div class="section-head">
            <h2 x-text="t('disc_h2')">Explore our reinsurance solutions and specialized practice desks.</h2>
            <p x-text="t('disc_p')">
                Structured treaty and facultative reinsurance arrangements tailored to institutional client portfolios and solvency objectives.
            </p>
        </div>

        <!-- Single Shell: Products Full-Width Grid -->
        <div class="discovery-shell">
            <div class="discovery-products-wrap">
                <div class="discovery-block-head">
                    <div class="discovery-block-title">
                        <h3 x-text="t('disc_b1_title')">Browse Products</h3>
                    </div>
                    <a href="{{ url('/services') }}" class="link-arrow">
                        <span x-text="t('disc_b1_link')">View all products</span>
                        <span aria-hidden="true">→</span>
                    </a>
                </div>

                <div class="discovery-service-grid">
                    <!-- Property -->
                    <a class="discovery-service-card" href="{{ url('/services/property') }}">
                        <img src="{{ asset('assets/img/service-property.jpg') }}" alt="Property Treaty & Cat XOL" loading="lazy">
                        <div class="discovery-service-content">
                            <span class="discovery-service-tag" x-text="t('tag_property')">Treaty & Facultative</span>
                            <h4 class="discovery-service-title" x-text="t('prod_property')">Property Treaty & Cat XOL</h4>
                        </div>
                    </a>

                    <!-- Marine -->
                    <a class="discovery-service-card" href="{{ url('/services/marine') }}">
                        <img src="{{ asset('assets/img/service-marine.jpg') }}" alt="Marine Hull & Cargo" loading="lazy">
                        <div class="discovery-service-content">
                            <span class="discovery-service-tag" x-text="t('tag_marine')">Marine & Logistics</span>
                            <h4 class="discovery-service-title" x-text="t('prod_marine')">Marine Hull & Cargo</h4>
                        </div>
                    </a>

                    <!-- Energy -->
                    <a class="discovery-service-card" href="{{ url('/services/energy') }}">
                        <img src="{{ asset('assets/img/service-energy.jpg') }}" alt="Energy & Petrochemicals" loading="lazy">
                        <div class="discovery-service-content">
                            <span class="discovery-service-tag" x-text="t('tag_energy')">Upstream & Downstream</span>
                            <h4 class="discovery-service-title" x-text="t('prod_energy')">Energy & Petrochemicals</h4>
                        </div>
                    </a>

                    <!-- Financial Lines -->
                    <a class="discovery-service-card" href="{{ url('/services/financial-lines') }}">
                        <img src="{{ asset('assets/img/service-financial.jpg') }}" alt="Financial Lines & Cyber" loading="lazy">
                        <div class="discovery-service-content">
                            <span class="discovery-service-tag" x-text="t('tag_financial')">Liability & Executive</span>
                            <h4 class="discovery-service-title" x-text="t('prod_financial')">Financial Lines & Cyber</h4>
                        </div>
                    </a>

                    <!-- Retakaful -->
                    <a class="discovery-service-card" href="{{ url('/services/retakaful') }}">
                        <img src="{{ asset('assets/img/service-retakaful.jpg') }}" alt="Retakaful Syariah" loading="lazy">
                        <div class="discovery-service-content">
                            <span class="discovery-service-tag" x-text="t('tag_retakaful')">Islamic Reinsurance</span>
                            <h4 class="discovery-service-title" x-text="t('prod_retakaful')">Retakaful Syariah</h4>
                        </div>
                    </a>

                    <!-- Specialty Risks -->
                    <a class="discovery-service-card" href="{{ url('/services/specialty') }}">
                        <img src="{{ asset('assets/img/hero-scbd-dusk.jpg') }}" alt="Specialty & Complex Risks" loading="lazy">
                        <div class="discovery-service-content">
                            <span class="discovery-service-tag" x-text="t('tag_specialty')">Custom Engineering</span>
                            <h4 class="discovery-service-title" x-text="t('prod_specialty')">Specialty & Complex Risks</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
