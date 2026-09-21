<x-layout :title="'About The Firm | PT Vlex Reinsurance Brokers'">
    <!-- Page Header Banner -->
    <section class="section section--deep" style="padding-top: 160px; padding-bottom: 80px; position: relative; overflow: hidden;">
        <div class="footer-watermark" style="opacity: 0.1;" aria-hidden="true"></div>
        <div class="container container--wide">
            <h1 style="color: #fff; font-size: clamp(2.5rem, 4.5vw, 3.8rem); margin-bottom: 20px;" x-html="t('about_h1')">
                Institutional Integrity.<br>
                <em style="font-family: var(--font-quote); color: var(--gold-light);">Analytical Precision.</em>
            </h1>
            <p style="max-width: 720px; font-size: 1.25rem; color: var(--on-dark-soft); line-height: 1.6;" x-text="t('about_intro')">
                Founded in 2008, PT Vlex Reinsurance has established itself as one of Indonesia's premier licensed reinsurance intermediaries, bridging domestic risk portfolios with tier-1 international syndicates.
            </p>
        </div>
    </section>

    <!-- Narrative Section: Heritage & Methodology -->
    <section class="section">
        <div class="container container--wide">
            <div class="split">
                <div class="split-content">
                    <h2 x-text="t('about_heritage_h2')">Disciplined advocacy through 18 years of market evolution.</h2>
                    <p class="lede" x-text="t('about_heritage_lede')">
                        As Indonesian regulatory solvency requirements transitioned under OJK directives (including POJK 23/2023 capital tiering), Vlex Re pioneered analytical reinsurance modeling that maximizes balance-sheet efficiency.
                    </p>
                    <p x-text="t('about_heritage_p2')">
                        We operate on an institutional fiduciary model: independent from direct insurers, fiercely advocating for ceding companies during contract wording negotiation and catastrophic claims recovery. Our actuarial desk works directly with global underwriters in London, Singapore, and Zurich to structure optimal retention attachment points.
                    </p>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-top: 32px;">
                        <div style="padding: 20px; background: var(--paper-2); border-left: 3px solid var(--maroon); border-radius: 4px;">
                            <b style="font-size: 1.5rem; color: var(--maroon);" class="stat-num">100%</b>
                            <span style="display: block; font-size: 0.875rem; color: var(--ink-mute); font-weight: 600;" x-text="t('about_stat_ojk')">OJK Regulatory Compliance</span>
                        </div>
                        <div style="padding: 20px; background: var(--paper-2); border-left: 3px solid var(--gold); border-radius: 4px;">
                            <b style="font-size: 1.5rem; color: var(--gold);" class="stat-num">$3.8B+</b>
                            <span style="display: block; font-size: 0.875rem; color: var(--ink-mute); font-weight: 600;" x-text="t('about_stat_synd')">Total Insured Values Syndicated</span>
                        </div>
                    </div>
                </div>

                <div class="split-media">
                    <img src="{{ asset('assets/img/human-approach.jpg') }}" alt="Vlex Reinsurance Executive Boardroom" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Executive Leadership Section -->
    <section class="section section--tint" id="leadership">
        <div class="container container--wide">
            <div class="section-head">
                <h2 x-text="t('about_board_h2')">The Board of Commissioners and Directors</h2>
                <p x-text="t('about_board_p')">
                    Our leadership combines seasoned insurance broking veterans, accredited actuaries, and risk engineers with decades of international market experience.
                </p>
            </div>

            <!-- Board of Commissioners -->
            <div style="margin-bottom: 56px;">
                <h3 style="font-size: 1.25rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--maroon); margin-bottom: 24px; padding-bottom: 8px; border-bottom: 1px solid var(--line);" x-text="t('about_boc_title')">
                    Board of Commissioners
                </h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 32px;">
                    @if(isset($commissioners) && $commissioners->isNotEmpty())
                        @foreach($commissioners as $c)
                            <div style="background: var(--paper); border: 1px solid var(--line); border-radius: var(--radius); overflow: hidden; padding: 24px; box-shadow: var(--shadow-soft);">
                                <img src="{{ asset($c->photo ?: 'assets/img/mgmt-aris.jpg') }}" alt="{{ $c->name }}" style="width: 100%; aspect-ratio: 1/1; object-fit: cover; border-radius: var(--radius); margin-bottom: 20px;">
                                <h4 style="font-size: 1.25rem; margin-bottom: 4px;">{{ $c->name }}</h4>
                                <span style="font-size: 0.8125rem; font-weight: 700; color: var(--maroon); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 12px;">
                                    <span x-show="lang === 'en'">{{ $c->role }}</span>
                                    <span x-show="lang === 'id'">{{ $c->role_id ?: $c->role }}</span>
                                </span>
                                <p style="font-size: 0.875rem; color: var(--ink-mute); line-height: 1.6;">
                                    <span x-show="lang === 'en'">{{ $c->bio }}</span>
                                    <span x-show="lang === 'id'">{{ $c->bio_id ?: $c->bio }}</span>
                                </p>
                            </div>
                        @endforeach
                    @else
                        <!-- Commissioner 1 -->
                        <div style="background: var(--paper); border: 1px solid var(--line); border-radius: var(--radius); overflow: hidden; padding: 24px; box-shadow: var(--shadow-soft);">
                            <img src="{{ asset('assets/img/mgmt-aris.jpg') }}" alt="Drs. Aris Munandar, FCII" style="width: 100%; aspect-ratio: 1/1; object-fit: cover; border-radius: var(--radius); margin-bottom: 20px;">
                            <h4 style="font-size: 1.25rem; margin-bottom: 4px;">Drs. Aris Munandar, FCII</h4>
                            <span style="font-size: 0.8125rem; font-weight: 700; color: var(--maroon); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 12px;" x-text="t('role_comm_pres')">President Commissioner</span>
                            <p style="font-size: 0.875rem; color: var(--ink-mute); line-height: 1.6;" x-text="t('about_aris_desc')">
                                Over 35 years in the Southeast Asian reinsurance industry. Fellow of the Chartered Insurance Institute (UK) and former advisor to national insurance regulatory committees.
                            </p>
                        </div>

                        <!-- Commissioner 2 -->
                        <div style="background: var(--paper); border: 1px solid var(--line); border-radius: var(--radius); overflow: hidden; padding: 24px; box-shadow: var(--shadow-soft);">
                            <img src="{{ asset('assets/img/mgmt-victor.jpg') }}" alt="Prof. Dr. Hendra Suwarno, S.E., M.B.A." style="width: 100%; aspect-ratio: 1/1; object-fit: cover; border-radius: var(--radius); margin-bottom: 20px; filter: grayscale(10%);">
                            <h4 style="font-size: 1.25rem; margin-bottom: 4px;">Prof. Dr. Hendra Suwarno, S.E., M.B.A.</h4>
                            <span style="font-size: 0.8125rem; font-weight: 700; color: var(--maroon); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 12px;" x-text="t('role_comm_ind')">Independent Commissioner</span>
                            <p style="font-size: 0.875rem; color: var(--ink-mute); line-height: 1.6;" x-text="t('about_hendra_desc')">
                                Senior financial economist specializing in corporate governance, capital market solvency, and institutional audit committees across public financial institutions.
                            </p>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Board of Directors -->
            <div>
                <h3 style="font-size: 1.25rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--maroon); margin-bottom: 24px; padding-bottom: 8px; border-bottom: 1px solid var(--line);" x-text="t('about_bod_title')">
                    Board of Directors
                </h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 32px;">
                    @if(isset($directors) && $directors->isNotEmpty())
                        @foreach($directors as $d)
                            <div style="background: var(--paper); border: 1px solid var(--line); border-radius: var(--radius); overflow: hidden; padding: 24px; box-shadow: var(--shadow-soft);">
                                <img src="{{ asset($d->photo ?: 'assets/img/mgmt-victor.jpg') }}" alt="{{ $d->name }}" style="width: 100%; aspect-ratio: 1/1; object-fit: cover; border-radius: var(--radius); margin-bottom: 20px;">
                                <h4 style="font-size: 1.25rem; margin-bottom: 4px;">{{ $d->name }}</h4>
                                <span style="font-size: 0.8125rem; font-weight: 700; color: var(--maroon); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 12px;">
                                    <span x-show="lang === 'en'">{{ $d->role }}</span>
                                    <span x-show="lang === 'id'">{{ $d->role_id ?: $d->role }}</span>
                                </span>
                                <p style="font-size: 0.875rem; color: var(--ink-mute); line-height: 1.6;">
                                    <span x-show="lang === 'en'">{{ $d->bio }}</span>
                                    <span x-show="lang === 'id'">{{ $d->bio_id ?: $d->bio }}</span>
                                </p>
                            </div>
                        @endforeach
                    @else
                        <!-- Director 1 -->
                        <div style="background: var(--paper); border: 1px solid var(--line); border-radius: var(--radius); overflow: hidden; padding: 24px; box-shadow: var(--shadow-soft);">
                            <img src="{{ asset('assets/img/mgmt-victor.jpg') }}" alt="Victor L. Panjaitan, AAIK, ANZIIF" style="width: 100%; aspect-ratio: 1/1; object-fit: cover; border-radius: var(--radius); margin-bottom: 20px;">
                            <h4 style="font-size: 1.25rem; margin-bottom: 4px;">Victor L. Panjaitan, AAIK, ANZIIF</h4>
                            <span style="font-size: 0.8125rem; font-weight: 700; color: var(--maroon); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 12px;" x-text="t('role_dir_pres')">President Director</span>
                            <p style="font-size: 0.875rem; color: var(--ink-mute); line-height: 1.6;" x-text="t('about_victor_desc')">
                                Directs company strategic placement and global reinsurance syndication across Lloyd's and Asian market hubs. Senior Fellow of ANZIIF with 24 years of broking tenure.
                            </p>
                        </div>

                        <!-- Director 2 -->
                        <div style="background: var(--paper); border: 1px solid var(--line); border-radius: var(--radius); overflow: hidden; padding: 24px; box-shadow: var(--shadow-soft);">
                            <img src="{{ asset('assets/img/mgmt-clarissa.jpg') }}" alt="Clarissa Danuwijaya, ACII, FSAI" style="width: 100%; aspect-ratio: 1/1; object-fit: cover; border-radius: var(--radius); margin-bottom: 20px;">
                            <h4 style="font-size: 1.25rem; margin-bottom: 4px;">Clarissa Danuwijaya, ACII, FSAI</h4>
                            <span style="font-size: 0.8125rem; font-weight: 700; color: var(--maroon); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 12px;" x-text="t('role_dir_treaty')">Director of Treaty Reinsurance</span>
                            <p style="font-size: 0.875rem; color: var(--ink-mute); line-height: 1.6;" x-text="t('about_clarissa_desc')">
                                Chartered Insurer and Fellow of the Society of Actuaries of Indonesia (FSAI). Leads proportional and catastrophe excess of loss treaty design and retrocession modeling.
                            </p>
                        </div>

                        <!-- Director 3 -->
                        <div style="background: var(--paper); border: 1px solid var(--line); border-radius: var(--radius); overflow: hidden; padding: 24px; box-shadow: var(--shadow-soft);">
                            <img src="{{ asset('assets/img/mgmt-bramantyo.jpg') }}" alt="Bramantyo Wicaksono, S.E., CRGP" style="width: 100%; aspect-ratio: 1/1; object-fit: cover; border-radius: var(--radius); margin-bottom: 20px;">
                            <h4 style="font-size: 1.25rem; margin-bottom: 4px;">Bramantyo Wicaksono, S.E., CRGP</h4>
                            <span style="font-size: 0.8125rem; font-weight: 700; color: var(--maroon); text-transform: uppercase; letter-spacing: 0.08em; display: block; margin-bottom: 12px;" x-text="t('role_dir_ops')">Director of Technical Operations & Claims</span>
                            <p style="font-size: 0.875rem; color: var(--ink-mute); line-height: 1.6;" x-text="t('about_bramantyo_desc')">
                                Certified Risk Governance Professional managing complex claims adjustment, facultative placements in energy and marine, and institutional compliance protocol.
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Regulatory Compliance & Recognition -->
    <section class="section" id="recognition">
        <div class="container container--wide">
            <div class="split">
                <div class="split-media">
                    <img src="{{ asset('assets/img/recognition-award.jpg') }}" alt="Market Leaders Reinsurance Award" loading="lazy">
                </div>
                <div class="split-content">
                    <h2 x-text="t('about_recog_h2')">Recognized by Regulatory Bodies and Industry Peers.</h2>
                    <p class="lede" x-text="t('about_recog_lede')">
                        Ranked 4th among national reinsurance brokers in the 2025 Media Asuransi Market Leaders survey, reflecting our solvency volume and placement consistency.
                    </p>
                    <ul style="display: flex; flex-direction: column; gap: 16px; margin-block: 24px;">
                        <li style="display: flex; align-items: flex-start; gap: 12px;">
                            <span style="color: var(--gold); font-size: 1.25rem;">✓</span>
                            <span><strong>Otoritas Jasa Keuangan (OJK)</strong>: <span x-text="t('about_recog_ojk')">Fully authorized reinsurance broker operating under continuous supervision.</span></span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 12px;">
                            <span style="color: var(--gold); font-size: 1.25rem;">✓</span>
                            <span><strong x-text="lang === 'id' ? 'Keanggotaan APPARINDO' : 'APPARINDO Membership'">APPARINDO Membership</strong>: <span x-text="t('about_recog_apparindo')">Active member adhering to the highest ethical and professional code of conduct.</span></span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 12px;">
                            <span style="color: var(--gold); font-size: 1.25rem;">✓</span>
                            <span><strong x-text="lang === 'id' ? 'Tata Kelola Syariah' : 'Sharia Governance'">Sharia Governance</strong>: <span x-text="t('about_recog_sharia')">Certified Retakaful operations certified under National Sharia Board (DSN-MUI) guidelines.</span></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <x-cta-banner />
</x-layout>
