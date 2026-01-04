<?php
// Language Detection
$current_path = $_SERVER['REQUEST_URI'];
$lang = 'bm'; // Default language

if (strpos($current_path, '/en') !== false || strpos($current_path, '/en/') !== false) {
    $lang = 'en';
} elseif (isset($_GET['lang'])) {
    $lang = $_GET['lang'] == 'en' ? 'en' : 'bm';
}

// Language Arrays
$lang_bm = [
    'nav_home' => 'Laman Utama',
    'nav_services' => 'Perkhidmatan',
    'nav_portfolio' => 'Contoh Kerja',
    'nav_how_it_works' => 'Cara Kerja',
    'nav_packages' => 'Pakej',
    'nav_contact' => 'Hubungi',
    
    'hero_title' => 'Kami bina sistem web praktikal yang selesaikan masalah bisnes sebenar',
    'hero_subtitle' => 'PHP • MySQL • Panel Admin • Laporan',
    'hero_btn_discuss' => 'Bincang Projek Anda',
    'hero_btn_quote' => 'Dapatkan Sebut Harga Percuma',
    
    'services_title' => 'Apa Yang Kami Buat?',
    'services_subtitle' => 'Sistem web praktikal yang selesaikan masalah bisnes sebenar',
    
    'service_1_title' => 'Pembangunan Sistem Web',
    'service_1_desc' => 'Panel admin khas, pengurusan pengguna, dan sistem CRUD dibina dengan PHP & MySQL',
    
    'service_2_title' => 'Penyelenggaraan & Penambahbaikan',
    'service_2_desc' => 'Baiki bug, tambah ciri baru, dan tingkatkan sistem sedia ada',
    
    'service_3_title' => 'Automasi & Pelaporan',
    'service_3_desc' => 'Automasikan laporan dan eksport data untuk jimat masa',
    
    'portfolio_title' => 'Contoh Kerja',
    'portfolio_subtitle' => 'Projek contoh yang dibina untuk tujuan demonstrasi & ujian. Kami boleh bina sistem serupa yang disesuaikan dengan keperluan bisnes anda.',
    
    'how_it_works_title' => 'Cara Kerja',
    'how_it_works_subtitle' => 'Proses mudah, komunikasi jelas, penghantaran tepat masa',
    
    'why_me_title' => 'Kenapa Perlu Pilih YmHub Tech?',
    'why_me_subtitle' => 'Penyelesaian praktikal, komunikasi jelas, penghantaran yang boleh dipercayai',
    
    'packages_title' => 'Pakej Website',
    'packages_subtitle' => 'Pilih pakej yang sesuai dengan keperluan anda',
    
    'contact_title' => 'Hubungi Kami',
    'contact_subtitle' => 'Ada idea projek atau sistem? Mari kita bincang.',
    'contact_ready' => 'Bersedia untuk mulakan projek anda?',
    'contact_desc' => 'Kami di sini untuk membantu anda membina sistem web yang diperlukan oleh bisnes anda. Hubungi kami dan mari kita bincangkan keperluan anda.',
    'contact_form_title' => 'Atau hantar kami mesej',
    'contact_form_name' => 'Nama Anda',
    'contact_form_email' => 'Emel Anda',
    'contact_form_subject' => 'Subjek',
    'contact_form_message' => 'Beritahu kami tentang projek anda...',
    'contact_form_send' => 'Hantar Mesej',
    
    'footer_copyright' => '© 2025 Ym Success. Hak cipta terpelihara.',
    
    'step_1_title' => 'Anda Terangkan Keperluan',
    'step_1_desc' => 'Beritahu kami tentang keperluan bisnes anda dan apa yang anda mahu sistem lakukan. Kami akan berbincang melalui WhatsApp atau emel.',
    'step_2_title' => 'Kami Cadangkan Penyelesaian & Anggaran',
    'step_2_desc' => 'Kami akan menganalisis keperluan anda dan mencadangkan penyelesaian dengan jadual masa dan harga. Tiada kos tersembunyi.',
    'step_3_title' => 'Pembangunan & Kemaskini',
    'step_3_desc' => 'Ym Hub membina sistem dan memastikan anda dikemaskini tentang kemajuan. Anda boleh meminta perubahan sepanjang proses.',
    'step_4_title' => 'Penghantaran & Sokongan',
    'step_4_desc' => 'Sistem dihantar dan diuji. Ym Hub menyediakan sokongan untuk memastikan semuanya berfungsi dengan lancar.',
    
    'why_1_title' => 'Komunikasi Jelas',
    'why_1_desc' => 'Kami membalas dalam masa 24 jam. Tiada jargon teknikal - Kami menerangkan perkara dalam istilah mudah supaya anda memahami setiap langkah.',
    'why_2_title' => 'Penyelesaian Praktikal',
    'why_2_desc' => 'Kami fokus pada menyelesaikan masalah sebenar anda, bukan over-engineering. Anda dapat apa yang anda perlukan, tidak lebih, tidak kurang.',
    'why_3_title' => 'Penghantaran Tepat Masa',
    'why_3_desc' => 'Kami menghormati tarikh akhir. Anda akan tahu jadual masa terlebih dahulu dan kami akan menghantar seperti yang dijanjikan.',
    'why_4_title' => 'Sokongan Selepas Penghantaran',
    'why_4_desc' => 'Kami tidak hilang selepas penghantaran. Kami menyediakan sokongan untuk membetulkan isu dan membuat penambahbaikan.',
];

