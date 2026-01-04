<?php
$lang = 'bm';
require_once __DIR__ . '/../lang.php';
$base_path = '/bm';
$page_title = $lang == 'en' ? 'Single Page Website | Custom Web Systems in Malaysia | Ym Hub' : 'Single Page Website | Custom Sistem Web di Malaysia | Ym Hub';
$page_meta_description = $lang == 'en' ? 'Single page website perfect for promoting specific products or services, or for event registration. Simple, fast, and focused on your main goal. Built with responsive design and SEO optimization.' : 'Single page website sesuai untuk promosi produk atau servis tertentu. Ringkas, cepat, dan fokus kepada tujuan utama. Dibina dengan reka bentuk responsive dan optimasi SEO.';
// Project-specific hreflang tags
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$domain = (strpos($host, 'ymhub.com') !== false || strpos($host, 'localhost') !== false) ? 'ymhub.com' : $host;
$current_dir = dirname($_SERVER['PHP_SELF']);
$has_ymhub = strpos($current_dir, '/ymhub') !== false;
$prefix = $has_ymhub ? '/ymhub' : '';
$custom_hreflang_ms = $protocol . '://' . $domain . $prefix . '/bm/single-page';
$custom_hreflang_en = $protocol . '://' . $domain . $prefix . '/en/single-page';
?>
<?php include __DIR__ . '/../includes/header.php'; ?>

    <!-- Project Detail Section -->
    <section class="project-detail" style="padding: 150px 0 100px;">
        <div class="container">
            <a href="<?php echo $base_url; ?>/bm/#portfolio" class="back-link" style="display: inline-flex; align-items: center; gap: 0.5rem; color: var(--primary-color); text-decoration: none; margin-bottom: 2rem;">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            
            <div class="project-header" style="text-align: center; margin-bottom: 3rem;">
                <div class="project-icon" style="width: 120px; height: 120px; margin: 0 auto 2rem; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-file-alt" style="font-size: 3rem; color: white;"></i>
                </div>
                <h1 style="font-size: 2.5rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;"><?php echo $lang == 'en' ? 'Single Page Website' : 'Website Satu Halaman'; ?></h1>
                <p style="font-size: 1.2rem; color: var(--text-gray); max-width: 800px; margin: 0 auto;"><?php echo $lang == 'en' ? 'Perfect for promoting specific products or services, or for event registration. Simple, fast, and focused on your main goal.' : 'Sesuai untuk promosi produk atau servis tertentu. Ringkas, cepat, dan fokus kepada tujuan utama anda.'; ?></p>
            </div>

            <div class="project-info" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
                <div class="info-card" style="background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); transition: transform 0.2s ease, box-shadow 0.2s ease;">
                    <h3 style="color: var(--text-dark); margin-bottom: 0.5rem; font-size: 1.1rem;"><i class="fas fa-clock" style="color: var(--primary-color); margin-right: 0.5rem;"></i> <?php echo $lang == 'en' ? 'Timeline' : 'Jadual Masa'; ?></h3>
                    <p style="color: var(--text-gray); margin: 0; font-size: 1rem;"><?php echo $lang == 'en' ? '3-5 days' : '3-5 hari'; ?></p>
                </div>
                <div class="info-card" style="background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); transition: transform 0.2s ease, box-shadow 0.2s ease;">
                    <h3 style="color: var(--text-dark); margin-bottom: 0.5rem; font-size: 1.1rem;"><i class="fas fa-dollar-sign" style="color: var(--primary-color); margin-right: 0.5rem;"></i> <?php echo $lang == 'en' ? 'Price Range' : 'Anggaran Harga'; ?></h3>
                    <p style="color: var(--text-gray); margin: 0; font-size: 1rem;">RM 780 - RM 1,170</p>
                </div>
            </div>

            <div class="project-content" style="max-width: 1000px; margin: 0 auto;">
                <div class="problem-solution" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-bottom: 2rem;">
                    <h2 style="color: var(--text-dark); margin-bottom: 1.5rem; font-size: 1.5rem;"><?php echo $lang == 'en' ? 'Problem & Solution' : 'Masalah & Penyelesaian'; ?></h2>
                    <div style="margin-bottom: 1.5rem;">
                        <h3 style="color: #ef4444; margin-bottom: 0.5rem;"><i class="fas fa-exclamation-circle"></i> <?php echo $lang == 'en' ? 'Problem' : 'Masalah'; ?></h3>
                        <p style="color: var(--text-dark); line-height: 1.8;"><?php echo $lang == 'en' ? 'Businesses need a simple, focused website to promote specific products, services, or events without the complexity of a full multi-page site.' : 'Perniagaan memerlukan website yang ringkas dan fokus untuk mempromosikan produk, servis, atau event tertentu tanpa kerumitan laman web berbilang halaman.'; ?></p>
                    </div>
                    <div>
                        <h3 style="color: #10b981; margin-bottom: 0.5rem;"><i class="fas fa-check-circle"></i> <?php echo $lang == 'en' ? 'Solution' : 'Penyelesaian'; ?></h3>
                        <p style="color: var(--text-dark); line-height: 1.8;"><?php echo $lang == 'en' ? 'A single page website that is simple, fast, and focused on your main goal. Perfect for product launches, event registrations, or service promotions with all essential information in one place.' : 'Single page website yang ringkas, cepat, dan fokus kepada tujuan utama anda. Sesuai untuk pelancaran produk, pendaftaran event, atau promosi servis dengan semua maklumat penting di satu tempat.'; ?></p>
                    </div>
                </div>

                <div class="features-section" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-bottom: 2rem;">
                    <h2 style="color: var(--text-dark); margin-bottom: 1.5rem; font-size: 1.5rem;"><?php echo $lang == 'en' ? 'Key Features' : 'Ciri Utama'; ?></h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem;">
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);"><?php echo $lang == 'en' ? 'Responsive Website Design' : 'Rekabentuk Web Responsive'; ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);"><?php echo $lang == 'en' ? 'Basic SEO Optimization' : 'Optimaal Enjin Carian (SEO) Asas'; ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);"><?php echo $lang == 'en' ? '1 Online Form' : '1 Borang Online'; ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);"><?php echo $lang == 'en' ? 'WhatsApp Button' : 'Butang WhatsApp'; ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);"><?php echo $lang == 'en' ? 'Social Media Integration' : 'Integrasi Media Sosial'; ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);"><?php echo $lang == 'en' ? 'Google Analytics' : 'Google Analytics'; ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);"><?php echo $lang == 'en' ? 'Video / Image Gallery' : 'Galeri Video / Gambar'; ?></span>
                        </div>
                    </div>
                </div>

                <div class="screenshots-section" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-bottom: 2rem; text-align: center;">
                    <h2 style="color: var(--text-dark); margin-bottom: 1.5rem; font-size: 1.5rem;">Website Design</h2>
                    <!-- Replace 'your-image.jpg' with your actual image path -->
                    <img src="../assets/backgroud_picture/booking_system_preview.png" alt="Paparan Skrin" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                    <hr style="border: none; border-top: 1px solid #ddd; margin: 1.5rem 0;">
                    
                    <img src="../assets/backgroud_picture/booking_system_preview1.png" alt="Paparan Skrin" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                    <hr style="border: none; border-top: 1px solid #ddd; margin: 1.5rem 0;">
                    
                    <img src="../assets/backgroud_picture/booking_system_preview2.png" alt="Paparan Skrin" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                    <p style="color: var(--text-gray); margin-top: 1rem;">
                        Screenshots of the professional design and booking interface will be displayed here.
                    </p>
                </div>

                <div class="cta-section" style="text-align: center; background: #eff6ff; padding: 2rem; border-radius: 12px; border: 2px solid var(--primary-color); box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                    <h2 style="color: var(--text-dark); margin-bottom: 1rem; font-size: 1.5rem;">Berminat dengan Single Page Website ini?</h2>
                    <p style="color: var(--text-gray); margin-bottom: 1.5rem;">Kami boleh membina single page website serupa yang disesuaikan dengan keperluan bisnes anda.</p>
                    <a href="https://wa.me/60174776935?text=Hi,%20I%20would%20like%20to%20discuss%20building%20a%20Single%20Page%20Website%20similar%20to%20your%20sample%20project." class="btn btn-primary" target="_blank" style="display: inline-flex; align-items: center; gap: 0.5rem;">
                        <i class="fab fa-whatsapp"></i> <?php echo $lang == 'en' ? 'Contact Me on WhatsApp' : 'Hubungi Saya di WhatsApp'; ?>
                    </a>
                </div>
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

    <script src="../script.js"></script>
</body>
<!-- Footer -->
<?php include __DIR__ . '/../footer.php'; ?>
</html>

