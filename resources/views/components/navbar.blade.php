@props(['transparent' => true])

<header class="site-header"
        :class="{
            'is-scrolled': isScrolled,
            'is-transparent-dark': !isScrolled && {{ $transparent ? 'true' : 'false' }}
        }">
    <div class="container container--wide header-inner">
        <!-- Brand / Monogram -->
        <a href="{{ url('/') }}" class="brand" aria-label="Vlex Reinsurance Homepage">
            <img class="brand-mark" src="{{ asset('assets/img/logo-mark.svg') }}" alt="Vlex Re Logo Mark" width="32" height="38">
            <div class="brand-text">
                <span class="brand-name">Vlex<span style="font-weight: 400; opacity: 0.85;">Re</span></span>
                <span class="brand-sub">Reinsurance Brokers</span>
            </div>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="nav-links" aria-label="Main navigation">
            <a href="{{ url('/') }}" :class="{ 'active': window.location.pathname === '/' }" x-text="t('nav_home')">Home</a>
            <a href="{{ url('/about') }}" :class="{ 'active': window.location.pathname.startsWith('/about') }" x-text="t('nav_about')">About</a>
            <a href="{{ url('/services') }}" :class="{ 'active': window.location.pathname.startsWith('/services') }" x-text="t('nav_services')">Services</a>
            <a href="{{ url('/network') }}" :class="{ 'active': window.location.pathname.startsWith('/network') }" x-text="t('nav_network')">Network</a>
            <a href="{{ url('/contact') }}" :class="{ 'active': window.location.pathname.startsWith('/contact') }" x-text="t('nav_contact')">Contact</a>
        </nav>

        <!-- Right Side: Language Switcher -->
        <div style="display: flex; align-items: center; gap: 16px;">
            <!-- Language Switcher: UK & Indonesia Flags Only -->
            <div class="lang-toggle" role="group" aria-label="Language selection">
                <button type="button"
                        class="lang-btn"
                        :class="{ 'is-active': lang === 'en' }"
                        @click="setLang('en')"
                        title="English"
                        aria-label="English">
                    <svg class="flag-icon" viewBox="0 0 60 30" width="24" height="16" aria-hidden="true">
                        <clipPath id="uk-flag-clip"><rect width="60" height="30" rx="3"/></clipPath>
                        <g clip-path="url(#uk-flag-clip)">
                            <rect width="60" height="30" fill="#012169"/>
                            <path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6"/>
                            <path d="M0,0 L60,30 M60,0 L0,30" stroke="#C8102E" stroke-width="3.5"/>
                            <path d="M30,0 v30 M0,15 h60" stroke="#fff" stroke-width="10"/>
                            <path d="M30,0 v30 M0,15 h60" stroke="#C8102E" stroke-width="6"/>
                        </g>
                    </svg>
                </button>
                <button type="button"
                        class="lang-btn"
                        :class="{ 'is-active': lang === 'id' }"
                        @click="setLang('id')"
                        title="Bahasa Indonesia"
                        aria-label="Bahasa Indonesia">
                    <svg class="flag-icon" viewBox="0 0 60 30" width="24" height="16" aria-hidden="true">
                        <clipPath id="id-flag-clip"><rect width="60" height="30" rx="3"/></clipPath>
                        <g clip-path="url(#id-flag-clip)">
                            <rect width="60" height="15" fill="#CE1126"/>
                            <rect y="15" width="60" height="15" fill="#FFFFFF"/>
                        </g>
                    </svg>
                </button>
            </div>

            <!-- Mobile Hamburger Button -->
            <button type="button"
                    class="mobile-nav-toggle"
                    @click="mobileMenu = !mobileMenu"
                    :aria-expanded="mobileMenu"
                    aria-label="Toggle navigation menu">
                <template x-if="!mobileMenu">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </template>
                <template x-if="mobileMenu">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </template>
            </button>
        </div>
    </div>

    <!-- Mobile Drawer -->
    <div x-show="mobileMenu"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="mobile-drawer"
         @click.away="mobileMenu = false">
        <ul class="mobile-menu-list">
            <li>
                <a href="{{ url('/') }}"
                   class="mobile-menu-item"
                   :class="{ 'is-active': window.location.pathname === '/' }">
                    <span x-text="t('nav_home')">Home</span>
                    <span class="mobile-menu-arrow">→</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/about') }}"
                   class="mobile-menu-item"
                   :class="{ 'is-active': window.location.pathname.startsWith('/about') }">
                    <span x-text="t('nav_about')">About</span>
                    <span class="mobile-menu-arrow">→</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/services') }}"
                   class="mobile-menu-item"
                   :class="{ 'is-active': window.location.pathname.startsWith('/services') }">
                    <span x-text="t('nav_services')">Services</span>
                    <span class="mobile-menu-arrow">→</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/network') }}"
                   class="mobile-menu-item"
                   :class="{ 'is-active': window.location.pathname.startsWith('/network') }">
                    <span x-text="t('nav_network')">Network</span>
                    <span class="mobile-menu-arrow">→</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/contact') }}"
                   class="mobile-menu-item"
                   :class="{ 'is-active': window.location.pathname.startsWith('/contact') }">
                    <span x-text="t('nav_contact')">Contact</span>
                    <span class="mobile-menu-arrow">→</span>
                </a>
            </li>
        </ul>

        <div class="mobile-drawer-lang">
            <span class="mobile-drawer-lang-label" x-text="lang === 'id' ? 'Pilihan Bahasa' : 'Language'">Language</span>
            <div class="lang-toggle" role="group" aria-label="Language selection">
                <button type="button"
                        class="lang-btn"
                        :class="{ 'is-active': lang === 'en' }"
                        @click="setLang('en')"
                        title="English"
                        aria-label="English">
                    <svg class="flag-icon" viewBox="0 0 60 30" width="24" height="16" aria-hidden="true">
                        <clipPath id="uk-flag-clip-m"><rect width="60" height="30" rx="3"/></clipPath>
                        <g clip-path="url(#uk-flag-clip-m)">
                            <rect width="60" height="30" fill="#012169"/>
                            <path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6"/>
                            <path d="M0,0 L60,30 M60,0 L0,30" stroke="#C8102E" stroke-width="3.5"/>
                            <path d="M30,0 v30 M0,15 h60" stroke="#fff" stroke-width="10"/>
                            <path d="M30,0 v30 M0,15 h60" stroke="#C8102E" stroke-width="6"/>
                        </g>
                    </svg>
                </button>
                <button type="button"
                        class="lang-btn"
                        :class="{ 'is-active': lang === 'id' }"
                        @click="setLang('id')"
                        title="Bahasa Indonesia"
                        aria-label="Bahasa Indonesia">
                    <svg class="flag-icon" viewBox="0 0 60 30" width="24" height="16" aria-hidden="true">
                        <clipPath id="id-flag-clip-m"><rect width="60" height="30" rx="3"/></clipPath>
                        <g clip-path="url(#id-flag-clip-m)">
                            <rect width="60" height="15" fill="#CE1126"/>
                            <rect y="15" width="60" height="15" fill="#FFFFFF"/>
                        </g>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>