$lang_en = [
    'nav_home' => 'Home',
    'nav_services' => 'Services',
    'nav_portfolio' => 'Sample Work',
    'nav_how_it_works' => 'How It Works',
    'nav_packages' => 'Packages',
    'nav_contact' => 'Contact',
    
    'hero_title' => 'We build practical web systems that solve real business problems',
    'hero_subtitle' => 'PHP • MySQL • Admin Panels • Reports',
    'hero_btn_discuss' => 'Discuss Your Project',
    'hero_btn_quote' => 'Get Free Quote',
    
    'services_title' => 'What We Do ?',
    'services_subtitle' => 'Practical web systems that solve real business problems',
    
    'service_1_title' => 'Web System Development',
    'service_1_desc' => 'Custom admin panels, user management, and CRUD systems built with PHP & MySQL',
    
    'service_2_title' => 'Maintenance & Enhancement',
    'service_2_desc' => 'Fix bugs, add new features, and improve existing systems',
    
    'service_3_title' => 'Automation & Reporting',
    'service_3_desc' => 'Automate your reports and data exports to save time',
    
    'portfolio_title' => 'Sample Work',
    'portfolio_subtitle' => 'Sample projects built for demonstration & testing purposes. I can build similar systems tailored to your business needs.',
    
    'how_it_works_title' => 'How It Works',
    'how_it_works_subtitle' => 'Simple process, clear communication, on-time delivery',
    
    'why_me_title' => 'Why Choose YmHub Tech?',
    'why_me_subtitle' => 'Practical solutions, clear communication, reliable delivery',
    
    'packages_title' => 'Website Packages',
    'packages_subtitle' => 'Choose the package that suits your needs',
    
    'contact_title' => 'Get In Touch',
    'contact_subtitle' => 'Have a project or system idea? Let\'s discuss.',
    'contact_ready' => 'Ready to start your project?',
    'contact_desc' => 'I\'m here to help you build the web system your business needs. Get in touch and let\'s discuss your requirements.',
    'contact_form_title' => 'Or send us a message',
    'contact_form_name' => 'Your Name',
    'contact_form_email' => 'Your Email',
    'contact_form_subject' => 'Subject',
    'contact_form_message' => 'Tell us about your project...',
    'contact_form_send' => 'Send Message',
     
    'footer_copyright' => '© 2025 Ym Success. All rights reserved.',
    
    'step_1_title' => 'You Explain Requirement',
    'step_1_desc' => 'Tell us about your business needs and what you want the system to do. We\'ll discuss via WhatsApp or email.',
    'step_2_title' => 'We Propose Solution & Estimate',
    'step_2_desc' => 'We\'ll analyze your needs and propose a solution with timeline and pricing. No hidden costs.',
    'step_3_title' => 'Development & Updates',
    'step_3_desc' => 'We build the system and keep you updated on progress. You can request changes along the way.',
    'step_4_title' => 'Delivery & Support',
    'step_4_desc' => 'System delivered and tested. We provide support to ensure everything works smoothly.',
    
    'why_1_title' => 'Clear Communication',
    'why_1_desc' => 'We respond within 24 hours. No technical jargon - We explain things in simple terms so you understand every step.',
    'why_2_title' => 'Practical Solutions',
    'why_2_desc' => 'We focus on solving your actual problems, not over-engineering. You get what you need, nothing more, nothing less.',
    'why_3_title' => 'On-Time Delivery',
    'why_3_desc' => 'We respect deadlines. You\'ll know the timeline upfront and We\'ll deliver as promised.',
    'why_4_title' => 'Post-Delivery Support',
    'why_4_desc' => 'We don\'t disappear after delivery. We provide support to fix issues and make improvements.',
];

// Get current language array
$L = $lang == 'en' ? $lang_en : $lang_bm;

// Language URLs
$lang_bm_url = '/bm/';
$lang_en_url = '/en/';

// Base URL
$base_url = str_replace('/index.php', '', $_SERVER['PHP_SELF']);
$base_url = rtrim($base_url, '/');
if (empty($base_url)) $base_url = '';

// Current page path (without language prefix)
function getCurrentPath($lang) {
    $path = $_SERVER['REQUEST_URI'];
    $path = str_replace('/bm/', '/', $path);
    $path = str_replace('/en/', '/', $path);
    $path = str_replace('/bm', '/', $path);
    $path = str_replace('/en', '/', $path);
    return $path;
}

$current_path_clean = getCurrentPath($lang);

// Base path for assets and includes
$base_path = dirname($_SERVER['PHP_SELF']);
if ($base_path == '/' || $base_path == '\\') {
    $base_path = '';
} else {
    // Remove language prefix from base path
    $base_path = str_replace('/bm', '', $base_path);
    $base_path = str_replace('/en', '', $base_path);
    if ($base_path == '/' || $base_path == '\\') {
        $base_path = '';
    }
}
?>

