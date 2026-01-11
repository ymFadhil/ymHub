<?php
// This file contains the main content that will be included in both BM and EN versions
// All text should use $L array from lang
if (!isset($base_path)) {
    $base_path = '';
}
?>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-background">
            <div class="hero-bg-image"></div>
            <div class="hero-bg-overlay"></div>
            <div class="hero-glow glow-1"></div>
            <div class="hero-glow glow-2"></div>
            <div class="hero-glow glow-3"></div>
        </div>
        <div class="hero-graphics">
            <div class="graphic-shape shape-1"></div>
            <div class="graphic-shape shape-2"></div>
            <div class="graphic-shape shape-3"></div>
            <div class="graphic-shape shape-4"></div>
            <div class="graphic-shape shape-5"></div>
            <div class="graphic-circle circle-1"></div>
            <div class="graphic-circle circle-2"></div>
            <div class="graphic-circle circle-3"></div>
            <div class="graphic-grid"></div>
            <div class="graphic-dots"></div>
            <div class="graphic-code code-1">{ }</div>
            <div class="graphic-code code-2">&lt;/&gt;</div>
            <div class="graphic-code code-3">[ ]</div>
            <div class="graphic-icon icon-1"><i class="fab fa-php"></i></div>
            <div class="graphic-icon icon-2"><i class="fab fa-js"></i></div>
            <div class="graphic-icon icon-3"><i class="fas fa-database"></i></div>
        </div>
        <div class="container">
            <div class="hero-content">
                <!-- Trust Badge -->
                <div class="hero-badge">
                    <span class="badge-icon">✨</span>
                    <span class="badge-text"><?php echo $lang == 'en' ? 'Custom Web Systems Built for Your Business' : 'Sistem Web Khas Dibina untuk Perniagaan Anda'; ?></span>
                </div>
                
                <!-- Main Title with Gradient -->
                <h1 class="hero-title">
                    <span class="title-gradient"><?php echo $L['hero_title']; ?></span>
                </h1>
                
                <!-- Subtitle with Tech Stack -->
                <p class="hero-subtitle">
                    <span class="subtitle-highlight"><?php echo $L['hero_subtitle']; ?></span>
                </p>
                
                <!-- Quick Stats -->
                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-number">100%</div>
                        <div class="stat-label"><?php echo $lang == 'en' ? 'Custom Built' : 'Dibina Khas'; ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label"><?php echo $lang == 'en' ? 'Support' : 'Sokongan'; ?></div>
                    </div>
                    
                </div>
                
                <!-- CTA Buttons -->
                <div class="hero-buttons">
                    <a href="https://wa.me/60174776935?text=Hi,%20I%20found%20your%20website%20and%20would%20like%20to%20discuss%20a%20web%20system%20project." class="btn btn-primary btn-hero-primary" target="_blank">
                        <i class="fab fa-whatsapp"></i> 
                        <span><?php echo $L['hero_btn_discuss']; ?></span>
                        <i class="fas fa-arrow-right btn-arrow"></i>
                    </a>
                    <a href="#contact" class="btn btn-secondary btn-hero-secondary">
                        <i class="fas fa-envelope"></i>
                        <span><?php echo $L['hero_btn_quote']; ?></span>
                    </a>
                </div>
                
                <!-- Trust Indicators -->
                <div class="hero-trust">
                    <div class="trust-item">
                        <i class="fas fa-check-circle"></i>
                        <span><?php echo $lang == 'en' ? 'Free Consultation' : 'Perundingan Percuma'; ?></span>
                    </div>
                    <div class="trust-item">
                        <i class="fas fa-check-circle"></i>
                        <span><?php echo $lang == 'en' ? 'No Hidden Costs' : 'Tiada Kos Tersembunyi'; ?></span>
                    </div>
                    <div class="trust-item">
                        <i class="fas fa-check-circle"></i>
                        <span><?php echo $lang == 'en' ? 'Malaysia Based' : 'Berpangkalan di Malaysia'; ?></span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Floating Particles -->
        <div class="hero-particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title"><?php echo $L['services_title']; ?></h2>
            <p class="section-subtitle"><?php echo $L['services_subtitle']; ?></p>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3><?php echo $L['service_1_title']; ?></h3>
                    <p><?php echo $L['service_1_desc']; ?></p>
                    <ul class="service-features-list">
                        <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Admin Panel' : 'Panel Admin'; ?></li>
                        <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'User Roles & Permissions' : 'Peranan & Kebenaran Pengguna'; ?></li>
                        <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'CRUD System' : 'Sistem CRUD'; ?></li>
                        <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Dashboard & Reports' : 'Papan Pemuka & Laporan'; ?></li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3><?php echo $L['service_2_title']; ?></h3>
                    <p><?php echo $L['service_2_desc']; ?></p>
                    <ul class="service-features-list">
                        <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Bug Fixing' : 'Pembaikan Bug'; ?></li>
                        <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Add New Features' : 'Tambah Ciri Baru'; ?></li>
                        <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Performance Improvement' : 'Peningkatan Prestasi'; ?></li>
                        <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'System Updates' : 'Kemaskini Sistem'; ?></li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-file-excel"></i>
                    </div>
                    <h3><?php echo $L['service_3_title']; ?></h3>
                    <p><?php echo $L['service_3_desc']; ?></p>
                    <ul class="service-features-list">
                        <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Excel / PDF Export' : 'Eksport Excel / PDF'; ?></li>
                        <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'KPI & Summary Reports' : 'Laporan KPI & Ringkasan'; ?></li>
                        <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Automated Data Processing' : 'Pemprosesan Data Automatik'; ?></li>
                        <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Scheduled Reports' : 'Laporan Berjadual'; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Sample Work Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="section-title"><?php echo $L['portfolio_title']; ?></h2>
            <p class="section-subtitle"><?php echo $L['portfolio_subtitle']; ?></p>
            
            <div class="portfolio-grid">
                <!-- Project 1: E-commerce -->
                <a href="<?php 
                    // Get the current directory structure to detect subdirectory
                    $current_dir = dirname($_SERVER['PHP_SELF']);
                    $has_ymhub = strpos($current_dir, '/ymhub') !== false;
                    $prefix = $has_ymhub ? '/ymhub' : '';
                    
                    // Construct path based on language
                    if (isset($lang)) {
                        echo $prefix . '/' . $lang . '/ecommerce';
                    } else {
                        echo $prefix . '/bm/ecommerce'; // default
                    }
                ?>" class="portfolio-item portfolio-link">
                    <div class="portfolio-image">
                        <img src="<?php echo $base_path == '/bm' || $base_path == '/en' ? '..' : ''; ?>/assets/backgroud_picture/ecommerce_dashboard_preview.png" alt="E-commerce Website" class="portfolio-img-cover">
                    </div>
                    <div class="portfolio-content">
                        <h3><?php echo $lang == 'en' ? 'E-commerce Website' : 'Website E-dagang'; ?></h3>
                        <p class="portfolio-problem"><strong><?php echo $lang == 'en' ? 'Problem:' : 'Masalah:'; ?></strong> <?php echo $lang == 'en' ? 'Businesses struggle to sell products online manually, leading to order errors, inventory confusion, and lost sales opportunities.' : 'Perniagaan sukar menjual produk secara online secara manual, menyebabkan kesilapan pesanan, kekeliruan inventori, dan kehilangan peluang jualan.'; ?></p>
                        <p class="portfolio-solution"><strong><?php echo $lang == 'en' ? 'Solution:' : 'Penyelesaian:'; ?></strong> <?php echo $lang == 'en' ? 'A complete e-commerce website with shopping cart, secure payment gateway, order management, and inventory tracking.' : 'Website e-dagang lengkap dengan shopping cart, gerbang pembayaran selamat, pengurusan pesanan, dan penjejakan inventori.'; ?></p>
                        <div class="portfolio-features">
                            <span class="portfolio-tag"><i class="fas fa-shopping-cart"></i> <?php echo $lang == 'en' ? 'Shopping Cart System' : 'Sistem Troli Beli-belah'; ?></span>
                            <span class="portfolio-tag"><i class="fas fa-credit-card"></i> <?php echo $lang == 'en' ? 'Payment Gateway (FPX/Cards)' : 'Tempat Pembayaran (FPX/Kad)'; ?></span>
                            <span class="portfolio-tag"><i class="fas fa-box"></i> <?php echo $lang == 'en' ? 'Product & Inventory Management' : 'Pengurusan Produk & Inventori'; ?></span>
                            <span class="portfolio-tag"><i class="fas fa-clipboard-list"></i> <?php echo $lang == 'en' ? 'Order Management System' : 'Sistem Pengurusan Pesanan'; ?></span>
                            <span class="portfolio-tag"><i class="fas fa-user"></i> <?php echo $lang == 'en' ? 'Customer Account Portal' : 'Portal Akaun Pelanggan'; ?></span>
                        </div>
                        <div class="portfolio-cta">
                            <i class="fas fa-arrow-right"></i> <?php echo $lang == 'en' ? 'View Details' : 'Lihat Butiran'; ?>
                        </div>
                    </div>
                </a>

                <!-- Project 2: Professional Website & Booking System -->
                <a href="<?php 
                    // Get the current directory structure to detect subdirectory
                    $current_dir = dirname($_SERVER['PHP_SELF']);
                    $has_ymhub = strpos($current_dir, '/ymhub') !== false;
                    $prefix = $has_ymhub ? '/ymhub' : '';
                    
                    // Construct path based on language
                    if (isset($lang)) {
                        echo $prefix . '/' . $lang . '/professional-website';
                    } else {
                        echo $prefix . '/bm/professional-website'; // default
                    }
                ?>" class="portfolio-item portfolio-link">
                    <div class="portfolio-image">
                        <img src="<?php echo $base_path == '/bm' || $base_path == '/en' ? '..' : ''; ?>/assets/backgroud_picture/booking_system_preview.png" alt="Professional Website & Booking System" class="portfolio-img-cover">
                    </div>
                    <div class="portfolio-content">
                        <h3><?php echo $lang == 'en' ? 'Professional Website & Booking System' : 'Website Profesional & Sistem Tempahan'; ?></h3>

                        <p class="portfolio-problem">
                            <strong><?php echo $lang == 'en' ? 'Problem:' : 'Masalah:'; ?></strong> 
                            <?php echo $lang == 'en' ? 'Businesses struggle to manage appointments manually, leading to double bookings, missed opportunities, and inefficient scheduling.' : 'Perniagaan sukar menguruskan janji temu secara manual, menyebabkan pertindihan tempahan, peluang terlepas, dan penjadualan yang tidak cekap.'; ?>
                        </p>

                        <p class="portfolio-solution">
                            <strong><?php echo $lang == 'en' ? 'Solution:' : 'Penyelesaian:'; ?></strong> 
                            <?php echo $lang == 'en' ? 'A premium website integrated with an automated booking system, payment gateway, and real-time availability tracking.' : 'Laman web premium yang diintegrasikan dengan sistem tempahan automatik, gerbang pembayaran, dan penjejakan ketersediaan masa nyata.'; ?>
                        </p>

                        <div class="portfolio-features">
                            <span class="portfolio-tag"><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Custom Professional Design' : 'Rekabentuk Profesional Custom'; ?></span>
                            <span class="portfolio-tag"><i class="fas fa-calendar-alt"></i> <?php echo $lang == 'en' ? 'Online Appointment Booking' : 'Tempahan Janji Temu Online'; ?></span>
                            <span class="portfolio-tag"><i class="fas fa-credit-card"></i> <?php echo $lang == 'en' ? 'Payment Gateway (FPX/Cards)' : 'Gerbang Pembayaran (FPX/Kad)'; ?></span>
                            <span class="portfolio-tag"><i class="fas fa-bell"></i> <?php echo $lang == 'en' ? 'Automated Email/WA Alerts' : 'Notifikasi Automatik Emel/WA'; ?></span>
                            <span class="portfolio-tag"><i class="fas fa-user-shield"></i> <?php echo $lang == 'en' ? 'Client Management Portal' : 'Portal Pengurusan Pelanggan'; ?></span>
                            <span class="portfolio-tag"><i class="fas fa-chart-bar"></i> <?php echo $lang == 'en' ? 'Booking Reports & Analytics' : 'Laporan & Analitik Tempahan'; ?></span>
                        </div>
                        <div class="portfolio-cta">
                            <i class="fas fa-arrow-right"></i> <?php echo $lang == 'en' ? 'View Details' : 'Lihat Butiran'; ?>
                        </div>
                    </div>
                </a>

                <!-- Project 3: Single Page Website -->
                <a href="<?php 
                    // Get the current directory structure to detect subdirectory
                    $current_dir = dirname($_SERVER['PHP_SELF']);
                    $has_ymhub = strpos($current_dir, '/ymhub') !== false;
                    $prefix = $has_ymhub ? '/ymhub' : '';
                    
                    // Construct path based on language
                    if (isset($lang)) {
                        echo $prefix . '/' . $lang . '/single-page';
                    } else {
                        echo $prefix . '/bm/single-page'; // default
                    }
                ?>" class="portfolio-item portfolio-link">
                    <div class="portfolio-image">
                        <img src="<?php echo $base_path == '/bm' || $base_path == '/en' ? '..' : ''; ?>/assets/backgroud_picture/single_page_preview.png" alt="Single Page Website" class="portfolio-img-cover">
                    </div>
                    <div class="portfolio-content">
                        <h3><?php echo $lang == 'en' ? 'Single Page Website' : 'Single Page Website'; ?></h3>

                        <p class="portfolio-problem">
                            <strong><?php echo $lang == 'en' ? 'Problem:' : 'Masalah:'; ?></strong> 
                            <?php echo $lang == 'en' ? 'Businesses need a simple, focused website to promote specific products, services, or events without the complexity of a full multi-page site.' : 'Perniagaan memerlukan website yang ringkas dan fokus untuk mempromosikan produk, servis, atau event tertentu tanpa kerumitan laman web berbilang halaman.'; ?>
                        </p>

                        <p class="portfolio-solution">
                            <strong><?php echo $lang == 'en' ? 'Solution:' : 'Penyelesaian:'; ?></strong> 
                            <?php echo $lang == 'en' ? 'A single page website that is simple, fast, and focused on your main goal. Perfect for product launches, event registrations, or service promotions.' : 'Single page website yang ringkas, cepat, dan fokus kepada tujuan utama anda. Sesuai untuk pelancaran produk, pendaftaran event, atau promosi servis.'; ?>
                        </p>

                        <div class="portfolio-features">
                            <span class="portfolio-tag"><i class="fas fa-mobile-alt"></i> <?php echo $lang == 'en' ? 'Responsive Website Design' : 'Rekabentuk Web Responsive'; ?></span>
                            <span class="portfolio-tag"><i class="fas fa-search"></i> <?php echo $lang == 'en' ? 'Basic SEO Optimization' : 'Optimaal Enjin Carian (SEO) Asas'; ?></span>
                            <span class="portfolio-tag"><i class="fas fa-file-alt"></i> <?php echo $lang == 'en' ? '1 Online Form' : '1 Borang Online'; ?></span>
                            <span class="portfolio-tag"><i class="fab fa-whatsapp"></i> <?php echo $lang == 'en' ? 'WhatsApp Button' : 'Butang WhatsApp'; ?></span>
                            <span class="portfolio-tag"><i class="fas fa-share-alt"></i> <?php echo $lang == 'en' ? 'Social Media Integration' : 'Integrasi Media Sosial'; ?></span>
                        </div>
                        <div class="portfolio-cta">
                            <i class="fas fa-arrow-right"></i> <?php echo $lang == 'en' ? 'View Details' : 'Lihat Butiran'; ?>
                        </div>
                    </div>

                </a>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="how-it-works">
        <div class="container">
            <h2 class="section-title"><?php echo $L['how_it_works_title']; ?></h2>
            <p class="section-subtitle"><?php echo $L['how_it_works_subtitle']; ?></p>
            
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3><?php echo $lang == 'en' ? 'You Explain Requirement' : 'Anda Terangkan Keperluan'; ?></h3>
                    <p><?php echo $lang == 'en' ? 'Tell us about your business needs and what you want the system to do. We\'ll discuss via WhatsApp or email.' : 'Beritahu kami tentang keperluan bisnes anda dan apa yang anda mahu sistem lakukan. Kami akan berbincang melalui WhatsApp atau emel.'; ?></p>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3><?php echo $lang == 'en' ? 'We Propose Solution & Estimate' : 'Kami Cadangkan Penyelesaian & Anggaran'; ?></h3>
                    <p><?php echo $lang == 'en' ? 'We\'ll analyze your needs and propose a solution with timeline and pricing. No hidden costs.' : 'Kami akan menganalisis keperluan anda dan mencadangkan penyelesaian dengan jadual masa dan harga. Tiada kos tersembunyi.'; ?></p>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3><?php echo $lang == 'en' ? 'Development & Updates' : 'Pembangunan & Kemaskini'; ?></h3>
                    <p><?php echo $lang == 'en' ? 'We build the system and keep you updated on progress. You can request changes along the way.' : 'Kami membina sistem dan memastikan anda dikemaskini tentang kemajuan. Anda boleh meminta perubahan sepanjang proses.'; ?></p>
                </div>
                
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3><?php echo $lang == 'en' ? 'Delivery & Support' : 'Penghantaran & Sokongan'; ?></h3>
                    <p><?php echo $lang == 'en' ? 'System delivered and tested. We provide support to ensure everything works smoothly.' : 'Sistem dihantar dan diuji. Kami menyediakan sokongan untuk memastikan semuanya berfungsi dengan lancar.'; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Work With Me Section -->
    <section id="why-me" class="why-me">
        <div class="container">
            <h2 class="section-title"><?php echo $L['why_me_title']; ?></h2>
            <p class="section-subtitle"><?php echo $L['why_me_subtitle']; ?></p>
            
            <div class="why-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3><?php echo $lang == 'en' ? 'Clear Communication' : 'Komunikasi Jelas'; ?></h3>
                    <p><?php echo $lang == 'en' ? 'We respond within 24 hours. No technical jargon - We explain things in simple terms so you understand every step.' : 'Kami membalas dalam masa 24 jam. Tiada jargon teknikal - Kami menerangkan perkara dalam istilah mudah supaya anda memahami setiap langkah.'; ?></p>
                </div>
                
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3><?php echo $lang == 'en' ? 'Practical Solutions' : 'Penyelesaian Praktikal'; ?></h3>
                    <p><?php echo $lang == 'en' ? 'We focus on solving your actual problems, not over-engineering. You get what you need, nothing more, nothing less.' : 'Kami fokus pada menyelesaikan masalah sebenar anda, bukan over-engineering. Anda dapat apa yang anda perlukan, tidak lebih, tidak kurang.'; ?></p>
                </div>
                
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3><?php echo $lang == 'en' ? 'On-Time Delivery' : 'Penghantaran Tepat Masa'; ?></h3>
                    <p><?php echo $lang == 'en' ? 'We respect deadlines. You\'ll know the timeline upfront and we\'ll deliver as promised.' : 'Kami menghormati tarikh akhir. Anda akan tahu jadual masa terlebih dahulu dan kami akan menghantar seperti yang dijanjikan.'; ?></p>
                </div>
                
                <div class="why-card">
                    <div class="why-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3><?php echo $lang == 'en' ? 'Post-Delivery Support' : 'Sokongan Selepas Penghantaran'; ?></h3>
                    <p><?php echo $lang == 'en' ? 'We don\'t disappear after delivery. We provide support to fix issues and make improvements.' : 'Kami tidak hilang selepas penghantaran. Kami menyediakan sokongan untuk membetulkan isu dan membuat penambahbaikan.'; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section id="technologies" class="technologies">
        <div class="container">
            <h2 class="section-title"><?php echo $lang == 'en' ? 'Technologies & Tools' : 'Teknologi & Alat'; ?></h2>
            <div class="tech-slider-wrapper">
                <div class="tech-slider">
                    <div class="tech-item">
                        <div class="tech-logo">
                            <i class="fab fa-php"></i>
                            <span class="tech-text">PHP</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="tech-logo">
                            <i class="fas fa-database"></i>
                            <span class="tech-text">MySQL</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="tech-logo">
                            <i class="fab fa-js"></i>
                            <span class="tech-text">JavaScript</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="tech-logo">
                            <i class="fab fa-html5"></i>
                            <span class="tech-text">HTML5</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="tech-logo">
                            <i class="fab fa-css3-alt"></i>
                            <span class="tech-text">CSS3</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="tech-logo">
                            <i class="fab fa-bootstrap"></i>
                            <span class="tech-text">Bootstrap</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="tech-logo">
                            <i class="fab fa-git-alt"></i>
                            <span class="tech-text">Git</span>
                        </div>
                    </div>
                    <!-- Duplicate for seamless loop -->
                    <div class="tech-item">
                        <div class="tech-logo">
                            <i class="fab fa-php"></i>
                            <span class="tech-text">PHP</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="tech-logo">
                            <i class="fas fa-database"></i>
                            <span class="tech-text">MySQL</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="tech-logo">
                            <i class="fab fa-js"></i>
                            <span class="tech-text">JavaScript</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="tech-logo">
                            <i class="fab fa-html5"></i>
                            <span class="tech-text">HTML5</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="tech-logo">
                            <i class="fab fa-css3-alt"></i>
                            <span class="tech-text">CSS3</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="tech-logo">
                            <i class="fab fa-bootstrap"></i>
                            <span class="tech-text">Bootstrap</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="tech-logo">
                            <i class="fab fa-git-alt"></i>
                            <span class="tech-text">Git</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section id="packages" class="packages">
        <div class="container">
            <h2 class="section-title"><?php echo $L['packages_title']; ?></h2>
            <p class="section-subtitle"><?php echo $L['packages_subtitle']; ?></p>
            
            <div class="packages-comparison-grid">
                <!-- Single Page Package -->
                <div class="package-simple-card">
                    <div class="package-header-red">
                        <h3><?php echo $lang == 'en' ? 'SINGLE PAGE' : 'SINGLE PAGE'; ?></h3>
                    </div>
                    <div class="package-body-white">
                        <p class="package-desc"><?php echo $lang == 'en' ? 'Single Page Website perfect for promoting specific products or services, or for event registration. Simple, fast, and focused on your main goal.' : 'Single Page Website sesuai untuk anda yang nak buat website untuk promosi produk atau servis tertentu, atau untuk daftar event. Website ni ringkas, cepat, dan fokus kepada tujuan utama anda.'; ?></p>
                        <ul class="package-features-simple">
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? '1 Page' : '1 Halaman'; ?></li>
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Responsive Website Design' : 'Rekabentuk Web Responsive'; ?></li>
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Basic SEO Optimization' : 'Optimaal Enjin Carian (SEO) Asas'; ?></li>
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? '1 Online Form' : '1 Borang Online'; ?></li>
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'WhatsApp Button' : 'Butang WhatsApp'; ?></li>
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Social Media Integration' : 'Integrasi Media Sosial'; ?></li>
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Google Analytics' : 'Google Analytics'; ?></li>
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Video / Image' : 'Video / Gambar '; ?></li>
                        </ul>
                    </div>
                    <div class="package-price-red">
                        <div class="price-badge"><?php echo $lang == 'en' ? 'SAVE!' : 'JIMAT!'; ?></div>
                        <p class="price-label-simple"><?php echo $lang == 'en' ? 'Starting from' : 'Bermula dari'; ?></p>
                        <div class="price-wrapper">
                            <span class="price-currency">RM</span>
                            <span class="price-main">780</span>
                        </div>
                        <div class="price-old-wrapper">
                            <span class="price-old-label"><?php echo $lang == 'en' ? 'Original Price:' : 'Harga Asal:'; ?></span>
                            <span class="price-old-simple">RM980</span>
                        </div>
                        <div class="price-savings"><?php echo $lang == 'en' ? 'You save RM200!' : 'Anda jimat RM200!'; ?></div>
                    </div>
                    <a href="https://wa.me/60174776935?text=Hi,%20I%20am%20interested%20in%20Single%20Page%20package" class="btn-whatsapp-red" target="_blank">
                        <i class="fab fa-whatsapp"></i> <?php echo $lang == 'en' ? 'WhatsApp' : 'Whatsapp'; ?>
                    </a>
                    <div class="package-footer-white">
                        <h4><?php echo $lang == 'en' ? 'Payment' : 'Pembayaran'; ?></h4>
                        <p>50% - <?php echo $lang == 'en' ? 'Booking Confirmation' : 'Pengesahan Tempahan'; ?></p>
                        <p>50% - <?php echo $lang == 'en' ? 'After Website Completed' : 'Selepas Website Disiapkan'; ?></p>
                        <h4><?php echo $lang == 'en' ? 'What customer needs to provide?' : 'Apa yang perlu pelanggan sediakan?'; ?></h4>
                        <ul>
                            <li><?php echo $lang == 'en' ? 'Content (copywriting)' : 'Kandungan (content/copywriting)'; ?></li>
                            <li><?php echo $lang == 'en' ? 'Business Info/Profile' : 'Info/Profil Perniagaan'; ?></li>
                            <li><?php echo $lang == 'en' ? 'Business Images' : 'Gambar/Imej Perniagaan'; ?></li>
                            <li><?php echo $lang == 'en' ? 'Company/Business Logo' : 'Logo Syarikat/Perniagaan'; ?></li>
                            <li><?php echo $lang == 'en' ? 'Product/Service Images' : 'Gambar Produk/Perkhidmatan'; ?></li>
                            <li><?php echo $lang == 'en' ? 'Theme Colors' : 'Warna Tema'; ?></li>
                        </ul>
                        <p class="footer-note"><?php echo $lang == 'en' ? 'All materials must be provided in softcopy via email and can be sent in stages.' : 'Semua bahan perlu disediakan dalam softcopy melalui email dan boleh dihantar secara berperingkat.'; ?></p>
                    </div>
                </div>

                <!-- Professional & Booking Package -->
                <div class="package-simple-card">
                    <div class="package-header-red">
                        <h3><?php echo $lang == 'en' ? 'PROFESSIONAL & BOOKING' : 'PROFESIONAL & TEMPAHAN'; ?></h3>
                    </div>
                    <div class="package-body-white">
                        <p class="package-desc"><?php echo $lang == 'en' ? 'Premium Website perfect for service-based businesses, clinics, or consultants that need a professional presence plus an automated booking system to manage appointments and payments.' : 'Website Premium sesuai untuk perniagaan berasaskan perkhidmatan, klinik, atau konsultan yang memerlukan kehadiran profesional serta sistem tempahan automatik untuk mengurus janji temu dan pembayaran.'; ?></p>
                        <ul class="package-features-simple">
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Up to 10 Professional Pages' : 'Sehingga 10 Halaman Profesional'; ?></li>
                            <li><i class="fas fa-calendar-check"></i> <?php echo $lang == 'en' ? 'Automated Booking System' : 'Sistem Tempahan Automatik'; ?></li>
                            <li><i class="fas fa-credit-card"></i> <?php echo $lang == 'en' ? 'Payment Gateway Integration' : 'Integrasi Gerbang Pembayaran'; ?></li>
                            <li><i class="fas fa-bell"></i> <?php echo $lang == 'en' ? 'Email & WhatsApp Notifications' : 'Notifikasi Emel & WhatsApp'; ?></li>
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Responsive Website Design' : 'Rekabentuk Web Responsive'; ?></li>
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Basic SEO Optimization' : 'Optimaal Enjin Carian (SEO) Asas'; ?></li>
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Google Analytics' : 'Google Analytics'; ?></li>
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Admin Dashboard for Management' : 'Papan Pemuka Admin untuk Pengurusan'; ?></li>
                        </ul>
                    </div>
                    <div class="package-price-red">
                        <div class="price-badge"><?php echo $lang == 'en' ? 'BEST VALUE!' : 'NILAI TERBAIK!'; ?></div>
                        <p class="price-label-simple"><?php echo $lang == 'en' ? 'Starting from' : 'Bermula dari'; ?></p>
                        <div class="price-wrapper">
                            <span class="price-currency">RM</span>
                            <span class="price-main">1,880</span>
                        </div>
                        <div class="price-old-wrapper">
                            <span class="price-old-label"><?php echo $lang == 'en' ? 'Original Price:' : 'Harga Asal:'; ?></span>
                            <span class="price-old-simple">RM2,680</span>
                        </div>
                        <div class="price-savings"><?php echo $lang == 'en' ? 'You save RM800!' : 'Anda jimat RM800!'; ?></div>
                    </div>
                    <a href="https://wa.me/60174776935?text=Hi,%20I%20am%20interested%20in%20Professional%20and%20Booking%20package" class="btn-whatsapp-red" target="_blank">
                        <i class="fab fa-whatsapp"></i> <?php echo $lang == 'en' ? 'WhatsApp' : 'Whatsapp'; ?>
                    </a>
                    <div class="package-footer-white">
                        <h4><?php echo $lang == 'en' ? 'Payment' : 'Pembayaran'; ?></h4>
                        <p>50% - <?php echo $lang == 'en' ? 'Booking Confirmation' : 'Pengesahan Tempahan'; ?></p>
                        <p>50% - <?php echo $lang == 'en' ? 'After Website Completed' : 'Selepas Website Disiapkan'; ?></p>
                        <h4><?php echo $lang == 'en' ? 'What customer needs to provide?' : 'Apa yang perlu pelanggan sediakan?'; ?></h4>
                        <ul>
                            <li><?php echo $lang == 'en' ? 'Content (copywriting)' : 'Kandungan (content/copywriting)'; ?></li>
                            <li><?php echo $lang == 'en' ? 'Business Info/Profile' : 'Info/Profil Perniagaan'; ?></li>
                            <li><?php echo $lang == 'en' ? 'Business Images' : 'Gambar/Imej Perniagaan'; ?></li>
                            <li><?php echo $lang == 'en' ? 'Company/Business Logo' : 'Logo Syarikat/Perniagaan'; ?></li>
                            <li><?php echo $lang == 'en' ? 'Service Details & Pricing' : 'Butiran Servis & Harga'; ?></li>
                            <li><?php echo $lang == 'en' ? 'Theme Colors' : 'Warna Tema'; ?></li>
                        </ul>
                        <p class="footer-note"><?php echo $lang == 'en' ? 'All materials must be provided in softcopy via email and can be sent in stages.' : 'Semua bahan perlu disediakan dalam softcopy melalui email dan boleh dihantar secara berperingkat.'; ?></p>
                    </div>
                </div>

                <!-- E-Commerce Package -->
                <div class="package-simple-card">
                    <div class="package-header-red">
                        <h3><?php echo $lang == 'en' ? 'E-COMMERCE' : 'E-COMMERCE'; ?></h3>
                    </div>
                    <div class="package-body-white">
                        <p class="package-desc"><?php echo $lang == 'en' ? 'E-commerce Website perfect for businesses that want to sell products or services online. Complete with shopping cart, payment gateway, and order management system.' : 'Website E-commerce sesuai untuk bisnes yang nak jual produk atau servis secara online. Website ni lengkap dengan shopping cart, payment gateway, dan sistem pengurusan order.'; ?></p>
                        <ul class="package-features-simple">
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Up to 30 Products/Services (Initial)' : 'Sehingga 30 Produk / Servis (Permulaan)'; ?></li>
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Online Payment Gateway - FPX / Credit Card' : 'Online Payment Gateway - FPX / Kad Kredit'; ?></li>
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Responsive Website Design' : 'Rekabentuk Web Responsive'; ?></li>
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Basic SEO Optimization' : 'Optimaal Enjin Carian (SEO) Asas'; ?></li>
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? '1 Online Form' : '1 Borang Online'; ?></li>
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'WhatsApp Button' : 'Butang WhatsApp'; ?></li>
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Social Media Integration' : 'Integrasi Media Sosial'; ?></li>
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Google Analytics' : 'Google Analytics'; ?></li>
                            <li><i class="fas fa-check"></i> <?php echo $lang == 'en' ? 'Video / Image that can be changed from within the system' : 'Video / Gambar yang boleh diubah dari dalam system '; ?></li>
                        </ul>
                    </div>
                    <div class="package-price-red">
                        <div class="price-badge"><?php echo $lang == 'en' ? 'SAVE!' : 'JIMAT!'; ?></div>
                        <p class="price-label-simple"><?php echo $lang == 'en' ? 'Starting from' : 'Bermula dari'; ?></p>
                        <div class="price-wrapper">
                            <span class="price-currency">RM</span>
                            <span class="price-main">2,180</span>
                        </div>
                        <div class="price-old-wrapper">
                            <span class="price-old-label"><?php echo $lang == 'en' ? 'Original Price:' : 'Harga Asal:'; ?></span>
                            <span class="price-old-simple">RM2,780</span>
                        </div>
                        <div class="price-savings"><?php echo $lang == 'en' ? 'You save RM600!' : 'Anda jimat RM600!'; ?></div>
                    </div>
                    <a href="https://wa.me/60174776935?text=Hi,%20I%20am%20interested%20in%20E-commerce%20package" class="btn-whatsapp-red" target="_blank">
                        <i class="fab fa-whatsapp"></i> <?php echo $lang == 'en' ? 'WhatsApp' : 'Whatsapp'; ?>
                    </a>
                    <div class="package-footer-white">
                        <h4><?php echo $lang == 'en' ? 'Payment' : 'Pembayaran'; ?></h4>
                        <p>50% - <?php echo $lang == 'en' ? 'Booking Confirmation' : 'Pengesahan Tempahan'; ?></p>
                        <p>50% - <?php echo $lang == 'en' ? 'After Website Completed' : 'Selepas Website Disiapkan'; ?></p>
                        <h4><?php echo $lang == 'en' ? 'What customer needs to provide?' : 'Apa yang perlu pelanggan sediakan?'; ?></h4>
                        <ul>
                            <li><?php echo $lang == 'en' ? 'Content (copywriting)' : 'Kandungan (content/copywriting)'; ?></li>
                            <li><?php echo $lang == 'en' ? 'Business Info/Profile' : 'Info/Profil Perniagaan'; ?></li>
                            <li><?php echo $lang == 'en' ? 'Business Images' : 'Gambar/Imej Perniagaan'; ?></li>
                            <li><?php echo $lang == 'en' ? 'Company/Business Logo' : 'Logo Syarikat/Perniagaan'; ?></li>
                            <li><?php echo $lang == 'en' ? 'Product/Service Images' : 'Gambar Produk/Perkhidmatan'; ?></li>
                            <li><?php echo $lang == 'en' ? 'Theme Colors' : 'Warna Tema'; ?></li>
                        </ul>
                        <p class="footer-note"><?php echo $lang == 'en' ? 'All materials must be provided in softcopy via email and can be sent in stages.' : 'Semua bahan perlu disediakan dalam softcopy melalui email dan boleh dihantar secara berperingkat.'; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title"><?php echo $L['contact_title']; ?></h2>
            <p class="section-subtitle"><?php echo $L['contact_subtitle']; ?></p>
            
            <div class="contact-content">
                <div class="contact-info">
                    <h3><?php echo $L['contact_ready']; ?></h3>
                    <p><?php echo $L['contact_desc']; ?></p>
                    
                    <div class="contact-cta-buttons">
                        <a href="https://wa.me/60174776935?text=Hi,%20I%20found%20your%20website%20and%20would%20like%20to%20discuss%20a%20web%20system%20project." class="btn btn-whatsapp" target="_blank">
                            <i class="fab fa-whatsapp"></i> <?php echo $lang == 'en' ? 'WhatsApp Now' : 'WhatsApp Sekarang'; ?>
                        </a>
                        <a href="mailto:fadhil@ymhubtech.com" class="btn btn-email">
                            <i class="fas fa-envelope"></i> <?php echo $lang == 'en' ? 'Send Email' : 'Hantar Emel'; ?>
                        </a>
                    </div>
                    
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fab fa-whatsapp"></i>
                            <span>+60 17-477 6935</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>fadhil@ymhubtech.com</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <span><?php echo $lang == 'en' ? 'Response within 24 hours' : 'Respons dalam 24 jam'; ?></span>
                        </div>
                    </div>
                </div>
                
                <form id="contactForm" class="contact-form" method="POST" action="../send_email.php">
                    <h3><?php echo $L['contact_form_title']; ?></h3>
                    
                    <div class="form-group">
                        <div class="input-wrapper">
                            <i class="fas fa-user input-icon"></i>
                            <input type="text" name="name" id="name"
                                placeholder="<?= $L['contact_form_name']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-wrapper">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email" name="email" id="email"
                                placeholder="<?= $L['contact_form_email']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-wrapper">
                            <i class="fas fa-tag input-icon"></i>
                            <input type="text" name="subject" id="subject"
                                placeholder="<?= $L['contact_form_subject']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-wrapper">
                            <i class="fas fa-comment-alt input-icon textarea-icon"></i>
                            <textarea name="message" id="message" rows="5"
                                placeholder="<?= $L['contact_form_message']; ?>" required></textarea>
                        </div>
                    </div>

                    <!-- Honeypot Anti-Spam -->
                    <div style="display:none">
                        <input type="text" name="company">
                    </div>

                    <button type="submit" class="btn btn-primary btn-submit">
                        <span class="btn-text"><?= $L['contact_form_send']; ?></span>
                        <i class="fas fa-paper-plane btn-icon"></i>
                    </button>
                    
                    <div id="form-message" class="form-message"></div>
                </form>
            </div>
        </div>
    </section>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/60174776935?text=Hi,%20I%20found%20your%20website%20and%20would%20like%20to%20discuss%20a%20web%20system%20project." 
    class="whatsapp-button" 
    target="_blank" 
    aria-label="Contact on WhatsApp"
    title="WhatsApp me for quick response">
    <i class="fab fa-whatsapp"></i>
    <span class="whatsapp-tooltip"><?php echo $lang == 'en' ? 'Chat with me' : 'Chat dengan saya'; ?></span>
    </a>

    <!-- Animated Background -->
    <div class="animated-bg">
        <div class="bg-shape"></div>
        <div class="bg-shape"></div>
        <div class="bg-shape"></div>
    </div>

