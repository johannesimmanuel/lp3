<x-layout :title="$service['title'] . ' | PT Vlex Reinsurance Practice Desk'">
    <!-- Service Header Banner -->
    <section class="section section--deep" style="padding-top: 160px; padding-bottom: 70px; position: relative; overflow: hidden;">
        <div class="footer-watermark" style="opacity: 0.08;" aria-hidden="true"></div>
        <div class="container container--wide">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                <a href="{{ url('/services') }}" style="color: var(--gold-light); font-size: 0.875rem; font-weight: 600;" x-text="t('detail_back')">← All Services</a>
                <span style="color: var(--on-dark-soft);">/</span>
                <span style="color: var(--on-dark-soft); font-size: 0.875rem;" x-text="lang === 'id' ? '{{ addslashes($service['category_id'] ?? $service['category']) }}' : '{{ addslashes($service['category'] ?? 'Specialized Desk') }}'">{{ $service['category'] ?? 'Specialized Desk' }}</span>
            </div>
            <h1 style="color: #fff; font-size: clamp(2.25rem, 4vw, 3.5rem); margin-bottom: 16px;"
                x-text="lang === 'id' ? '{{ addslashes($service['title_id'] ?? $service['title']) }}' : '{{ addslashes($service['title']) }}'">
                {{ $service['title'] }}
            </h1>
            <p style="max-width: 760px; font-size: 1.2rem; color: var(--on-dark-soft); line-height: 1.6;"
               x-text="lang === 'id' ? '{{ addslashes($service['tagline_id'] ?? $service['tagline']) }}' : '{{ addslashes($service['tagline']) }}'">
                {{ $service['tagline'] }}
            </p>
        </div>
    </section>

    <!-- Main Detail Content -->
    <section class="section">
        <div class="container container--wide">
            <div style="max-width: 920px; margin: 0 auto;">
                <div>
                    <div style="border-radius: var(--radius-md); overflow: hidden; margin-bottom: 40px; box-shadow: var(--shadow-lift);">
                        <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}" style="width: 100%; max-height: 480px; object-fit: cover;">
                    </div>

                    <h2 style="font-size: 1.85rem; margin-bottom: 18px;" x-text="t('detail_philosophy')">Underwriting Philosophy & Risk Structuring</h2>
                    <p class="lede" style="font-size: 1.15rem; color: var(--ink); line-height: 1.7; margin-bottom: 24px;"
                       x-text="lang === 'id' ? '{{ addslashes($service['description_id'] ?? $service['description']) }}' : '{{ addslashes($service['description']) }}'">
                        {{ $service['description'] }}
                    </p>

                    <div style="margin-block: 36px; padding: 32px; background: var(--paper-2); border-left: 4px solid var(--maroon); border-radius: var(--radius);">
                        <h3 style="font-size: 1.3rem; margin-bottom: 14px;" x-text="t('detail_key_features')">Key Treaty & Placement Features</h3>
                        <ul style="display: grid; grid-template-columns: 1fr; gap: 12px;" x-show="lang !== 'id'">
                            @foreach($service['features'] as $feat)
                                <li style="display: flex; align-items: flex-start; gap: 10px; font-size: 0.95rem; color: var(--ink-body);">
                                    <span style="color: var(--maroon); font-weight: bold;">✓</span>
                                    <span>{{ $feat }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <ul style="display: grid; grid-template-columns: 1fr; gap: 12px;" x-show="lang === 'id'" x-cloak>
                            @foreach($service['features_id'] ?? $service['features'] as $featId)
                                <li style="display: flex; align-items: flex-start; gap: 10px; font-size: 0.95rem; color: var(--ink-body);">
                                    <span style="color: var(--maroon); font-weight: bold;">✓</span>
                                    <span>{{ $featId }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <h3 style="font-size: 1.5rem; margin-bottom: 14px;" x-text="t('detail_claims_h3')">Claims Protocol & Fiduciary Advocacy</h3>
                    <p style="color: var(--ink-mute); line-height: 1.7; margin-bottom: 24px;" x-text="t('detail_claims_p')">
                        When catastrophic losses occur, every hour counts. Vlex Re maintains a predefined claims notification and loss adjuster engagement protocol agreed with lead retrocessionaires prior to policy inception. Our technical claims team coordinates surveys, forensic engineering evidence, and interim cash calls to preserve the ceding company’s liquidity.
                    </p>

                    <div style="margin-top: 40px;">
                        <a href="{{ url('/contact') }}" class="btn btn--primary">
                            <span x-text="lang === 'id' ? 'Diskusikan Penempatan ' + '{{ addslashes($service['title_id'] ?? $service['title']) }}' : 'Discuss ' + '{{ addslashes($service['title']) }}' + ' Placement'">
                                Discuss {{ $service['title'] }} Placement
                            </span>
                            <span>→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-cta-banner />
</x-layout>
