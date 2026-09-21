<section class="section track-record-section" aria-label="Scale and Proven Track Record">
    <div class="container container--wide">
        <!-- Section Head -->
        <div class="section-head">
            <h2 x-text="t('track_h2')">Technical depth that strengthens personal advisory</h2>
            <p x-text="t('track_p')">
                More than 95 professionals, comprehensive domestic insurer relationships, and eight global underwriting syndicates broaden the capital resources we coordinate for clients.
            </p>
        </div>

        <div class="track-record-layout">
            <!-- Left: Independent Recognition Feature Card (Media Asuransi Market Leaders) -->
            <article class="track-feature">
                <img src="{{ asset('assets/img/recognition-award.jpg') }}"
                     alt="Indonesian Market Leaders Reinsurance Award Trophy"
                     loading="lazy">
                <div class="track-feature-body">
                    <div>
                        <span x-text="t('track_badge')">Independent recognition</span>
                        <strong class="track-rank stat-num" x-text="t('track_rank')">4th-ranked</strong>
                        <h3 x-text="t('track_rank_title')">National Reinsurance Broker, 2025</h3>
                        <p x-text="t('track_rank_desc')">Recognised in Media Asuransi's July 2025 Market Leaders ranking.</p>
                    </div>
                    <div>
                        <a href="{{ url('/about#recognition') }}" class="btn btn--on-dark btn--sm">
                            <span x-text="t('track_view')">View recognition</span>
                            <span aria-hidden="true">↗</span>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Right: 6 Metric Tiles -->
            <div class="track-metrics">
                <div class="track-metric-tile">
                    <b class="stat-num" x-text="t('stat_1_val')">18+</b>
                    <span x-text="t('stat_1_lbl')">Years in business</span>
                    <p x-text="t('stat_1_sub')">Operating continuously since 2008.</p>
                </div>
                <div class="track-metric-tile">
                    <b class="stat-num" x-text="t('stat_2_val')">95+</b>
                    <span x-text="t('stat_2_lbl')">Reinsurance specialists</span>
                    <p x-text="t('stat_2_sub')">Actuaries, treaty brokers, and risk engineers.</p>
                </div>
                <div class="track-metric-tile">
                    <b class="stat-num" x-text="t('stat_3_val')">45+</b>
                    <span x-text="t('stat_3_lbl')">General insurance partners</span>
                    <p x-text="t('stat_3_sub')">Unlocking tier-1 capacity across the nation.</p>
                </div>
                <div class="track-metric-tile">
                    <b class="stat-num" x-text="t('stat_4_val')">25+</b>
                    <span x-text="t('stat_4_lbl')">Health & life partners</span>
                    <p x-text="t('stat_4_sub')">Surplus relief and group life programs.</p>
                </div>
                <div class="track-metric-tile">
                    <b class="stat-num" x-text="t('stat_5_val')">9+</b>
                    <span x-text="t('stat_5_lbl')">Registered OJK Experts</span>
                    <p x-text="t('stat_5_sub')">Certified reinsurance broking leadership.</p>
                </div>
                <div class="track-metric-tile">
                    <b class="stat-num" x-text="t('stat_6_val')">8</b>
                    <span x-text="t('stat_6_lbl')">Global syndicates & hubs</span>
                    <p x-text="t('stat_6_sub')">London, Singapore, Zurich, and GCC markets.</p>
                </div>
            </div>
        </div>
    </div>
</section>
