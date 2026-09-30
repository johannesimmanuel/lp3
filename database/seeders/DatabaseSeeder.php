<?php

namespace Database\Seeders;

use App\Models\ContactEnquiry;
use App\Models\ManagementMember;
use App\Models\Service;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Admin User (reads credentials from environment variables)
        $adminEmail = env('ADMIN_EMAIL', 'admin@vlexre.co.id');
        $adminPassword = env('ADMIN_INITIAL_PASSWORD', 'VlexRe#Portal2026!');

        User::updateOrCreate(
            ['email' => $adminEmail],
            [
                'name' => 'Administrator Vlex Re',
                'password' => Hash::make($adminPassword),
                'email_verified_at' => now(),
            ]
        );

        // Also update any old mock re user if exists
        User::where('email', 'admin@mockreinsurance.co.id')->delete();

        // 2. Services / Reinsurance Solutions
        $services = [
            [
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
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
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
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
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
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
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
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
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
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
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
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($services as $srv) {
            Service::updateOrCreate(['slug' => $srv['slug']], $srv);
        }

        // 3. Management Members (Commissioners & Directors)
        $members = [
            [
                'name' => 'Drs. Aris Munandar, FCII',
                'role' => 'President Commissioner',
                'role_id' => 'Komisaris Utama',
                'type' => 'commissioner',
                'photo' => 'assets/img/mgmt-aris.jpg',
                'bio' => 'Over 35 years in the Southeast Asian reinsurance industry. Fellow of the Chartered Insurance Institute (UK) and former advisor to national insurance regulatory committees.',
                'bio_id' => 'Lebih dari 35 tahun pengalaman di industri reasuransi Asia Tenggara. Fellow dari Chartered Insurance Institute (UK) dan mantan penasihat komite regulasi asuransi nasional.',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Prof. Dr. Hendra Suwarno, S.E., M.B.A.',
                'role' => 'Independent Commissioner',
                'role_id' => 'Komisaris Independen',
                'type' => 'commissioner',
                'photo' => 'assets/img/mgmt-victor.jpg',
                'bio' => 'Senior financial economist specializing in corporate governance, capital market solvency, and institutional audit committees across public financial institutions.',
                'bio_id' => 'Ekonom senior pasar modal yang berspesialisasi dalam tata kelola korporat, solvabilitas keuangan, dan komite audit lembaga keuangan publik.',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Victor L. Panjaitan, AAIK, ANZIIF',
                'role' => 'President Director',
                'role_id' => 'Direktur Utama',
                'type' => 'director',
                'photo' => 'assets/img/mgmt-victor.jpg',
                'bio' => 'Directs company strategic placement and global reinsurance syndication across Lloyd\'s and Asian market hubs. Senior Fellow of ANZIIF with 24 years of broking tenure.',
                'bio_id' => 'Memimpin arah penempatan strategis perusahaan dan sindikasi reasuransi global di Lloyd\'s dan hub pasar Asia. Senior Fellow ANZIIF dengan 24 tahun pengalaman pialang reasuransi.',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Clarissa Danuwijaya, ACII, FSAI',
                'role' => 'Director of Treaty Reinsurance',
                'role_id' => 'Direktur Reasuransi Treaty',
                'type' => 'director',
                'photo' => 'assets/img/mgmt-clarissa.jpg',
                'bio' => 'Chartered Insurer and Fellow of the Society of Actuaries of Indonesia (FSAI). Leads proportional and catastrophe excess of loss treaty design and retrocession modeling.',
                'bio_id' => 'Chartered Insurer dan Fellow Society of Actuaries of Indonesia (FSAI). Memimpin perancangan treaty proporsional dan excess of loss katastrofe serta pemodelan retrosesi.',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Bramantyo Wicaksono, S.E., CRGP',
                'role' => 'Director of Technical Operations & Claims',
                'role_id' => 'Direktur Operasional Teknis & Klaim',
                'type' => 'director',
                'photo' => 'assets/img/mgmt-bramantyo.jpg',
                'bio' => 'Certified Risk Governance Professional managing complex claims adjustment, facultative placements in energy and marine, and institutional compliance protocol.',
                'bio_id' => 'Certified Risk Governance Professional yang mengelola penyesuaian klaim kompleks, penempatan fakultatif energi dan maritim, serta protokol kepatuhan institusional.',
                'sort_order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($members as $m) {
            ManagementMember::updateOrCreate(['name' => $m['name']], $m);
        }

        // 4. Site Settings
        $settings = [
            ['key' => 'site_name', 'value' => 'PT Vlex Reinsurance', 'label' => 'Company Name', 'group' => 'general'],
            ['key' => 'site_tagline', 'value' => 'Institutional Reinsurance Intermediaries & Risk Advisors', 'label' => 'Tagline', 'group' => 'general'],
            ['key' => 'site_email', 'value' => 'treaty@vlexre.co.id', 'label' => 'Official Email', 'group' => 'contact'],
            ['key' => 'site_phone', 'value' => '+62 21 5289 7800', 'label' => 'Phone Number', 'group' => 'contact'],
            ['key' => 'site_address', 'value' => 'World Trade Center 3, 18th Floor, Jl. Jend. Sudirman Kav. 29-31, Jakarta 12920, Indonesia', 'label' => 'Head Office Address', 'group' => 'contact'],
            ['key' => 'ojk_license', 'value' => 'KEP-418/NB.1/2018', 'label' => 'OJK Broking License', 'group' => 'general'],
            ['key' => 'stat_syndicated', 'value' => '$3.8B+', 'label' => 'Total Insured Values Syndicated', 'group' => 'stats'],
            ['key' => 'stat_solvency', 'value' => '100%', 'label' => 'OJK Solvency Regulatory Compliance', 'group' => 'stats'],
            ['key' => 'hero_headline', 'value' => 'Institutional Reinsurance Intermediaries', 'label' => 'Hero Headline', 'group' => 'hero'],
        ];

        foreach ($settings as $s) {
            Setting::updateOrCreate(['key' => $s['key']], $s);
        }

        // 5. Initial Sample Enquiries for Immediate Inbox Demo
        if (ContactEnquiry::count() === 0) {
            ContactEnquiry::create([
                'institution_name' => 'PT Asuransi Central Asia',
                'contact_name' => 'Bambang Sudiro',
                'email' => 'bambang.s@acainsurance.co.id',
                'phone' => '+62 811 9876 5432',
                'service_interest' => 'property',
                'message' => 'Kami ingin menjadwalkan diskusi awal terkait penataan kembali struktur Catastrophe Excess of Loss (Cat XOL) portfolio properti komersial kami untuk renewal tahun 2027.',
                'is_read' => false,
            ]);

            ContactEnquiry::create([
                'institution_name' => 'PT Asuransi Tugu Mandiri',
                'contact_name' => 'Siti Nurhaliza',
                'email' => 'siti.n@tugumandiri.com',
                'phone' => '+62 812 3456 7890',
                'service_interest' => 'energy',
                'message' => 'Mohon informasi kapasitas penempatan sindikasi fakultatif reasuransi proyek instalasi pembangkit panas bumi di Jawa Barat.',
                'is_read' => true,
            ]);

            ContactEnquiry::create([
                'institution_name' => 'Bank Syariah Indonesia (BSI) Reinsurance Desk',
                'contact_name' => 'Ahmad Fauzi',
                'email' => 'ahmad.fauzi@bsi.co.id',
                'phone' => '+62 813 1122 3344',
                'service_interest' => 'retakaful',
                'message' => 'Meminta kajian awal terkait skema Retakaful treaty berbasis Wakalah bi al-Ujrah untuk portofolio pembiayaan korporasi kami.',
                'is_read' => false,
            ]);
        }
    }
}
