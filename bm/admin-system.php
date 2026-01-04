<?php
$lang = 'bm';
require_once __DIR__ . '/../lang.php';
$base_path = '/bm';
$page_title = $lang == 'en' ? 'Admin System + Report | Custom Web Systems in Malaysia | Ym Hub' : 'Sistem Admin + Laporan | Custom Sistem Web di Malaysia | Ym Hub';
$skip_default_hreflang = true; // Project page will add its own hreflang tags
?>
<?php
$page_meta_description = $lang == 'en' ? 'Custom web admin system with automated reports for businesses in Malaysia. Admin panel, data management, and Excel/PDF export. Built with PHP & MySQL.' : 'Sistem admin web custom dengan laporan automatik untuk bisnes di Malaysia. Panel admin, pengurusan data, dan eksport Excel/PDF. Dibina dengan PHP & MySQL.';
// Project-specific hreflang tags
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
    $domain = (strpos($host, 'ymhub.com') !== false || strpos($host, 'localhost') !== false) ? 'ymhub.com' : $host;
$current_dir = dirname($_SERVER['PHP_SELF']);
$has_ymhub = strpos($current_dir, '/ymhub') !== false;
$prefix = $has_ymhub ? '/ymhub' : '';
$custom_hreflang_ms = $protocol . '://' . $domain . $prefix . '/bm/admin-system.php';
$custom_hreflang_en = $protocol . '://' . $domain . $prefix . '/en/admin-system.php';
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
                    <i class="fas fa-database" style="font-size: 3rem; color: white;"></i>
                </div>
                <h1 style="font-size: 2.5rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;"><?php echo $lang == 'en' ? 'Admin System + Report' : 'Sistem Admin + Laporan'; ?></h1>
                <p style="font-size: 1.2rem; color: var(--text-gray); max-width: 800px; margin: 0 auto;"><?php echo $lang == 'en' ? 'A web-based admin system to manage company data and generate reports efficiently.' : 'Sistem admin berasaskan web untuk mengurus data syarikat dan menjana laporan dengan cekap.'; ?></p>
            </div>

            <div class="project-info" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
                <div class="info-card" style="background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); transition: transform 0.2s ease, box-shadow 0.2s ease;">
                    <h3 style="color: var(--text-dark); margin-bottom: 0.5rem; font-size: 1.1rem;"><i class="fas fa-clock" style="color: var(--primary-color); margin-right: 0.5rem;"></i> <?php echo $lang == 'en' ? 'Timeline' : 'Jadual Masa'; ?></h3>
                    <p style="color: var(--text-gray); margin: 0; font-size: 1rem;"><?php echo $lang == 'en' ? '5-7 days' : '5-7 hari'; ?></p>
                </div>
                <div class="info-card" style="background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); transition: transform 0.2s ease, box-shadow 0.2s ease;">
                <h3 style="color: var(--text-dark); margin-bottom: 0.5rem; font-size: 1.1rem;"><i class="fas fa-dollar-sign" style="color: var(--primary-color); margin-right: 0.5rem;"></i> Anggaran Harga</h3>
                    <p style="color: var(--text-gray); margin: 0; font-size: 1rem;">RM800 - RM1,500</p>
                </div>
            </div>

            <div class="project-content" style="max-width: 1000px; margin: 0 auto;">
                <div class="problem-solution" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-bottom: 2rem;">
                    <h2 style="color: var(--text-dark); margin-bottom: 1.5rem; font-size: 1.5rem;"><?php echo $lang == 'en' ? 'Problem & Solution' : 'Masalah & Penyelesaian'; ?></h2>
                    <div style="margin-bottom: 1.5rem;">
                        <h3 style="color: #ef4444; margin-bottom: 0.5rem;"><i class="fas fa-exclamation-circle"></i> <?php echo $lang == 'en' ? 'Problem' : 'Masalah'; ?></h3>
                        <p style="color: var(--text-dark); line-height: 1.8;"><?php echo $lang == 'en' ? 'Data scattered in Excel / WhatsApp, hard to manage and track. No centralized system to organize company information.' : 'Data berselerak dalam Excel / WhatsApp, sukar untuk diurus dan dikesan. Tiada sistem berpusat untuk mengatur maklumat syarikat.'; ?></p>
                    </div>
                    <div>
                        <h3 style="color: #10b981; margin-bottom: 0.5rem;"><i class="fas fa-check-circle"></i> <?php echo $lang == 'en' ? 'Solution' : 'Penyelesaian'; ?></h3>
                        <p style="color: var(--text-dark); line-height: 1.8;"><?php echo $lang == 'en' ? 'A web-based admin system to manage company data and generate reports efficiently. Centralized database with user-friendly interface.' : 'Sistem admin berasaskan web untuk mengurus data syarikat dan menjana laporan dengan cekap. Pangkalan data berpusat dengan antara muka mesra pengguna.'; ?></p>
                    </div>
                </div>

                <div class="features-section" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-bottom: 2rem;">
                    <h2 style="color: var(--text-dark); margin-bottom: 1.5rem; font-size: 1.5rem;"><?php echo $lang == 'en' ? 'Key Features' : 'Ciri Utama'; ?></h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem;">
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);"><?php echo $lang == 'en' ? 'Login & User Role Management' : 'Log Masuk & Pengurusan Peranan Pengguna'; ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);"><?php echo $lang == 'en' ? 'CRUD Operations (Create, Read, Update, Delete)' : 'Operasi CRUD (Cipta, Baca, Kemaskini, Padam)'; ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);"><?php echo $lang == 'en' ? 'Filter by Date/Status' : 'Tapis mengikut Tarikh/Status'; ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);"><?php echo $lang == 'en' ? 'Export to Excel/PDF' : 'Eksport ke Excel/PDF'; ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);"><?php echo $lang == 'en' ? 'Dashboard with Summary' : 'Papan Pemuka dengan Ringkasan'; ?></span>
                        </div>
                    </div>
                </div>

                <div class="screenshots-section" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-bottom: 2rem;">
                    <h2 style="color: var(--text-dark); margin-bottom: 1.5rem; font-size: 1.5rem;"><?php echo $lang == 'en' ? 'Screenshots' : 'Tangkapan Skrin'; ?></h2>
                    <p style="color: var(--text-gray); text-align: center; padding: 3rem;">
                        <i class="fas fa-image" style="font-size: 3rem; color: var(--text-gray); margin-bottom: 1rem; display: block;"></i>
                        <?php echo $lang == 'en' ? 'Add your system screenshots here to showcase different pages and features.' : 'Tambah tangkapan skrin sistem anda di sini untuk mempamerkan halaman dan ciri yang berbeza.'; ?>
                    </p>
                </div>

                <div class="cta-section" style="text-align: center; background: #eff6ff; padding: 2rem; border-radius: 12px; border: 2px solid var(--primary-color); box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                    <h2 style="color: var(--text-dark); margin-bottom: 1rem; font-size: 1.5rem;"><?php echo $lang == 'en' ? 'Interested in This System?' : 'Berminat dengan Sistem Ini?'; ?></h2>
                    <p style="color: var(--text-gray); margin-bottom: 1.5rem;"><?php echo $lang == 'en' ? 'I can build a similar system tailored to your business needs.' : 'Saya boleh membina sistem serupa yang disesuaikan dengan keperluan bisnes anda.'; ?></p>
                    <a href="https://wa.me/60174776935?text=Hi,%20I%20would%20like%20to%20discuss%20building%20an%20Admin%20System%20similar%20to%20your%20sample%20project." class="btn btn-primary" target="_blank" style="display: inline-flex; align-items: center; gap: 0.5rem;">
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
