<x-layout :title="'Global Network & Syndication Hubs | PT Vlex Reinsurance Brokers'">
    <!-- Page Header Banner -->
    <section class="section section--deep" style="padding-top: 160px; padding-bottom: 80px; position: relative; overflow: hidden;">
        <div class="footer-watermark" style="opacity: 0.1;" aria-hidden="true"></div>
        <div class="container container--wide">
            <h1 style="color: #fff; font-size: clamp(2.5rem, 4.5vw, 3.8rem); margin-bottom: 20px;" x-html="t('net_h1')">
                Unlocking Tier-1 Capital.<br>
                <em style="font-family: var(--font-quote); color: var(--gold-light);">Global Reinsurance Syndicates.</em>
            </h1>
            <p style="max-width: 740px; font-size: 1.25rem; color: var(--on-dark-soft); line-height: 1.6;" x-text="t('net_intro')">
                Independent from single-insurer ties, Vlex Re maintains direct syndication channels with A-rated international retrocessionaires across Lloyd's of London, Singapore, Continental Europe, and the Middle East.
            </p>
        </div>
    </section>

    <!-- Global Network Marquee -->
    <x-network-marquee />

    <!-- Network Details Grid -->
    <section class="section">
        <div class="container container--wide">
            <div class="section-head">
                <h2 x-text="t('net_h2')">Strategic Alliances & Underwriting Syndicates</h2>
                <p x-text="t('net_p')">Connecting Indonesian cedants with global capacity under strict counterparty credit scrutiny.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px;">
                <!-- Lloyd's -->
                <div style="background: var(--paper); border: 1px solid var(--line); border-radius: var(--radius); padding: 32px; box-shadow: var(--shadow-soft);">
                    <div style="font-size: 2rem; margin-bottom: 16px;">🏛️</div>
                    <h3 style="font-size: 1.3rem; margin-bottom: 8px;">Lloyd's of London Syndicates</h3>
                    <p style="font-size: 0.9375rem; color: var(--ink-mute); line-height: 1.6;" x-text="t('net_lloyds_desc')">
                        Direct access to Lloyd's specialized underwriting boxes for mega-infrastructure, offshore energy, cyber extortion, and aviation risk placement.
                    </p>
                </div>

                <!-- Singapore Hub -->
                <div style="background: var(--paper); border: 1px solid var(--line); border-radius: var(--radius); padding: 32px; box-shadow: var(--shadow-soft);">
                    <div style="font-size: 2rem; margin-bottom: 16px;">🏢</div>
                    <h3 style="font-size: 1.3rem; margin-bottom: 8px;">Singapore Reinsurance Hub</h3>
                    <p style="font-size: 0.9375rem; color: var(--ink-mute); line-height: 1.6;" x-text="t('net_sg_desc')">
                        Close collaborative treaties with regional reinsurers located in Singapore's financial center, ensuring rapid placement and time-zone aligned settlement.
                    </p>
                </div>

                <!-- WBN -->
                <div style="background: var(--paper); border: 1px solid var(--line); border-radius: var(--radius); padding: 32px; box-shadow: var(--shadow-soft);">
                    <div style="font-size: 2rem; margin-bottom: 16px;">🌐</div>
                    <h3 style="font-size: 1.3rem; margin-bottom: 8px;">Worldwide Broker Network (WBN)</h3>
                    <p style="font-size: 0.9375rem; color: var(--ink-mute); line-height: 1.6;" x-text="t('net_wbn_desc')">
                        The world's largest fully integrated network of independent insurance and reinsurance brokers across 100+ countries.
                    </p>
                </div>

                <!-- UNIBA Partners -->
                <div style="background: var(--paper); border: 1px solid var(--line); border-radius: var(--radius); padding: 32px; box-shadow: var(--shadow-soft);">
                    <div style="font-size: 2rem; margin-bottom: 16px;">🤝</div>
                    <h3 style="font-size: 1.3rem; margin-bottom: 8px;">UNIBA Partners International</h3>
                    <p style="font-size: 0.9375rem; color: var(--ink-mute); line-height: 1.6;" x-text="t('net_uniba_desc')">
                        Global alliance of independent risk advisors committed to cross-border client advocacy and peer-to-peer technical knowledge sharing.
                    </p>
                </div>

                <!-- Continental Europe -->
                <div style="background: var(--paper); border: 1px solid var(--line); border-radius: var(--radius); padding: 32px; box-shadow: var(--shadow-soft);">
                    <div style="font-size: 2rem; margin-bottom: 16px;">⚓</div>
                    <h3 style="font-size: 1.3rem; margin-bottom: 8px;">Continental Retrocession Hubs</h3>
                    <p style="font-size: 0.9375rem; color: var(--ink-mute); line-height: 1.6;" x-text="t('net_cont_desc')">
                        Long-term capacity partnerships with top-tier German, Swiss, and French retrocessionaires supporting large catastrophic treaty structures.
                    </p>
                </div>

                <!-- GCC Retakaful -->
                <div style="background: var(--paper); border: 1px solid var(--line); border-radius: var(--radius); padding: 32px; box-shadow: var(--shadow-soft);">
                    <div style="font-size: 2rem; margin-bottom: 16px;">🕌</div>
                    <h3 style="font-size: 1.3rem; margin-bottom: 8px;">GCC & MENA Retakaful Syndicates</h3>
                    <p style="font-size: 0.9375rem; color: var(--ink-mute); line-height: 1.6;" x-text="t('net_gcc_desc')">
                        Facilitating cross-border Islamic reinsurance treaties with premier retakaful operators in Dubai, Bahrain, and Kuala Lumpur.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <x-partner-marquee />
    <x-cta-banner />
</x-layout>
