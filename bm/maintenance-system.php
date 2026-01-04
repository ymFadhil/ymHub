<?php
$lang = 'bm';
require_once __DIR__ . '/../lang.php';
$base_path = '/bm';
$page_title = 'Website Profesional & Sistem Tempahan | Custom Web Solutions Malaysia | Ym Hub';
$page_meta_description = 'Rekabentuk website premium yang diintegrasikan dengan sistem tempahan automatik untuk perniagaan di Malaysia. Ketersediaan masa nyata, gerbang pembayaran, dan peringatan automatik.';
// Project-specific hreflang tags
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$domain = (strpos($host, 'ymhub.com') !== false || strpos($host, 'localhost') !== false) ? 'ymhub.com' : $host;
$current_dir = dirname($_SERVER['PHP_SELF']);
$has_ymhub = strpos($current_dir, '/ymhub') !== false;
$prefix = $has_ymhub ? '/ymhub' : '';
$custom_hreflang_ms = $protocol . '://' . $domain . $prefix . '/bm/maintenance-system.php';
$custom_hreflang_en = $protocol . '://' . $domain . $prefix . '/en/maintenance-system.php';
?>
<?php include __DIR__ . '/../includes/header.php'; ?>

    <!-- Project Detail Section -->
    <section class="project-detail" style="padding: 150px 0 100px;">
        <div class="container">
            <a href="/ymhub/bm/#portfolio" class="back-link" style="display: inline-flex; align-items: center; gap: 0.5rem; color: var(--primary-color); text-decoration: none; margin-bottom: 2rem;">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            
            <div class="project-header" style="text-align: center; margin-bottom: 3rem;">
                <div class="project-icon" style="width: 120px; height: 120px; margin: 0 auto 2rem; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-calendar-check" style="font-size: 3rem; color: white;"></i>
                </div>
                <h1 style="font-size: 2.5rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">Website Profesional & Sistem Tempahan</h1>
                <p style="font-size: 1.2rem; color: var(--text-gray); max-width: 800px; margin: 0 auto;">Laman web premium dengan enjin tempahan yang berkuasa untuk perniagaan berasaskan perkhidmatan.</p>
            </div>

            <div class="project-info" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
                <div class="info-card" style="background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); transition: transform 0.2s ease, box-shadow 0.2s ease;">
                    <h3 style="color: var(--text-dark); margin-bottom: 0.5rem; font-size: 1.1rem;"><i class="fas fa-clock" style="color: var(--primary-color); margin-right: 0.5rem;"></i> Jangka Masa</h3>
                    <p style="color: var(--text-gray); margin: 0; font-size: 1rem;">10-15 hari</p>
                </div>
                <div class="info-card" style="background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); transition: transform 0.2s ease, box-shadow 0.2s ease;">
                    <h3 style="color: var(--text-dark); margin-bottom: 0.5rem; font-size: 1.1rem;"><i class="fas fa-dollar-sign" style="color: var(--primary-color); margin-right: 0.5rem;"></i> Anggaran Harga</h3>
                    <p style="color: var(--text-gray); margin: 0; font-size: 1rem;">RM1,500 - RM4,500</p>
                </div>
            </div>

            <div class="project-content" style="max-width: 1000px; margin: 0 auto;">
                <div class="problem-solution" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-bottom: 2rem;">
                    <h2 style="color: var(--text-dark); margin-bottom: 1.5rem; font-size: 1.5rem;">Masalah & Penyelesaian</h2>
                    <div style="margin-bottom: 1.5rem;">
                        <h3 style="color: #ef4444; margin-bottom: 0.5rem;"><i class="fas fa-exclamation-circle"></i> Masalah</h3>
                        <p style="color: var(--text-gray); line-height: 1.8;">Pengurusan tempahan secara manual melalui WhatsApp atau panggilan telefon sering menyebabkan pertindihan tempahan, janji temu terlepas, dan pembaziran masa untuk tugas administratif.</p>
                    </div>
                    <div>
                        <h3 style="color: #10b981; margin-bottom: 0.5rem;"><i class="fas fa-check-circle"></i> Penyelesaian</h3>
                        <p style="color: var(--text-gray); line-height: 1.8;">Sistem tempahan dalam talian yang automatik diintegrasikan ke dalam laman web profesional. Pelanggan boleh melihat ketersediaan masa nyata, menempah segera, dan membuat bayaran atas talian sambil menerima pengesahan automatik.</p>
                    </div>
                </div>

                <div class="features-section" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-bottom: 2rem;">
                    <h2 style="color: var(--text-dark); margin-bottom: 1.5rem; font-size: 1.5rem;">Ciri-Ciri Utama</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem;">
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);">Sistem Tempahan Online 24/7</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);">Ketersediaan Kalendar Masa Nyata</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);">Integrasi Gerbang Pembayaran (FPX/Kad)</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);">Notifikasi Emel/WA Automatik</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);">Portal Pengurusan Pelanggan</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);">Rekabentuk Web Responsif Penuh</span>
                        </div>
                    </div>
                </div>

                <div class="screenshots-section" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-bottom: 2rem;">
                    <h2 style="color: var(--text-dark); margin-bottom: 1.5rem; font-size: 1.5rem;">Paparan Skrin</h2>
                    <p style="color: var(--text-gray); text-align: center; padding: 3rem;">
                        <i class="fas fa-image" style="font-size: 3rem; color: var(--text-gray); margin-bottom: 1rem; display: block;"></i>
                        Paparan skrin rekabentuk profesional dan antara muka tempahan akan dipaparkan di sini.
                    </p>
                </div>

                <div class="cta-section" style="text-align: center; background: #eff6ff; padding: 2rem; border-radius: 12px; border: 2px solid var(--primary-color); box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                    <h2 style="color: var(--text-dark); margin-bottom: 1rem; font-size: 1.5rem;">Sedia Untuk Automasikan Bisnes Anda?</h2>
                    <p style="color: var(--text-gray); margin-bottom: 1.5rem;">Mari bina laman web profesional yang bekerja untuk anda walaupun anda sedang tidur.</p>
                    <a href="https://wa.me/60174776935?text=Hi,%20Saya%20berminat%20untuk%20bina%20Website%20Profesional%20dan%20Sistem%20Tempahan." class="btn btn-primary" target="_blank" style="display: inline-flex; align-items: center; gap: 0.5rem;">
                        <i class="fab fa-whatsapp"></i> Hubungi Saya di WhatsApp
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
        <span class="whatsapp-tooltip">Chat dengan saya</span>
    </a>

    <script src="../script.js"></script>
</body>

<!-- Footer -->
<?php include __DIR__ . '/../footer.php'; ?>

</html>
