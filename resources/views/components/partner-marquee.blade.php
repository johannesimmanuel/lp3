<section class="section section--paper" aria-label="Insurance Market Relationships">
    <div class="container container--wide">
        <div class="section-head">
            <h2 x-text="t('partner_h2')">Strong market relationships expand your treaty options.</h2>
            <p x-text="t('partner_p')">We work with established Indonesian ceding insurers and premier specialist markets to secure appropriate capacity, competitive terms, and responsive support.</p>
        </div>

        <!-- Clean Partner Strip with Auto-scroll and Interactive Helper Slider -->
        <div class="partner-carousel-container"
             x-data="partnerSlider()"
             x-init="initSlider()"
             @mouseenter="isHovered = true"
             @mouseleave="isHovered = false">

            <div class="partner-slider-track"
                 x-ref="sliderTrack"
                 @scroll.passive="onTrackManualScroll()"
                 @mousedown="startTrackDrag($event)"
                 @mousemove="onTrackDrag($event)"
                 @mouseup="endTrackDrag()"
                 @mouseleave="endTrackDrag()">

                <!-- Set 1: 12 Clean Partner Logos without Containers -->
                <!-- 01. KB Insurance Indonesia -->
                <div class="partner-logo-item">
                    <svg viewBox="0 0 180 50" height="42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 6)">
                            <path d="M14 2 L14 28" stroke="#F5A623" stroke-width="4.5" stroke-linecap="round"/>
                            <path d="M24 6 L6 22" stroke="#F5A623" stroke-width="4" stroke-linecap="round"/>
                            <path d="M5 9 L24 23" stroke="#F5A623" stroke-width="4" stroke-linecap="round"/>
                            <path d="M26 18 C29 16 34 16 35 20 C36 24 32 28 27 28 L27 12" stroke="#F5A623" stroke-width="3.5" stroke-linecap="round" fill="none"/>
                        </g>
                        <text x="56" y="24" font-family="'Inter', sans-serif" font-size="15" font-weight="800" fill="#262626">KB Insurance</text>
                        <text x="56" y="37" font-family="'Inter', sans-serif" font-size="9" font-weight="600" fill="#71717A" letter-spacing="0.08em">INDONESIA</text>
                    </svg>
                </div>

                <!-- 02. intra Asia insurance -->
                <div class="partner-logo-item">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(8, 8)">
                            <path d="M19 3 L8 33 L15 33 L22 14 Z" fill="#1E2B4A"/>
                            <path d="M24 14 L31 33 L38 33 L27 3 Z" fill="#0EA5E9"/>
                        </g>
                        <text x="54" y="24" font-family="'Inter', sans-serif" font-size="16" font-weight="800" font-style="italic" fill="#1E2B4A">intra Asia</text>
                        <text x="54" y="38" font-family="'Inter', sans-serif" font-size="11" font-weight="500" font-style="italic" fill="#64748B" letter-spacing="0.04em">insurance</text>
                    </svg>
                </div>

                <!-- 03. asuransi sinarmas -->
                <div class="partner-logo-item">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 8)">
                            <rect width="34" height="34" rx="8" fill="#D71920"/>
                            <path d="M17 7 C11.5 7 7 11.5 7 17 C7 21 10 24 14 26 C15.5 24 16.5 21 16.5 18 C16.5 14 13.5 11 17 9 C19 10.5 20.5 13 20.5 16 C20.5 20 18 23 18 27 C23 26 27 22 27 17 C27 11.5 22.5 7 17 7 Z" fill="#FFFFFF"/>
                            <circle cx="17" cy="17" r="2.5" fill="#D71920"/>
                        </g>
                        <text x="52" y="21" font-family="'Inter', sans-serif" font-size="11" font-weight="600" fill="#334155">asuransi</text>
                        <text x="52" y="37" font-family="'Inter', sans-serif" font-size="17" font-weight="900" fill="#0F172A" letter-spacing="-0.03em">sinarmas</text>
                    </svg>
                </div>

                <!-- 04. ZURICH -->
                <div class="partner-logo-item">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(12, 8)">
                            <circle cx="17" cy="17" r="17" fill="#2167AE"/>
                            <path d="M10 11 H24 L14 23 H24 V25 H10 L20 13 H10 Z" fill="#FFFFFF"/>
                        </g>
                        <text x="54" y="30" font-family="'Inter', sans-serif" font-size="19" font-weight="800" fill="#2167AE" letter-spacing="0.04em">ZURICH</text>
                        <circle cx="142" cy="16" r="2.5" stroke="#2167AE" stroke-width="0.8" fill="none"/>
                        <text x="141" y="18" font-family="sans-serif" font-size="3.5" font-weight="700" fill="#2167AE">R</text>
                    </svg>
                </div>

                <!-- 05. aswata takaful -->
                <div class="partner-logo-item">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 8)">
                            <rect width="32" height="32" rx="6" fill="#005088"/>
                            <path d="M9 13 H23 V25 H18 V21 H14 V25 H9 Z M14 17 H18 V19 H14 Z" fill="#FFFFFF"/>
                        </g>
                        <text x="48" y="24" font-family="'Inter', sans-serif" font-size="18" font-weight="800" fill="#005088" letter-spacing="-0.02em">aswata</text>
                        <text x="50" y="37" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#008852" letter-spacing="0.1em">takaful</text>
                    </svg>
                </div>

                <!-- 06. Tugu Insurance -->
                <div class="partner-logo-item">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 8)">
                            <polygon points="16,3 26,16 16,22 6,16" fill="#008D46"/>
                            <polygon points="16,13 23,22 16,29 9,22" fill="#FFD100"/>
                            <polygon points="16,8 20,16 16,20 12,16" fill="#005B2D"/>
                        </g>
                        <text x="46" y="24" font-family="'Inter', sans-serif" font-size="17" font-weight="800" fill="#005B2D" letter-spacing="-0.02em">tugu</text>
                        <text x="46" y="37" font-family="'Inter', sans-serif" font-size="10" font-weight="700" fill="#64748B" letter-spacing="0.08em">INSURANCE</text>
                    </svg>
                </div>

                <!-- 07. Tokio Marine Indonesia -->
                <div class="partner-logo-item">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 9)">
                            <path d="M2 17 C9 8 18 8 28 11 C22 17 14 17 2 17 Z" fill="#00A3E0"/>
                            <path d="M5 23 C12 14 21 14 28 15 C21 23 13 23 5 23 Z" fill="#003865"/>
                            <circle cx="10" cy="9" r="3.5" fill="#00A3E0"/>
                        </g>
                        <text x="46" y="23" font-family="'Inter', sans-serif" font-size="13" font-weight="800" fill="#003865" letter-spacing="0.03em">TOKIO MARINE</text>
                        <text x="46" y="36" font-family="'Inter', sans-serif" font-size="10" font-weight="600" fill="#00A3E0" letter-spacing="0.05em">INDONESIA</text>
                    </svg>
                </div>

                <!-- 08. BRI Insurance -->
                <div class="partner-logo-item">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 8)">
                            <rect width="32" height="32" rx="6" fill="#00529C"/>
                            <path d="M9 8 H20 C23 8 25 10 25 13 C25 15 24 17 22 18 C24.5 19 25.5 21 25.5 24 C25.5 27 23 29 20 29 H9 Z" fill="#FFFFFF"/>
                            <path d="M14 12 H19 C20.5 12 21.5 13 21.5 14.5 C21.5 16 20.5 17 19 17 H14 Z M14 20 H19.5 C21 20 22 21 22 22.5 C22 24 21 25 19.5 25 H14 Z" fill="#00529C"/>
                        </g>
                        <text x="48" y="24" font-family="'Inter', sans-serif" font-size="18" font-weight="800" fill="#00529C" letter-spacing="-0.02em">BRINS</text>
                        <text x="48" y="36" font-family="'Inter', sans-serif" font-size="9" font-weight="700" fill="#F37021" letter-spacing="0.06em">BRI INSURANCE</text>
                    </svg>
                </div>

                <!-- 09. Asuransi Jasindo -->
                <div class="partner-logo-item">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 8)">
                            <circle cx="16" cy="16" r="16" fill="#005BAA"/>
                            <path d="M9 13 C12 10 20 10 23 13 C24 18 19 23 16 25 C13 23 8 18 9 13 Z" fill="#FFFFFF"/>
                            <circle cx="16" cy="16" r="3.5" fill="#E31B23"/>
                        </g>
                        <text x="48" y="23" font-family="'Inter', sans-serif" font-size="10.5" font-weight="600" fill="#64748B">asuransi</text>
                        <text x="48" y="37" font-family="'Inter', sans-serif" font-size="16" font-weight="800" fill="#005BAA" letter-spacing="-0.02em">jasindo</text>
                    </svg>
                </div>

                <!-- 10. Askrindo -->
                <div class="partner-logo-item">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 8)">
                            <rect width="32" height="32" rx="6" fill="#004B87"/>
                            <polygon points="16,6 26,24 6,24" fill="#FFFFFF"/>
                            <circle cx="16" cy="18" r="4" fill="#E30613"/>
                        </g>
                        <text x="48" y="25" font-family="'Inter', sans-serif" font-size="17" font-weight="900" fill="#004B87" letter-spacing="0.02em">askrindo</text>
                        <text x="48" y="37" font-family="'Inter', sans-serif" font-size="8.5" font-weight="600" fill="#64748B" letter-spacing="0.06em">INDONESIA RE</text>
                    </svg>
                </div>

                <!-- 11. ACA Asuransi -->
                <div class="partner-logo-item">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 8)">
                            <rect width="32" height="32" rx="6" fill="#A81920"/>
                            <ellipse cx="16" cy="16" rx="12" ry="7" fill="none" stroke="#FFFFFF" stroke-width="1.8"/>
                            <text x="16" y="20" font-family="'Inter', sans-serif" font-size="11" font-weight="900" fill="#FFFFFF" text-anchor="middle">aca</text>
                        </g>
                        <text x="48" y="24" font-family="'Inter', sans-serif" font-size="16" font-weight="800" fill="#A81920">ACA</text>
                        <text x="48" y="36" font-family="'Inter', sans-serif" font-size="10" font-weight="600" fill="#64748B" letter-spacing="0.04em">ASURANSI</text>
                    </svg>
                </div>

                <!-- 12. Lippo Insurance -->
                <div class="partner-logo-item">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 8)">
                            <rect width="32" height="32" rx="6" fill="#D32F2F"/>
                            <circle cx="16" cy="16" r="10" stroke="#FFFFFF" stroke-width="2.5" fill="none"/>
                            <line x1="16" y1="9" x2="16" y2="23" stroke="#FFFFFF" stroke-width="2.5"/>
                            <line x1="9" y1="16" x2="23" y2="16" stroke="#FFFFFF" stroke-width="2.5"/>
                        </g>
                        <text x="48" y="23" font-family="'Inter', sans-serif" font-size="14" font-weight="800" fill="#D32F2F" letter-spacing="-0.01em">LIPPO</text>
                        <text x="48" y="36" font-family="'Inter', sans-serif" font-size="9.5" font-weight="700" fill="#475569" letter-spacing="0.05em">INSURANCE</text>
                    </svg>
                </div>

                <!-- Set 2: Duplicate for Seamless Continuous Loop -->
                <!-- Duplicate 01. KB Insurance -->
                <div class="partner-logo-item" aria-hidden="true">
                    <svg viewBox="0 0 180 50" height="42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 6)">
                            <path d="M14 2 L14 28" stroke="#F5A623" stroke-width="4.5" stroke-linecap="round"/>
                            <path d="M24 6 L6 22" stroke="#F5A623" stroke-width="4" stroke-linecap="round"/>
                            <path d="M5 9 L24 23" stroke="#F5A623" stroke-width="4" stroke-linecap="round"/>
                            <path d="M26 18 C29 16 34 16 35 20 C36 24 32 28 27 28 L27 12" stroke="#F5A623" stroke-width="3.5" stroke-linecap="round" fill="none"/>
                        </g>
                        <text x="56" y="24" font-family="'Inter', sans-serif" font-size="15" font-weight="800" fill="#262626">KB Insurance</text>
                        <text x="56" y="37" font-family="'Inter', sans-serif" font-size="9" font-weight="600" fill="#71717A" letter-spacing="0.08em">INDONESIA</text>
                    </svg>
                </div>

                <!-- Duplicate 02. intra Asia -->
                <div class="partner-logo-item" aria-hidden="true">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(8, 8)">
                            <path d="M19 3 L8 33 L15 33 L22 14 Z" fill="#1E2B4A"/>
                            <path d="M24 14 L31 33 L38 33 L27 3 Z" fill="#0EA5E9"/>
                        </g>
                        <text x="54" y="24" font-family="'Inter', sans-serif" font-size="16" font-weight="800" font-style="italic" fill="#1E2B4A">intra Asia</text>
                        <text x="54" y="38" font-family="'Inter', sans-serif" font-size="11" font-weight="500" font-style="italic" fill="#64748B" letter-spacing="0.04em">insurance</text>
                    </svg>
                </div>

                <!-- Duplicate 03. asuransi sinarmas -->
                <div class="partner-logo-item" aria-hidden="true">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 8)">
                            <rect width="34" height="34" rx="8" fill="#D71920"/>
                            <path d="M17 7 C11.5 7 7 11.5 7 17 C7 21 10 24 14 26 C15.5 24 16.5 21 16.5 18 C16.5 14 13.5 11 17 9 C19 10.5 20.5 13 20.5 16 C20.5 20 18 23 18 27 C23 26 27 22 27 17 C27 11.5 22.5 7 17 7 Z" fill="#FFFFFF"/>
                            <circle cx="17" cy="17" r="2.5" fill="#D71920"/>
                        </g>
                        <text x="52" y="21" font-family="'Inter', sans-serif" font-size="11" font-weight="600" fill="#334155">asuransi</text>
                        <text x="52" y="37" font-family="'Inter', sans-serif" font-size="17" font-weight="900" fill="#0F172A" letter-spacing="-0.03em">sinarmas</text>
                    </svg>
                </div>

                <!-- Duplicate 04. ZURICH -->
                <div class="partner-logo-item" aria-hidden="true">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(12, 8)">
                            <circle cx="17" cy="17" r="17" fill="#2167AE"/>
                            <path d="M10 11 H24 L14 23 H24 V25 H10 L20 13 H10 Z" fill="#FFFFFF"/>
                        </g>
                        <text x="54" y="30" font-family="'Inter', sans-serif" font-size="19" font-weight="800" fill="#2167AE" letter-spacing="0.04em">ZURICH</text>
                        <circle cx="142" cy="16" r="2.5" stroke="#2167AE" stroke-width="0.8" fill="none"/>
                        <text x="141" y="18" font-family="sans-serif" font-size="3.5" font-weight="700" fill="#2167AE">R</text>
                    </svg>
                </div>

                <!-- Duplicate 05. aswata takaful -->
                <div class="partner-logo-item" aria-hidden="true">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 8)">
                            <rect width="32" height="32" rx="6" fill="#005088"/>
                            <path d="M9 13 H23 V25 H18 V21 H14 V25 H9 Z M14 17 H18 V19 H14 Z" fill="#FFFFFF"/>
                        </g>
                        <text x="48" y="24" font-family="'Inter', sans-serif" font-size="18" font-weight="800" fill="#005088" letter-spacing="-0.02em">aswata</text>
                        <text x="50" y="37" font-family="'Inter', sans-serif" font-size="11" font-weight="700" fill="#008852" letter-spacing="0.1em">takaful</text>
                    </svg>
                </div>

                <!-- Duplicate 06. Tugu Insurance -->
                <div class="partner-logo-item" aria-hidden="true">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 8)">
                            <polygon points="16,3 26,16 16,22 6,16" fill="#008D46"/>
                            <polygon points="16,13 23,22 16,29 9,22" fill="#FFD100"/>
                            <polygon points="16,8 20,16 16,20 12,16" fill="#005B2D"/>
                        </g>
                        <text x="46" y="24" font-family="'Inter', sans-serif" font-size="17" font-weight="800" fill="#005B2D" letter-spacing="-0.02em">tugu</text>
                        <text x="46" y="37" font-family="'Inter', sans-serif" font-size="10" font-weight="700" fill="#64748B" letter-spacing="0.08em">INSURANCE</text>
                    </svg>
                </div>

                <!-- Set 3: Extra Duplicate to Ensure Infinite Fluid Loop -->
                <!-- Duplicate 07. Tokio Marine -->
                <div class="partner-logo-item" aria-hidden="true">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 9)">
                            <path d="M2 17 C9 8 18 8 28 11 C22 17 14 17 2 17 Z" fill="#00A3E0"/>
                            <path d="M5 23 C12 14 21 14 28 15 C21 23 13 23 5 23 Z" fill="#003865"/>
                            <circle cx="10" cy="9" r="3.5" fill="#00A3E0"/>
                        </g>
                        <text x="46" y="23" font-family="'Inter', sans-serif" font-size="13" font-weight="800" fill="#003865" letter-spacing="0.03em">TOKIO MARINE</text>
                        <text x="46" y="36" font-family="'Inter', sans-serif" font-size="10" font-weight="600" fill="#00A3E0" letter-spacing="0.05em">INDONESIA</text>
                    </svg>
                </div>

                <!-- Duplicate 08. BRI Insurance -->
                <div class="partner-logo-item" aria-hidden="true">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 8)">
                            <rect width="32" height="32" rx="6" fill="#00529C"/>
                            <path d="M9 8 H20 C23 8 25 10 25 13 C25 15 24 17 22 18 C24.5 19 25.5 21 25.5 24 C25.5 27 23 29 20 29 H9 Z" fill="#FFFFFF"/>
                            <path d="M14 12 H19 C20.5 12 21.5 13 21.5 14.5 C21.5 16 20.5 17 19 17 H14 Z M14 20 H19.5 C21 20 22 21 22 22.5 C22 24 21 25 19.5 25 H14 Z" fill="#00529C"/>
                        </g>
                        <text x="48" y="24" font-family="'Inter', sans-serif" font-size="18" font-weight="800" fill="#00529C" letter-spacing="-0.02em">BRINS</text>
                        <text x="48" y="36" font-family="'Inter', sans-serif" font-size="9" font-weight="700" fill="#F37021" letter-spacing="0.06em">BRI INSURANCE</text>
                    </svg>
                </div>

                <!-- Duplicate 09. Jasindo -->
                <div class="partner-logo-item" aria-hidden="true">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 8)">
                            <circle cx="16" cy="16" r="16" fill="#005BAA"/>
                            <path d="M9 13 C12 10 20 10 23 13 C24 18 19 23 16 25 C13 23 8 18 9 13 Z" fill="#FFFFFF"/>
                            <circle cx="16" cy="16" r="3.5" fill="#E31B23"/>
                        </g>
                        <text x="48" y="23" font-family="'Inter', sans-serif" font-size="10.5" font-weight="600" fill="#64748B">asuransi</text>
                        <text x="48" y="37" font-family="'Inter', sans-serif" font-size="16" font-weight="800" fill="#005BAA" letter-spacing="-0.02em">jasindo</text>
                    </svg>
                </div>

                <!-- Duplicate 10. Askrindo -->
                <div class="partner-logo-item" aria-hidden="true">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 8)">
                            <rect width="32" height="32" rx="6" fill="#004B87"/>
                            <polygon points="16,6 26,24 6,24" fill="#FFFFFF"/>
                            <circle cx="16" cy="18" r="4" fill="#E30613"/>
                        </g>
                        <text x="48" y="25" font-family="'Inter', sans-serif" font-size="17" font-weight="900" fill="#004B87" letter-spacing="0.02em">askrindo</text>
                        <text x="48" y="37" font-family="'Inter', sans-serif" font-size="8.5" font-weight="600" fill="#64748B" letter-spacing="0.06em">INDONESIA RE</text>
                    </svg>
                </div>

                <!-- Duplicate 11. ACA -->
                <div class="partner-logo-item" aria-hidden="true">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 8)">
                            <rect width="32" height="32" rx="6" fill="#A81920"/>
                            <ellipse cx="16" cy="16" rx="12" ry="7" fill="none" stroke="#FFFFFF" stroke-width="1.8"/>
                            <text x="16" y="20" font-family="'Inter', sans-serif" font-size="11" font-weight="900" fill="#FFFFFF" text-anchor="middle">aca</text>
                        </g>
                        <text x="48" y="24" font-family="'Inter', sans-serif" font-size="16" font-weight="800" fill="#A81920">ACA</text>
                        <text x="48" y="36" font-family="'Inter', sans-serif" font-size="10" font-weight="600" fill="#64748B" letter-spacing="0.04em">ASURANSI</text>
                    </svg>
                </div>

                <!-- Duplicate 12. Lippo -->
                <div class="partner-logo-item" aria-hidden="true">
                    <svg viewBox="0 0 180 50" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g transform="translate(10, 8)">
                            <rect width="32" height="32" rx="6" fill="#D32F2F"/>
                            <circle cx="16" cy="16" r="10" stroke="#FFFFFF" stroke-width="2.5" fill="none"/>
                            <line x1="16" y1="9" x2="16" y2="23" stroke="#FFFFFF" stroke-width="2.5"/>
                            <line x1="9" y1="16" x2="23" y2="16" stroke="#FFFFFF" stroke-width="2.5"/>
                        </g>
                        <text x="48" y="23" font-family="'Inter', sans-serif" font-size="14" font-weight="800" fill="#D32F2F" letter-spacing="-0.01em">LIPPO</text>
                        <text x="48" y="36" font-family="'Inter', sans-serif" font-size="9.5" font-weight="700" fill="#475569" letter-spacing="0.05em">INSURANCE</text>
                    </svg>
                </div>
            </div>

            <!-- Standalone Centered Slider Bar without Arrow Buttons -->
            <div class="partner-slider-controls">
                <div class="partner-slider-bar-track"
                     x-ref="barTrack"
                     @click="onBarClick($event)"
                     title="Geser atau klik untuk menggeser logo partner"
                     role="slider"
                     aria-label="Geser logo partner"
                     aria-valuemin="0"
                     aria-valuemax="100"
                     :aria-valuenow="Math.round(thumbLeftPercent)">
                    <div class="partner-slider-bar-thumb"
                         x-ref="barThumb"
                         :style="`left: ${thumbLeftPercent}%; width: ${thumbWidthPercent}%;`"
                         @mousedown.stop="startThumbDrag($event)"
                         @touchstart.stop="startThumbDrag($event)">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
