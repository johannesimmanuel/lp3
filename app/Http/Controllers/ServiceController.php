<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    protected function getServicesList(): array
    {
        try {
            $dbServices = \App\Models\Service::active()->orderBy('sort_order')->get();
            if ($dbServices->isNotEmpty()) {
                $list = [];
                foreach ($dbServices as $s) {
                    $list[$s->slug] = [
                        'slug' => $s->slug,
                        'category' => $s->category,
                        'category_id' => $s->category_id ?: $s->category,
                        'title' => $s->title,
                        'title_id' => $s->title_id ?: $s->title,
                        'tagline' => $s->tagline,
                        'tagline_id' => $s->tagline_id ?: $s->tagline,
                        'image' => $s->image,
                        'description' => $s->description,
                        'description_id' => $s->description_id ?: $s->description,
                        'features' => $s->features ?? [],
                        'features_id' => $s->features_id ?? ($s->features ?? []),
                    ];
                }
                return $list;
            }
        } catch (\Throwable $e) {
            // Fallback
        }

        return $this->getDefaultServicesList();
    }

    protected function getDefaultServicesList(): array
    {
        return [
            'property' => [
                'slug' => 'property',
                'category' => 'Property & Catastrophe',
                'category_id' => 'Properti & Katastrofe',
                'title' => 'Property Treaty & Catastrophe XOL',
                'title_id' => 'Treaty Properti & Catastrophe XOL',
                'tagline' => 'Multi-layer catastrophe excess of loss, quota share, and complex facultative commercial property risk engineering.',
                'tagline_id' => 'Pemodelan multi-layer catastrophe excess of loss, quota share, dan rekayasa risiko properti komersial fakultatif yang kompleks.',
                'image' => 'assets/img/service-property.jpg',
                'description' => 'We structure sophisticated property treaty programs for Indonesian direct general insurers. Navigating the Pacific Ring of Fire requires precise catastrophe modeling (earthquake, tsunami, and tropical storm), calibrated attachment points, and reinstated limit protection to insulate shareholder capital under OJK solvency rules.',
                'description_id' => 'Kami menyusun program treaty properti canggih untuk perusahaan asuransi umum Indonesia. Menghadapi Cincin Api Pasifik menuntut pemodelan katastrofe yang presisi (gempa bumi, tsunami, dan badai tropis), kalibrasi attachment points yang teruji, serta proteksi batas pemulihan limit guna melindungi modal pemegang saham di bawah aturan solvabilitas OJK.',
                'features' => [
                    'Multi-Layer Catastrophe Excess of Loss (Cat XOL) structuring',
                    'Proportional Quota Share & Surplus Treaty syndication',
                    'Risk Excess of Loss (Risk XOL) for single high-limit industrial risks',
                    'Aggregate Stop-Loss & Solvency Margin Stabilization',
                    'Property All Risks (PAR) & Machinery Breakdown (MB) facultative slips',
                    'Business Interruption (BI) and Delay in Start-Up (DSU) coverage',
                ],
                'features_id' => [
                    'Penyusunan Multi-Layer Catastrophe Excess of Loss (Cat XOL)',
                    'Sindikasi Treaty Proporsional Quota Share & Surplus',
                    'Risk Excess of Loss (Risk XOL) untuk risiko industri berlimit tinggi',
                    'Stabilisasi Batas Solvabilitas & Aggregate Stop-Loss',
                    'Slip fakultatif Property All Risks (PAR) & Machinery Breakdown (MB)',
                    'Pertanggungan Gangguan Usaha (Business Interruption) dan Delay in Start-Up (DSU)',
                ],
            ],
            'marine' => [
                'slug' => 'marine',
                'category' => 'Maritime & Logistics',
                'category_id' => 'Maritim & Logistik',
                'title' => 'Marine Hull, Cargo & Specie',
                'title_id' => 'Rangka Kapal, Kargo & Specie',
                'tagline' => 'Blue-water shipping, brown-water tug & barge, port terminals, and high-value specie transit facilities.',
                'tagline_id' => 'Armada pelayaran niaga samudera, kapal tunda & tongkang, terminal pelabuhan, dan fasilitas transit barang bernilai tinggi (specie).',
                'image' => 'assets/img/service-marine.jpg',
                'description' => 'With Indonesia being the world’s largest archipelagic state, maritime logistics demand rigorous underwriting. Vlex Re places comprehensive hull & machinery, protection & indemnity (P&I) excess facilities, port operator liabilities, and high-value mining commodity cargo in transit.',
                'description_id' => 'Sebagai negara kepulauan terbesar di dunia, sektor maritim Indonesia membutuhkan disiplin underwriting yang ketat. Vlex Re menempatkan perlindungan komprehensif rangka kapal & mesin (H&M), fasilitas excess Protection & Indemnity (P&I), liabilitas operator pelabuhan, serta kargo komoditas pertambangan bernilai tinggi.',
                'features' => [
                    'Ocean & Brown-Water Hull & Machinery (H&M) treaty and binders',
                    'Protection & Indemnity (P&I) and Charterer’s Liability facilities',
                    'Ports & Terminals multi-peril infrastructure coverage',
                    'Project Cargo Marine Delay in Start-Up (ALOP/DSU)',
                    'Specie, Cash-In-Transit, Vault Storage & Fine Art',
                    'War, Piracy & Strikes Hull Excess of Loss',
                ],
                'features_id' => [
                    'Treaty & binder Rangka Kapal Samudera dan Perairan Darat (H&M)',
                    'Fasilitas Protection & Indemnity (P&I) dan Tanggung Gugat Penyewa Kapal',
                    'Pertanggungan infrastruktur multi-peril Pelabuhan & Terminal',
                    'Jaminan Kargo Proyek Marine Delay in Start-Up (ALOP/DSU)',
                    'Specie, Uang Dalam Pengangkutan (CIT), Brankas & Benda Seni Berharga',
                    'Excess of Loss Rangka Kapal untuk Risiko Perang, Pembajakan & Mogok Kerja',
                ],
            ],
            'energy' => [
                'slug' => 'energy',
                'category' => 'Energy & Natural Resources',
                'category_id' => 'Energi & Sumber Daya Alam',
                'title' => 'Energy & Petrochemicals',
                'title_id' => 'Energi & Petrokimia',
                'tagline' => 'Offshore exploration, production platforms, LNG terminals, and geothermal power installations.',
                'tagline_id' => 'Eksplorasi lepas pantai, anjungan produksi, terminal LNG, dan instalasi pembangkit listrik panas bumi.',
                'image' => 'assets/img/service-energy.jpg',
                'description' => 'Connecting Indonesian oil, gas, and renewable power projects with leading energy underwriting boxes across London, Singapore, and continental retrocession hubs. We negotiate bespoke energy packages covering drilling operations, platform liabilities, and property damage.',
                'description_id' => 'Menghubungkan proyek minyak, gas, dan energi terbarukan Indonesia dengan underwriting box terkemuka di London, Singapura, dan hub retrosesi kontinental. Kami merancang paket energi khusus untuk operasi pengeboran, liabilitas platform, dan kerusakan aset fisik.',
                'features' => [
                    'Offshore Exploration & Production (E&P) package programs',
                    'Operator\'s Extra Expense (OEE) and Control of Well',
                    'Downstream Oil Refineries and Petrochemical Processing complexes',
                    'Geothermal, Hydroelectric, and Solar Utility plants',
                    'Pipeline, Subsea Cable & Midstream Transmission systems',
                    'Decommissioning & Environmental Liability covers',
                ],
                'features_id' => [
                    'Program paket Eksplorasi & Produksi (E&P) Lepas Pantai',
                    'Operator\'s Extra Expense (OEE) dan Pengendalian Sumur (Control of Well)',
                    'Kilang Minyak Hilir dan Kompleks Pengolahan Petrokimia',
                    'Pembangkit Utilitas Panas Bumi, Pembangkit Listrik Tenaga Air, dan Surya',
                    'Pipa Penyalur, Kabel Bawah Laut & Sistem Transmisi Midstream',
                    'Asuransi Pembongkaran Fasilitas (Decommissioning) & Liabilitas Lingkungan',
                ],
            ],
            'financial-lines' => [
                'slug' => 'financial-lines',
                'category' => 'Liability & Governance',
                'category_id' => 'Tanggung Gugat & Tata Kelola',
                'title' => 'Financial Lines & Cyber Risk',
                'title_id' => 'Lini Keuangan & Risiko Siber',
                'tagline' => 'Shielding executive boards, corporate balance sheets, and fintech institutions from liability and digital extortion.',
                'tagline_id' => 'Melindungi dewan komisaris & direksi, neraca korporasi, dan lembaga fintech dari liabilitas hukum dan pemerasan siber.',
                'image' => 'assets/img/service-financial.jpg',
                'description' => 'Institutional governance requires proactive defense against litigation and cyber disruptions. Vlex Re crafts high-capacity liability syndicates protecting corporate directors, asset managers, and commercial banks against breach of duty, fraud, and ransomware extortion.',
                'description_id' => 'Tata kelola institusional menuntut perlindungan proaktif terhadap gugatan hukum dan gangguan siber. Vlex Re membentuk sindikat liabilitas berkapasitas tinggi untuk melindungi direktur korporasi, manajer investasi, dan bank komersial dari risiko kelalaian tugas, penipuan, dan pemerasan ransomware.',
                'features' => [
                    'Directors & Officers Liability (D&O) for public and private firms',
                    'Financial Institutions Professional Indemnity (FIPI)',
                    'Comprehensive Enterprise Cyber Risk & Ransomware Extortion',
                    'Bankers Blanket Bond (BBB) & Electronic Computer Crime',
                    'Employment Practices Liability (EPLI)',
                    'Public Offering of Securities Insurance (POSI)',
                ],
                'features_id' => [
                    'Tanggung Gugat Direksi & Komisaris (D&O) untuk perusahaan terbuka & tertutup',
                    'Asuransi Profesional Lembaga Keuangan (FIPI)',
                    'Risiko Siber Korporasi Komprehensif & Pemerasan Ransomware',
                    'Bankers Blanket Bond (BBB) & Kejahatan Komputer Elektronik',
                    'Tanggung Gugat Praktik Ketenagakerjaan (EPLI)',
                    'Asuransi Penawaran Umum Perdana Saham (POSI)',
                ],
            ],
            'retakaful' => [
                'slug' => 'retakaful',
                'category' => 'Islamic Reinsurance',
                'category_id' => 'Reasuransi Syariah',
                'title' => 'Retakaful Syariah',
                'title_id' => 'Retakaful Syariah',
                'tagline' => 'Certified Sharia-compliant risk mutualization strictly aligned with DSN-MUI fatwas and AAOIFI standards.',
                'tagline_id' => 'Sistem saling tolong-menolong (ta\'awun) bersertifikasi syariah yang selaras penuh dengan fatwa DSN-MUI dan standar AAOIFI.',
                'image' => 'assets/img/service-retakaful.jpg',
                'description' => 'Following the mandatory spin-off regulations for Sharia business units in Indonesia, robust Retakaful capacity is essential. Vlex Re’s Islamic Reinsurance Desk designs treaties utilizing transparent Wakalah bi al-Ujrah and Mudharabah models, ensuring clean surplus sharing and Tabarru’ fund growth.',
                'description_id' => 'Menyusul ketentuan pemisahan (spin-off) unit usaha syariah di Indonesia, kapasitas Retakaful yang kokoh menjadi krusial. Meja Reasuransi Syariah Vlex Re merancang treaty dengan akad Wakalah bi al-Ujrah dan Mudharabah yang transparan, memastikan pembagian surplus yang adil dan pertumbuhan dana Tabarru\' yang berkelanjutan.',
                'features' => [
                    'Wakalah bi al-Ujrah Underwriting Protocol & Mudharabah Surplus Sharing',
                    'Sharia-Compliant Proportional and Cat XOL Retakaful treaties',
                    'Takaful Family & Life Surplus Risk Mutualization Pools',
                    'Syndication with premier GCC and Southeast Asian Retakaful operators',
                    'Independent Sharia Advisory Board (DSN-MUI) compliance vetting',
                    'Complete segregation between participant and shareholder capital',
                ],
                'features_id' => [
                    'Protokol Underwriting Wakalah bi al-Ujrah & Pembagian Surplus Mudharabah',
                    'Treaty Retakaful Proporsional dan Non-Proporsional Katastrofe sesuai Syariah',
                    'Pool Saling Menanggung Surplus Risiko Asuransi Jiwa & Keluarga Syariah',
                    'Sindikasi dengan operator Retakaful terkemuka di Timur Tengah (GCC) dan ASEAN',
                    'Verifikasi kepatuhan Dewan Pengawas Syariah (DSN-MUI)',
                    'Pemisahan menyeluruh antara dana peserta (Tabarru\') dan modal pemegang saham',
                ],
            ],
            'specialty' => [
                'slug' => 'specialty',
                'category' => 'Complex & Engineering Risks',
                'category_id' => 'Risiko Kompleks & Rekayasa',
                'title' => 'Specialty & Complex Risks',
                'title_id' => 'Risiko Khusus & Kompleks',
                'tagline' => 'Contractors all risks, mega civil infrastructure, aviation hull, and political risk guarantees.',
                'tagline_id' => 'Contractors all risks, infrastruktur sipil berskala nasional, rangka pesawat, dan jaminan risiko politik.',
                'image' => 'assets/img/hero-scbd-dusk.jpg',
                'description' => 'For unique exposures that fall outside standard treaty terms, our specialty brokers craft bespoke placements. We support national strategic infrastructure projects, toll roads, bridges, aviation fleets, and cross-border trade credit guarantees.',
                'description_id' => 'Untuk eksposur khusus di luar ketentuan treaty standar, pialang spesialis kami merancang penempatan pesanan khusus (bespoke). Kami mendukung proyek infrastruktur strategis nasional, jalan tol, jembatan, armada maskapai penerbangan, dan jaminan kredit ekspor-impor.',
                'features' => [
                    'Contractors\' All Risks (CAR) and Erection All Risks (EAR) for National Projects',
                    'Advanced Loss of Profits (ALOP) for mega infrastructure',
                    'Aviation Hull, Passenger Legal Liability & Airport Ground Handling',
                    'Political Violence, Terrorism & Civil Commotion (PVT)',
                    'Trade Credit, Sovereign Non-Payment & Surety Bonds',
                    'Specialist High-Hazard Single Risk Syndication',
                ],
                'features_id' => [
                    'Contractors\' All Risks (CAR) & Erection All Risks (EAR) untuk Proyek Strategis Nasional',
                    'Advanced Loss of Profits (ALOP) untuk mega infrastruktur sipil',
                    'Rangka Pesawat, Tanggung Gugat Hukum Penumpang & Ground Handling Bandara',
                    'Kerusuhan Politik, Terorisme & Gangguan Sipil (PVT)',
                    'Asuransi Kredit Perdagangan, Risiko Gagal Bayar Negara & Surety Bond',
                    'Sindikasi Risiko Tunggal Berbahaya Tinggi Spesialis',
                ],
            ],
        ];
    }

    public function index()
    {
        $services = $this->getServicesList();
        return view('services', compact('services'));
    }

    public function show(string $slug)
    {
        $services = $this->getServicesList();
        if (!isset($services[$slug])) {
            abort(404);
        }

        $service = $services[$slug];
        $allServices = $services;

        return view('service-detail', compact('service', 'allServices'));
    }
}
