<section class="hero" aria-label="Hero Introduction">
    <!-- Atmospheric Visual Scrim & SCBD Skyline Background -->
    <div class="hero-media-wrap">
        <img class="hero-bg-img"
             src="{{ asset('assets/img/hero-scbd-dusk.jpg') }}"
             alt="SCBD Jakarta Financial District Twilight Skyline"
             loading="eager">
        <div class="hero-scrim"></div>
    </div>

    <!-- Hero Content Container -->
    <div class="container container--wide">
        <div class="hero-inner">
            <!-- Prestigious Three-tier Headline -->
            <h1>
                <span x-text="t('hero_h1_1')">Local insight.</span><br>
                <span x-text="t('hero_h1_2')">Analytical precision.</span><br>
                <em x-text="t('hero_h1_3')">Global capital.</em>
            </h1>

            <!-- Warm Gold Horizontal Rule -->
            <div class="hero-rule"></div>

            <!-- Action Triggers -->
            <div class="hero-actions">
                <a class="btn btn--on-dark" href="{{ url('/contact') }}">
                    <span x-text="t('hero_btn_discuss')">Discuss your reinsurance programme</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M5 12h14m-6-6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <a class="btn btn--ghost-dark" href="{{ url('/services') }}">
                    <span x-text="t('hero_btn_explore')">Explore our services</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Hero Stat Rail Strip (Faithfully Replicating Talisman) -->
    <div class="hero-rail">
        <div class="container container--wide">
            <div class="hero-rail-grid">
                <div class="hero-rail-item">
                    <b class="stat-num">18+</b>
                    <span x-text="t('rail_years')">Years</span>
                </div>
                <div class="hero-rail-item">
                    <b class="stat-num">95+</b>
                    <span x-text="t('rail_pros')">Professionals</span>
                </div>
                <div class="hero-rail-item">
                    <b class="stat-num">4th-ranked</b>
                    <span x-text="t('rail_rank')">National Intermediary, 2025</span>
                </div>
                <div class="hero-rail-item">
                    <b class="stat-num">8</b>
                    <span x-text="t('rail_networks')">Global Syndicates</span>
                </div>
            </div>
        </div>
    </div>
</section>