window.partnerSlider = function() {
    return {
        thumbLeftPercent: 0,
        thumbWidthPercent: 30,
        isDraggingThumb: false,
        isDraggingTrack: false,
        isHovered: false,
        startX: 0,
        startScrollLeft: 0,
        scrollSpeed: 0.75, // Smooth continuous auto-glide speed
        animationFrameId: null,

        initSlider() {
            this.$nextTick(() => {
                const track = this.$refs.sliderTrack;
                if (!track) return;
                const oneSet = track.scrollWidth / 3;
                if (oneSet > 0) {
                    track.scrollLeft = oneSet;
                }
                this.updateThumb();
                this.startAutoScroll();

                window.addEventListener('resize', () => this.updateThumb());
            });
        },

        startAutoScroll() {
            const step = () => {
                const track = this.$refs.sliderTrack;
                if (track && !this.isDraggingThumb && !this.isDraggingTrack && !this.isHovered) {
                    track.scrollLeft += this.scrollSpeed;
                    const oneSet = track.scrollWidth / 3;
                    if (oneSet > 0) {
                        if (track.scrollLeft >= oneSet * 2) {
                            track.scrollLeft -= oneSet;
                        } else if (track.scrollLeft < oneSet * 0.5) {
                            track.scrollLeft += oneSet;
                        }
                    }
                    this.updateThumb();
                }
                this.animationFrameId = requestAnimationFrame(step);
            };
            this.animationFrameId = requestAnimationFrame(step);
        },

        onTrackManualScroll() {
            if (this.isDraggingTrack || this.isDraggingThumb) {
                this.updateThumb();
            }
        },

        updateThumb() {
            const track = this.$refs.sliderTrack;
            if (!track) return;
            const oneSet = track.scrollWidth / 3;
            if (oneSet <= 0) return;
            const currentPos = (track.scrollLeft % oneSet);
            const ratio = Math.max(0, Math.min(1, currentPos / oneSet));
            const availableRange = 100 - this.thumbWidthPercent;
            this.thumbLeftPercent = ratio * availableRange;
        },

        onBarClick(e) {
            const bar = this.$refs.barTrack;
            const track = this.$refs.sliderTrack;
            if (!bar || !track) return;
            const rect = bar.getBoundingClientRect();
            const clickX = e.clientX - rect.left;
            const ratio = Math.max(0, Math.min(1, clickX / rect.width));
            const oneSet = track.scrollWidth / 3;
            track.scrollLeft = oneSet + (ratio * oneSet);
            this.updateThumb();
        },

        startThumbDrag(e) {
            e.preventDefault();
            this.isDraggingThumb = true;
            const clientX = e.touches ? e.touches[0].clientX : e.clientX;
            this.startX = clientX;
            const track = this.$refs.sliderTrack;
            this.startScrollLeft = track ? track.scrollLeft : 0;

            const onMove = (moveEvent) => {
                if (!this.isDraggingThumb) return;
                const currentX = moveEvent.touches ? moveEvent.touches[0].clientX : moveEvent.clientX;
                const deltaX = currentX - this.startX;
                const bar = this.$refs.barTrack;
                const track = this.$refs.sliderTrack;
                if (!bar || !track) return;
                const oneSet = track.scrollWidth / 3;
                const availablePx = bar.clientWidth * ((100 - this.thumbWidthPercent) / 100);
                if (availablePx <= 0) return;
                const deltaScroll = (deltaX / availablePx) * oneSet;
                track.scrollLeft = this.startScrollLeft + deltaScroll;
                this.updateThumb();
            };

            const onEnd = () => {
                this.isDraggingThumb = false;
                window.removeEventListener('mousemove', onMove);
                window.removeEventListener('mouseup', onEnd);
                window.removeEventListener('touchmove', onMove);
                window.removeEventListener('touchend', onEnd);
            };

            window.addEventListener('mousemove', onMove);
            window.addEventListener('mouseup', onEnd);
            window.addEventListener('touchmove', onMove, { passive: false });
            window.addEventListener('touchend', onEnd);
        },

        startTrackDrag(e) {
            if (e.button !== 0) return;
            this.isDraggingTrack = true;
            this.startX = e.clientX;
            const track = this.$refs.sliderTrack;
            this.startScrollLeft = track ? track.scrollLeft : 0;
            if (track) track.style.cursor = 'grabbing';
        },

        onTrackDrag(e) {
            if (!this.isDraggingTrack) return;
            e.preventDefault();
            const track = this.$refs.sliderTrack;
            if (!track) return;
            const deltaX = e.clientX - this.startX;
            track.scrollLeft = this.startScrollLeft - deltaX;
            this.updateThumb();
        },

        endTrackDrag() {
            if (!this.isDraggingTrack) return;
            this.isDraggingTrack = false;
            const track = this.$refs.sliderTrack;
            if (track) track.style.cursor = 'grab';
        }
    };
};
</script>
