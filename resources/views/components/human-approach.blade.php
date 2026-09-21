<section class="section section--tint human-feature" id="approach" aria-label="Human Approach & Executive Leadership">
    <div class="container container--wide">
        <div class="human-feature-grid">
            <!-- Left: Editorial Film Frame Photo with Caption -->
            <div class="film-frame">
                <img src="{{ asset('assets/img/human-approach.jpg') }}"
                     alt="PT Vlex Reinsurance senior advisor reviewing treaty portfolio with institutional clients"
                     loading="lazy">
                <div class="film-caption">
                    <span x-text="t('human_caption_loc')">Senior-led engagement, Jakarta</span>
                    <strong x-text="t('human_caption_sub')">Direct director accountability on all placements.</strong>
                </div>
            </div>

            <!-- Right: Copy & Leadership Portraits -->
            <div class="human-feature-copy">
                <h2 x-text="t('human_h2')">Experienced specialists, involved at every stage.</h2>
                <p class="lede" x-text="t('human_lede')">
                    The senior directors you know remain directly accountable from initial actuarial review through placement, renewal, and claims adjudication. When niche technical disciplines are required, we coordinate the right specialists without obscuring responsibility.
                </p>

                <!-- 4 Executive Leadership Cards (Fictitious Names & Bespoke Generated Photos) -->
                <div class="people-row" aria-label="Vlex Reinsurance Executive Leadership">
                    <!-- Leader 1 -->
                    <div class="people-card">
                        <img src="{{ asset('assets/img/mgmt-aris.jpg') }}" alt="Drs. Aris Munandar, FCII" loading="lazy">
                        <b>Drs. Aris Munandar, FCII</b>
                        <span x-text="t('role_comm_pres')">President Commissioner</span>
                    </div>
                    <!-- Leader 2 -->
                    <div class="people-card">
                        <img src="{{ asset('assets/img/mgmt-victor.jpg') }}" alt="Victor L. Panjaitan, AAIK, ANZIIF" loading="lazy">
                        <b>Victor L. Panjaitan</b>
                        <span x-text="t('role_dir_pres')">President Director</span>
                    </div>
                    <!-- Leader 3 -->
                    <div class="people-card">
                        <img src="{{ asset('assets/img/mgmt-clarissa.jpg') }}" alt="Clarissa Danuwijaya, ACII, FSAI" loading="lazy">
                        <b>Clarissa Danuwijaya</b>
                        <span x-text="t('role_dir_treaty')">Director of Treaty</span>
                    </div>
                    <!-- Leader 4 -->
                    <div class="people-card">
                        <img src="{{ asset('assets/img/mgmt-bramantyo.jpg') }}" alt="Bramantyo Wicaksono, S.E., CRGP" loading="lazy">
                        <b>Bramantyo Wicaksono</b>
                        <span x-text="t('role_dir_ops')">Director of Operations</span>
                    </div>
                </div>

                <a class="link-arrow" href="{{ url('/about#leadership') }}">
                    <span x-text="t('human_cta')">Meet our leadership</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M5 12h14m-6-6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
