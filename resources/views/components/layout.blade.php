<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() ?? '' }}">

    <title>{{ $title ?? 'Vlex Reinsurance | Institutional Reinsurance Intermediaries & Risk Advisors' }}</title>
    <meta name="description" content="PT Vlex Reinsurance represents Indonesian insurers and regional enterprises with disciplined reinsurance advisory, tier-1 global syndication, and hands-on claims advocacy.">
    
    <!-- OpenGraph Corporate Meta -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="PT Vlex Reinsurance - Institutional Reinsurance Brokers">
    <meta property="og:description" content="Local insight. Analytical precision. Global capital. Supervised by Otoritas Jasa Keuangan (OJK).">
    <meta property="og:image" content="{{ asset('assets/img/hero-scbd-dusk.jpg') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    <!-- Typography: Figtree, Inter & Cormorant Garamond -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Figtree:ital,wght@0,400;0,500;0,600;0,700;0,800;1,500&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Design System -->
    <link rel="stylesheet" href="{{ asset('assets/css/vlex-design-system.css') }}">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js"></script>

    <script>
        const vlexI18n = {
            en: {
                nav_home: "Home",
                nav_about: "About",
                nav_services: "Services",
                nav_network: "Network",
                nav_contact: "Contact",
                nav_enquire: "Enquire",

                hero_h1_1: "Local insight.",
                hero_h1_2: "Analytical precision.",
                hero_h1_3: "Global capital.",
                hero_btn_discuss: "Discuss your reinsurance programme",
                hero_btn_explore: "Explore our services",
                rail_years: "Years in Business",
                rail_pros: "Reinsurance Specialists",
                rail_rank: "National Intermediary, 2025",
                rail_networks: "Global Syndicates",

                network_marquee_label: "Member & Syndication Partner of Leading Global Reinsurance Networks",

                firm_h2: "Independent reinsurance advice throughout the risk lifecycle",
                firm_lede: "Since 2008, PT Vlex Reinsurance has represented Indonesian insurers and enterprises through structured treaty design, global retrocession syndication, and disciplined claims settlement advocacy.",
                firm_p2: "One accountable senior team coordinates each stage—from catastrophe modeling and actuarial risk assessment to treaty wording negotiation and complex recovery.",
                firm_cta: "About the firm",
                firm_badge_title: "Headquarters Reception",
                firm_badge_sub: "Treasury Tower, District 8 SCBD",

                disc_h2: "Explore our reinsurance solutions and specialized practice desks.",
                disc_p: "Structured treaty and facultative reinsurance arrangements tailored to institutional client portfolios and solvency objectives.",
                disc_b1_title: "Browse Products",
                disc_b1_link: "View all products",

                prod_property: "Property Treaty & Cat XOL",
                prod_marine: "Marine Hull & Cargo",
                prod_energy: "Energy & Petrochemicals",
                prod_financial: "Financial Lines & Cyber",
                prod_retakaful: "Retakaful Syariah",
                prod_specialty: "Specialty & Complex Risks",

                tag_property: "Treaty & Facultative",
                tag_marine: "Marine & Logistics",
                tag_energy: "Upstream & Downstream",
                tag_financial: "Liability & Executive",
                tag_retakaful: "Islamic Reinsurance",
                tag_specialty: "Custom Engineering",

                human_h2: "Experienced specialists, involved at every stage.",
                human_lede: "The senior directors you know remain directly accountable from initial actuarial review through placement, renewal, and claims adjudication. When niche technical disciplines are required, we coordinate the right specialists without obscuring responsibility.",
                human_caption_loc: "Senior-led engagement, Jakarta",
                human_caption_sub: "Direct director accountability on all placements.",
                human_cta: "Meet our leadership",

                role_comm_pres: "President Commissioner",
                role_comm_ind: "Independent Commissioner",
                role_dir_pres: "President Director",
                role_dir_treaty: "Director of Treaty Reinsurance",
                role_dir_ops: "Director of Technical Operations & Claims",

                track_h2: "Technical depth that strengthens personal advisory",
                track_p: "More than 95 professionals, comprehensive domestic insurer relationships, and eight global underwriting syndicates broaden the capital resources we coordinate for clients.",
                track_badge: "Independent recognition",
                track_rank: "4th-ranked",
                track_rank_title: "National Reinsurance Broker, 2025",
                track_rank_desc: "Recognised in Media Asuransi's July 2025 Market Leaders ranking.",
                track_view: "View recognition",

                stat_1_val: "18+",
                stat_1_lbl: "Years in business",
                stat_1_sub: "Operating continuously since 2008.",
                stat_2_val: "95+",
                stat_2_lbl: "Reinsurance specialists",
                stat_2_sub: "Actuaries, treaty brokers, and risk engineers.",
                stat_3_val: "45+",
                stat_3_lbl: "General insurance partners",
                stat_3_sub: "Unlocking tier-1 capacity across the nation.",
                stat_4_val: "25+",
                stat_4_lbl: "Health & life partners",
                stat_4_sub: "Surplus relief and group life programs.",
                stat_5_val: "9+",
                stat_5_lbl: "Registered OJK Experts",
                stat_5_sub: "Certified reinsurance broking leadership.",
                stat_6_val: "8",
                stat_6_lbl: "Global syndicates & hubs",
                stat_6_sub: "London, Singapore, Zurich, and GCC markets.",

                partner_h2: "Strong market relationships expand your treaty options.",
                partner_p: "We work with established Indonesian ceding insurers and premier specialist markets to secure appropriate capacity, competitive terms, and responsive support.",

                cta_h2: "Let us discuss your reinsurance programme.",
                cta_p: "Connect with our senior treaty and facultative brokers at SCBD Jakarta for a confidential portfolio review.",
                cta_btn_discuss: "Discuss your programme",
                cta_btn_explore: "Explore products",

                footer_desc: "Independent reinsurance advice, structured in Indonesia and connected to premier underwriting syndicates worldwide.",
                footer_col_company: "Company",
                footer_col_services: "Services",
                footer_col_offices: "Offices",
                footer_link_about: "About Us",
                footer_link_leadership: "Executive Leadership",
                footer_link_syndicates: "Global Syndicates",
                footer_link_contact: "Contact & Enquiries",
                footer_head_office: "Head Office, Jakarta",
                footer_head_addr: "Treasury Tower, 31st Floor, District 8 SCBD Lot 28, Jl. Jend. Sudirman Kav. 52-53, Jakarta Selatan 12190",
                footer_head_phone: "+62 21 5088 7700",
                footer_rep_office: "Representative Office, Surabaya",
                footer_rep_addr: "Intiland Tower, 8th Floor, Suite 802, Jl. Panglima Sudirman No. 101-103, Surabaya 60271",
                footer_rep_phone: "+62 31 535 8822",
                footer_rights: "PT Vlex Reinsurance Brokers. All rights reserved.",
                footer_ojk: "Licensed reinsurance broker, registered with and supervised by Otoritas Jasa Keuangan (OJK). Member of APPARINDO.",

                about_h1: "Institutional Integrity.<br><em style=\"font-family: var(--font-quote); color: var(--gold-light);\">Analytical Precision.</em>",
                about_intro: "Founded in 2008, PT Vlex Reinsurance has established itself as one of Indonesia's premier licensed reinsurance intermediaries, bridging domestic risk portfolios with tier-1 international syndicates.",
                about_heritage_h2: "Disciplined advocacy through 18 years of market evolution.",
                about_heritage_lede: "As Indonesian regulatory solvency requirements transitioned under OJK directives (including POJK 23/2023 capital tiering), Vlex Re pioneered analytical reinsurance modeling that maximizes balance-sheet efficiency.",
                about_heritage_p2: "We operate on an institutional fiduciary model: independent from direct insurers, fiercely advocating for ceding companies during contract wording negotiation and catastrophic claims recovery. Our actuarial desk works directly with global underwriters in London, Singapore, and Zurich to structure optimal retention attachment points.",
                about_stat_ojk: "OJK Regulatory Compliance",
                about_stat_synd: "Total Insured Values Syndicated",
                about_board_h2: "The Board of Commissioners and Directors",
                about_board_p: "Our leadership combines seasoned insurance broking veterans, accredited actuaries, and risk engineers with decades of international market experience.",
                about_boc_title: "Board of Commissioners",
                about_bod_title: "Board of Directors",
                about_aris_desc: "Over 35 years in the Southeast Asian reinsurance industry. Fellow of the Chartered Insurance Institute (UK) and former advisor to national insurance regulatory committees.",
                about_hendra_desc: "Senior financial economist specializing in corporate governance, capital market solvency, and institutional audit committees across public financial institutions.",
                about_victor_desc: "Directs company strategic placement and global reinsurance syndication across Lloyd's and Asian market hubs. Senior Fellow of ANZIIF with 24 years of broking tenure.",
                about_clarissa_desc: "Chartered Insurer and Fellow of the Society of Actuaries of Indonesia (FSAI). Leads proportional and catastrophe excess of loss treaty design and retrocession modeling.",
                about_bramantyo_desc: "Certified Risk Governance Professional managing complex claims adjustment, facultative placements in energy and marine, and institutional compliance protocol.",
                about_recog_h2: "Recognized by Regulatory Bodies and Industry Peers.",
                about_recog_lede: "Ranked 4th among national reinsurance brokers in the 2025 Media Asuransi Market Leaders survey, reflecting our solvency volume and placement consistency.",
                about_recog_ojk: "Fully authorized reinsurance broker operating under continuous supervision.",
                about_recog_apparindo: "Active member adhering to the highest ethical and professional code of conduct.",
                about_recog_sharia: "Certified Retakaful operations certified under National Sharia Board (DSN-MUI) guidelines.",

                serv_h1: "Comprehensive Risk Placement.<br><em style=\"font-family: var(--font-quote); color: var(--gold-light);\">Tailored Treaty Engineering.</em>",
                serv_intro: "From high-capacity catastrophe excess of loss treaties to bespoke single-risk facultative placements, Vlex Re provides analytical underwriting support and tier-1 syndication across all major insurance classes.",
                serv_grid_h2: "Structured reinsurance across conventional and Islamic sectors",
                serv_explore_btn: "Explore specifications",
                serv_prop_desc: "Sophisticated proportional quota share, surplus, and multi-layer catastrophe excess of loss (Cat XOL) modeling protecting insurance balance sheets against earthquake, flood, and secondary peril events.",
                serv_marine_desc: "Tailored treaty facilities and facultative binders for commercial shipping fleets, deepwater offshore supply vessels, port authority liability, project cargo, and fine art & specie.",
                serv_energy_desc: "Direct access to leading upstream, midstream, and downstream energy syndicates across Singapore and London for offshore platforms, refineries, LNG terminals, and geothermal power plants.",
                serv_fin_desc: "Safeguarding enterprise balance sheets and corporate boards against complex liability lawsuits, regulatory enforcement proceedings, cyber breach extortion, and financial crime.",
                serv_retak_desc: "Certified Sharia-compliant reinsurance broking adhering to DSN-MUI and AAOIFI standards. Ensuring risk mutualization purity and transparent Tabarru’ fund pool administration.",
                serv_spec_desc: "Structured solutions for non-standard risks requiring bespoke policy wordings, including mega civil engineering projects, aviation hull & liability, trade credit, and political violence.",

                net_h1: "Unlocking Tier-1 Capital.<br><em style=\"font-family: var(--font-quote); color: var(--gold-light);\">Global Reinsurance Syndicates.</em>",
                net_intro: "Independent from single-insurer ties, Vlex Re maintains direct syndication channels with A-rated international retrocessionaires across Lloyd's of London, Singapore, Continental Europe, and the Middle East.",
                net_h2: "Strategic Alliances & Underwriting Syndicates",
                net_p: "Connecting Indonesian cedants with global capacity under strict counterparty credit scrutiny.",
                net_lloyds_desc: "Direct access to Lloyd's specialized underwriting boxes for mega-infrastructure, offshore energy, cyber extortion, and aviation risk placement.",
                net_sg_desc: "Close collaborative treaties with regional reinsurers located in Singapore's financial center, ensuring rapid placement and time-zone aligned settlement.",
                net_wbn_desc: "The world's largest fully integrated network of independent insurance and reinsurance brokers across 100+ countries.",
                net_uniba_desc: "Global alliance of independent risk advisors committed to cross-border client advocacy and peer-to-peer technical knowledge sharing.",
                net_cont_desc: "Long-term capacity partnerships with top-tier German, Swiss, and French retrocessionaires supporting large catastrophic treaty structures.",
                net_gcc_desc: "Facilitating cross-border Islamic reinsurance treaties with premier retakaful operators in Dubai, Bahrain, and Kuala Lumpur.",

                contact_h1: "Start a Confidential Discussion.<br><em style=\"font-family: var(--font-quote); color: var(--gold-light);\">Treasury Tower, District 8 SCBD.</em>",
                contact_intro: "Reach out to our leadership team for independent treaty evaluations, facultative risk engineering surveys, or reinsurance portfolio structuring under complete confidentiality.",
                contact_form_title: "Institutional Enquiry",
                contact_form_desc: "Please submit your corporate details. A licensed senior reinsurance broker will reach out within one business day.",
                contact_label_inst: "Institution / Insurance Company *",
                contact_ph_inst: "e.g. PT Asuransi Mitra Tbk",
                contact_label_name: "Contact Person & Title *",
                contact_ph_name: "e.g. Budi Santoso, Head of Underwriting",
                contact_label_email: "Corporate Email *",
                contact_label_phone: "Telephone / Direct Line",
                contact_label_interest: "Primary Class of Reinsurance Interest *",
                contact_label_msg: "Scope of Discussion or Portfolio Overview *",
                contact_ph_msg: "Provide background regarding your treaty restructuring, attachment points, or facultative placement needs...",
                contact_submit: "Submit Institutional Enquiry",
                contact_side_addr_title: "Headquarters Address",
                contact_side_rep_title: "Surabaya Branch",
                contact_side_direct_title: "Direct Brokerage Desk",

                detail_back: "← All Services",
                detail_philosophy: "Underwriting Philosophy & Risk Structuring",
                detail_key_features: "Key Treaty & Placement Features",
                detail_claims_h3: "Claims Protocol & Fiduciary Advocacy",
                detail_claims_p: "When catastrophic losses occur, every hour counts. Vlex Re maintains a predefined claims notification and loss adjuster engagement protocol agreed with lead retrocessionaires prior to policy inception. Our technical claims team coordinates surveys, forensic engineering evidence, and interim cash calls to preserve the ceding company’s liquidity.",
                detail_discuss_btn: "Discuss Placement",
                detail_desk_lead: "Practice Desk Leadership",
                detail_desk_title: "Lead Treaty Director",
                detail_desk_bio: "Available for confidential treaty audits, portfolio pricing modeling, and attachment level structuring.",
                detail_desk_contact: "Contact Practice Desk",
                detail_other_desks: "Other Specialized Desks"
            },
            id: {
                nav_home: "Beranda",
                nav_about: "Tentang",
                nav_services: "Layanan",
                nav_network: "Jaringan",
                nav_contact: "Kontak",
                nav_enquire: "Konsultasi",

                hero_h1_1: "Wawasan lokal.",
                hero_h1_2: "Presisi analitis.",
                hero_h1_3: "Modal global.",
                hero_btn_discuss: "Diskusikan program reasuransi Anda",
                hero_btn_explore: "Jelajahi layanan kami",
                rail_years: "Tahun Beroperasi",
                rail_pros: "Tenaga Ahli Reasuransi",
                rail_rank: "Pialang Nasional, 2025",
                rail_networks: "Sindikat Global",

                network_marquee_label: "Anggota & Mitra Sindikasi Jaringan Reasuransi Global Terkemuka",

                firm_h2: "Nasihat reasuransi independen sepanjang siklus risiko",
                firm_lede: "Sejak 2008, PT Vlex Reinsurance mewakili kepentingan asuradur dan korporasi Indonesia dalam perancangan program treaty terstruktur, sindikasi retrosesi global, dan advokasi penyelesaian klaim secara disiplin.",
                firm_p2: "Satu tim pimpinan yang bertanggung jawab mengoordinasikan setiap tahap—mulai dari pemodelan katastrofe dan mitigasi solvabilitas hingga negosiasi wording polis dan penyelesaian klaim besar.",
                firm_cta: "Tentang perusahaan",
                firm_badge_title: "Lobi Kantor Pusat",
                firm_badge_sub: "Treasury Tower, District 8 SCBD",

                disc_h2: "Jelajahi solusi reasuransi dan bidang praktik khusus kami.",
                disc_p: "Struktur program treaty dan fakultatif yang dirancang khusus untuk portofolio risiko institusional dan target solvabilitas Anda.",
                disc_b1_title: "Telusuri Produk",
                disc_b1_link: "Lihat semua produk",

                prod_property: "Treaty Properti & Cat XOL",
                prod_marine: "Rangka Kapal & Kargo",
                prod_energy: "Energi & Petrokimia",
                prod_financial: "Lini Keuangan & Siber",
                prod_retakaful: "Retakaful Syariah",
                prod_specialty: "Risiko Khusus & Kompleks",

                tag_property: "Treaty & Fakultatif",
                tag_marine: "Maritim & Logistik",
                tag_energy: "Hulu & Hilir",
                tag_financial: "Tanggung Gugat & Eksekutif",
                tag_retakaful: "Reasuransi Syariah",
                tag_specialty: "Teknik & Risiko Khusus",

                human_h2: "Spesialis berpengalaman, terlibat di setiap tahap.",
                human_lede: "Jajaran pimpinan senior yang Anda temui tetap bertanggung jawab langsung dari analisis aktuarial awal hingga penempatan, perbaruan berkala, dan penanganan klaim. Ketika keahlian khusus diperlukan, kami melibatkan pakar yang tepat tanpa mengaburkan rantai pertanggungjawaban.",
                human_caption_loc: "Nasihat pimpinan senior, Jakarta",
                human_caption_sub: "Keterlibatan direksi langsung pada setiap penempatan.",
                human_cta: "Temui jajaran manajemen",

                role_comm_pres: "Komisaris Utama",
                role_comm_ind: "Komisaris Independen",
                role_dir_pres: "Direktur Utama",
                role_dir_treaty: "Direktur Reasuransi Treaty",
                role_dir_ops: "Direktur Operasional & Klaim",

                track_h2: "Kedalaman teknis yang memperkuat layanan personal",
                track_p: "Lebih dari 95 tenaga ahli, hubungan pasar asuransi domestik yang luas, dan delapan sindikat reasuransi global memperluas kapasitas permodalan yang dapat kami koordinasikan untuk klien.",
                track_badge: "Pengakuan independen",
                track_rank: "Peringkat ke-4",
                track_rank_title: "Pialang Reasuransi Nasional, 2025",
                track_rank_desc: "Diakui dalam pemeringkatan Market Leaders Juli 2025 oleh Media Asuransi.",
                track_view: "Lihat pengakuan",

                stat_1_val: "18+",
                stat_1_lbl: "Tahun beroperasi",
                stat_1_sub: "Melayani pasar sejak tahun 2008.",
                stat_2_val: "95+",
                stat_2_lbl: "Tenaga ahli reasuransi",
                stat_2_sub: "Aktuaris, pialang treaty, dan teknisi risiko.",
                stat_3_val: "45+",
                stat_3_lbl: "Mitra asuransi umum",
                stat_3_sub: "Akses kapasitas tingkat satu di seluruh negeri.",
                stat_4_val: "25+",
                stat_4_lbl: "Mitra jiwa & kesehatan",
                stat_4_sub: "Program solvabilitas dan asuransi grup.",
                stat_5_val: "9+",
                stat_5_lbl: "Ahli Pialang Terdaftar OJK",
                stat_5_sub: "Kepemimpinan pialang reasuransi tersertifikasi.",
                stat_6_val: "8",
                stat_6_lbl: "Sindikat & hub global",
                stat_6_sub: "Pasar London, Singapura, Zurich, dan Teluk.",

                partner_h2: "Kemitraan pasar yang kuat memperluas pilihan treaty Anda.",
                partner_p: "Kami bekerja sama dengan perusahaan asuransi terkemuka di Indonesia dan pasar spesialis internasional untuk menjamin kapasitas yang tepat, persyaratan kompetitif, serta dukungan responsif.",

                cta_h2: "Mari bicarakan program reasuransi Anda.",
                cta_p: "Hubungi pialang senior treaty dan fakultatif kami di SCBD Jakarta untuk evaluasi portofolio terpercaya.",
                cta_btn_discuss: "Diskusikan program Anda",
                cta_btn_explore: "Jelajahi produk",

                footer_desc: "Nasihat reasuransi independen, dirancang di Indonesia dan terhubung dengan sindikat underwriting terkemuka di seluruh dunia.",
                footer_col_company: "Perusahaan",
                footer_col_services: "Layanan",
                footer_col_offices: "Kantor",
                footer_link_about: "Tentang Kami",
                footer_link_leadership: "Jajaran Manajemen",
                footer_link_syndicates: "Sindikat Global",
                footer_link_contact: "Kontak & Konsultasi",
                footer_head_office: "Kantor Pusat, Jakarta",
                footer_head_addr: "Treasury Tower Lantai 31, District 8 SCBD Lot 28, Jl. Jend. Sudirman Kav. 52-53, Jakarta Selatan 12190",
                footer_head_phone: "+62 21 5088 7700",
                footer_rep_office: "Kantor Perwakilan, Surabaya",
                footer_rep_addr: "Intiland Tower Lantai 8, Suite 802, Jl. Panglima Sudirman No. 101-103, Surabaya 60271",
                footer_rep_phone: "+62 31 535 8822",
                footer_rights: "PT Vlex Reinsurance Brokers. Hak cipta dilindungi undang-undang.",
                footer_ojk: "Pialang reasuransi berizin, terdaftar dan diawasi oleh Otoritas Jasa Keuangan (OJK). Anggota APPARINDO.",

                about_h1: "Integritas Institusional.<br><em style=\"font-family: var(--font-quote); color: var(--gold-light);\">Presisi Analitis.</em>",
                about_intro: "Didirikan pada tahun 2008, PT Vlex Reinsurance telah memantapkan diri sebagai salah satu pialang reasuransi berizin terkemuka di Indonesia, menjembatani portofolio risiko domestik dengan sindikat internasional tingkat satu.",
                about_heritage_h2: "Advokasi disiplin selama 18 tahun evolusi pasar.",
                about_heritage_lede: "Seiring transisi ketentuan solvabilitas OJK (termasuk penjenjangan modal POJK 23/2023), Vlex Re memelopori pemodelan reasuransi analitis yang memaksimalkan efisiensi neraca asuradur.",
                about_heritage_p2: "Kami beroperasi berdasarkan model fidusia institusional: independen dari perusahaan asuransi langsung, mendampingi perusahaan ceding secara tegas dalam negosiasi wording kontrak dan pemulihan klaim katastrofe. Meja aktuarial kami bekerja langsung dengan underwriter global di London, Singapura, dan Zurich untuk menyusun batas retensi yang optimal.",
                about_stat_ojk: "Kepatuhan Regulasi OJK",
                about_stat_synd: "Total Nilai Pertanggungan Disindikasikan",
                about_board_h2: "Dewan Komisaris dan Direksi",
                about_board_p: "Kepemimpinan kami menggabungkan praktisi senior pialang asuransi, aktuaris terakreditasi, dan teknisi risiko dengan pengalaman pasar internasional puluhan tahun.",
                about_boc_title: "Dewan Komisaris",
                about_bod_title: "Direksi",
                about_aris_desc: "Lebih dari 35 tahun berkiprah di industri reasuransi Asia Tenggara. Fellow of Chartered Insurance Institute (UK) dan mantan penasihat komite regulasi perasuransian nasional.",
                about_hendra_desc: "Ekonom keuangan senior dengan spesialisasi tata kelola perusahaan, solvabilitas pasar modal, dan komite audit institusional di lembaga keuangan publik.",
                about_victor_desc: "Memimpin penempatan strategis perusahaan dan sindikasi reasuransi global di Lloyd's dan hub pasar Asia. Senior Fellow ANZIIF dengan pengalaman 24 tahun kepialangan.",
                about_clarissa_desc: "Chartered Insurer dan Fellow of Society of Actuaries of Indonesia (FSAI). Memimpin perancangan treaty proporsional, non-proporsional katastrofe, dan pemodelan retrosesi.",
                about_bramantyo_desc: "Certified Risk Governance Professional yang mengelola penyelesaian klaim kompleks, penempatan fakultatif energi & maritim, serta protokol kepatuhan institusional.",
                about_recog_h2: "Diakui oleh Lembaga Regulasi dan Rekan Industri.",
                about_recog_lede: "Meraih peringkat ke-4 pialang reasuransi nasional dalam survei Market Leaders Media Asuransi 2025, mencerminkan volume solvabilitas dan konsistensi penempatan kami.",
                about_recog_ojk: "Pialang reasuransi berizin resmi yang beroperasi di bawah pengawasan berkala OJK.",
                about_recog_apparindo: "Anggota aktif yang menjunjung tinggi kode etik dan profesionalisme profesi.",
                about_recog_sharia: "Operasional Retakaful bersertifikasi sesuai panduan Dewan Syariah Nasional (DSN-MUI).",

                serv_h1: "Penempatan Risiko Komprehensif.<br><em style=\"font-family: var(--font-quote); color: var(--gold-light);\">Rancangan Treaty Khusus.</em>",
                serv_intro: "Dari treaty catastrophe excess of loss berkapasitas tinggi hingga penempatan fakultatif risiko tunggal, Vlex Re menyediakan dukungan underwriting analitis dan sindikasi tingkat satu di seluruh lini asuransi utama.",
                serv_grid_h2: "Reasuransi terstruktur di sektor konvensional dan syariah",
                serv_explore_btn: "Pelajari spesifikasi",
                serv_prop_desc: "Pemodelan kuota share proporsional, surplus, dan multi-layer catastrophe excess of loss (Cat XOL) canggih guna melindungi neraca asuradur dari risiko gempa bumi, banjir, dan bencana sekunder.",
                serv_marine_desc: "Fasilitas treaty terstruktur dan slip fakultatif untuk armada pelayaran niaga, kapal suplai lepas pantai, liabilitas otoritas pelabuhan, kargo proyek bernilai tinggi, serta fine art & specie.",
                serv_energy_desc: "Akses langsung ke sindikat energi hulu, midstream, dan hilir terkemuka di Singapura dan London untuk anjungan lepas pantai, kilang minyak, terminal LNG, serta pembangkit panas bumi.",
                serv_fin_desc: "Melindungi neraca korporasi dan dewan eksekutif dari gugatan liabilitas hukum yang kompleks, tindakan regulator, pemerasan peretasan siber, dan kejahatan keuangan komersial.",
                serv_retak_desc: "Pialang reasuransi bersertifikasi syariah sesuai standar DSN-MUI dan AAOIFI. Memastikan kemurnian prinsip tolong-menolong (ta'awun) dan pengelolaan dana Tabarru' yang transparan.",
                serv_spec_desc: "Solusi terstruktur untuk risiko non-standar yang membutuhkan wording khusus, termasuk proyek infrastruktur sipil berskala nasional, aviasi, asuransi kredit perdagangan, dan risiko terorisme/politik.",

                net_h1: "Membuka Akses Modal Tingkat Satu.<br><em style=\"font-family: var(--font-quote); color: var(--gold-light);\">Sindikat Reasuransi Global.</em>",
                net_intro: "Independen tanpa ikatan asuradur tunggal, Vlex Re mengelola jalur sindikasi langsung dengan retroksioner internasional berperingkat A di Lloyd's London, Singapura, Eropa Kontinental, dan Timur Tengah.",
                net_h2: "Aliansi Strategis & Sindikat Underwriting",
                net_p: "Menghubungkan ceding Indonesia dengan kapasitas global di bawah evaluasi kredit counterparty yang ketat.",
                net_lloyds_desc: "Akses langsung ke underwriting boxes spesialis Lloyd's untuk mega infrastruktur, energi lepas pantai, pemerasan siber, dan penempatan risiko aviasi.",
                net_sg_desc: "Treaty kolaboratif erat dengan reasuradur regional di pusat keuangan Singapura, menjamin penempatan cepat dan penyelesaian klaim dalam zona waktu yang sama.",
                net_wbn_desc: "Jaringan pialang asuransi dan reasuransi independen terintegrasi terbesar di dunia yang mencakup lebih dari 100 negara.",
                net_uniba_desc: "Aliansi global penasihat risiko independen yang berkomitmen pada pendampingan klien lintas negara dan pertukaran keahlian teknis tingkat tinggi.",
                net_cont_desc: "Kemitraan kapasitas jangka panjang dengan retroksioner papan atas Jerman, Swiss, dan Prancis untuk struktur treaty katastrofe skala besar.",
                net_gcc_desc: "Memfasilitasi treaty reasuransi syariah lintas batas dengan operator retakaful terkemuka di Dubai, Bahrain, dan Kuala Lumpur.",

                contact_h1: "Mulai Diskusi Terpercaya.<br><em style=\"font-family: var(--font-quote); color: var(--gold-light);\">Treasury Tower, District 8 SCBD.</em>",
                contact_intro: "Hubungi tim pimpinan kami untuk evaluasi treaty independen, survei rekayasa risiko fakultatif, atau perancangan portofolio reasuransi dengan kerahasiaan penuh.",
                contact_form_title: "Formulir Konsultasi Institusional",
                contact_form_desc: "Silakan kirimkan informasi perusahaan Anda. Pialang reasuransi senior berizin kami akan menghubungi Anda dalam kurun satu hari kerja.",
                contact_label_inst: "Nama Institusi / Perusahaan Asuransi *",
                contact_ph_inst: "contoh: PT Asuransi Mitra Tbk",
                contact_label_name: "Nama Penanggung Jawab & Jabatan *",
                contact_ph_name: "contoh: Budi Santoso, Head of Underwriting",
                contact_label_email: "Email Perusahaan *",
                contact_label_phone: "Nomor Telepon / Saluran Langsung",
                contact_label_interest: "Lini Reasuransi Utama *",
                contact_label_msg: "Ruang Lingkup Diskusi atau Ikhtisar Portofolio *",
                contact_ph_msg: "Berikan latar belakang terkait restrukturisasi treaty, attachment point, atau kebutuhan penempatan fakultatif Anda...",
                contact_submit: "Kirim Formulir Konsultasi",
                contact_side_addr_title: "Alamat Kantor Pusat",
                contact_side_rep_title: "Kantor Perwakilan Surabaya",
                contact_side_direct_title: "Saluran Kepialangan Langsung",

                detail_back: "← Semua Layanan",
                detail_philosophy: "Filosofi Underwriting & Struktur Risiko",
                detail_key_features: "Fitur Utama Treaty & Penempatan",
                detail_claims_h3: "Protokol Klaim & Advokasi Fidusia",
                detail_claims_p: "Ketika kerugian katastrofe terjadi, setiap jam sangat berarti. Vlex Re menerapkan protokol notifikasi klaim dan penunjukan loss adjuster yang telah disepakati sebelumnya dengan retroksioner utama. Tim klaim teknis kami mengoordinasikan survei, pembuktian teknik forensik, dan interim cash calls guna menjaga likuiditas perusahaan ceding.",
                detail_discuss_btn: "Diskusikan Penempatan",
                detail_desk_lead: "Pimpinan Meja Praktik",
                detail_desk_title: "Direktur Treaty Utama",
                detail_desk_bio: "Tersedia untuk audit treaty rahasia, pemodelan harga portofolio, dan penataan batas retensi.",
                detail_desk_contact: "Hubungi Meja Praktik",
                detail_other_desks: "Meja Praktik Khusus Lainnya"
            }
        };
    </script>
</head>
<body x-data="{
    lang: localStorage.getItem('vlex_lang') || 'en',
    mobileMenu: false,
    isScrolled: false,
    setLang(l) {
        this.lang = l;
        localStorage.setItem('vlex_lang', l);
    },
    t(key) {
        return (vlexI18n[this.lang] && vlexI18n[this.lang][key]) || (vlexI18n['en'][key] || key);
    }
}"
@scroll.window="isScrolled = (window.pageYOffset > 50)"
class="antialiased selection:bg-[#7A0C22] selection:text-white flex flex-col min-h-screen">

    <!-- Sticky Navigation Bar -->
    <x-navbar />

    <!-- Main Content -->
    <main id="main">
        {{ $slot }}
    </main>

    <!-- Institutional Footer -->
    <x-footer />

</body>
</html>
