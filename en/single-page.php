<?php
$lang = 'en';
require_once __DIR__ . '/../lang.php';
$base_path = '/en';
$page_title = 'Single Page Website | Custom Web Systems in Malaysia | Ym Hub';
$page_meta_description = 'Single page website perfect for promoting specific products or services, or for event registration. Simple, fast, and focused on your main goal. Built with responsive design and SEO optimization.';
// Project-specific hreflang tags
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$domain = (strpos($host, 'ymhub.com') !== false || strpos($host, 'localhost') !== false) ? 'ymhub.com' : $host;
$current_dir = dirname($_SERVER['PHP_SELF']);
$has_ymhub = strpos($current_dir, '/ymhub') !== false;
$prefix = $has_ymhub ? '/ymhub' : '';
$custom_hreflang_ms = $protocol . '://' . $domain . $prefix . '/bm/single-page.php';
$custom_hreflang_en = $protocol . '://' . $domain . $prefix . '/en/single-page.php';
?>
<?php include __DIR__ . '/../includes/header.php'; ?>

    <!-- Project Detail Section -->
    <section class="project-detail" style="padding: 150px 0 100px;">
        <div class="container">
            <a href="/ymhub/en/#portfolio" class="back-link" style="display: inline-flex; align-items: center; gap: 0.5rem; color: var(--primary-color); text-decoration: none; margin-bottom: 2rem;">
                <i class="fas fa-arrow-left"></i> Back
            </a>
            
            <div class="project-header" style="text-align: center; margin-bottom: 3rem;">
                <div class="project-icon" style="width: 120px; height: 120px; margin: 0 auto 2rem; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-calendar-check" style="font-size: 3rem; color: white;"></i>
                </div>
                <h1 style="font-size: 2.5rem; font-weight: 700; color: var(--text-color); margin-bottom: 1rem;">Single Page Website</h1>
                <p style="font-size: 1.2rem; color: var(--text-light); max-width: 800px; margin: 0 auto;">A single page website perfect for promoting specific products or services, or for event registration. Simple, fast, and focused on your main goal.</p>
            </div>

            <div class="project-info" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
                <div class="info-card" style="background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); transition: transform 0.2s ease, box-shadow 0.2s ease;">
                    <h3 style="color: var(--text-dark); margin-bottom: 0.5rem; font-size: 1.1rem;"><i class="fas fa-clock" style="color: var(--primary-color); margin-right: 0.5rem;"></i> Timeline</h3>
                    <p style="color: var(--text-gray); margin: 0; font-size: 1rem;">4-6 days</p>
                </div>
                <div class="info-card" style="background: white; padding: 1.5rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); transition: transform 0.2s ease, box-shadow 0.2s ease;">
                    <h3 style="color: var(--text-dark); margin-bottom: 0.5rem; font-size: 1.1rem;"><i class="fas fa-dollar-sign" style="color: var(--primary-color); margin-right: 0.5rem;"></i> Price Range</h3>
                    <p style="color: var(--text-gray); margin: 0; font-size: 1rem;">RM 780 - RM 1,170</p>
                </div>
            </div>

            <div class="project-content" style="max-width: 1000px; margin: 0 auto;">
                <div class="problem-solution" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-bottom: 2rem;">
                    <h2 style="color: var(--text-dark); margin-bottom: 1.5rem; font-size: 1.5rem;">Problem & Solution</h2>
                    <div style="margin-bottom: 1.5rem;">
                        <h3 style="color: #ef4444; margin-bottom: 0.5rem;"><i class="fas fa-exclamation-circle"></i> Problem</h3>
                        <p style="color: var(--text-gray); line-height: 1.8;">Customer requests via WhatsApp are disorganized and easily lost. No systematic way to track and manage inquiries.</p>
                    </div>
                    <div>
                        <h3 style="color: #10b981; margin-bottom: 0.5rem;"><i class="fas fa-check-circle"></i> Solution</h3>
                        <p style="color: var(--text-gray); line-height: 1.8;">A simple request system to organize customer inquiries and service bookings. Centralized database with admin panel for management.</p>
                    </div>
                </div>

                <div class="features-section" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-bottom: 2rem;">
                    <h2 style="color: var(--text-dark); margin-bottom: 1.5rem; font-size: 1.5rem;">Key Features</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem;">
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);">Public Request Form</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);">Admin View & Management</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);">Status Update (Pending/Processing/Done)</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);">Email Notification</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span style="color: var(--text-dark);">Monthly Summary Report</span>
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
                    <h2 style="color: var(--text-dark); margin-bottom: 1rem; font-size: 1.5rem;">Interested in This Single Page Website?</h2>
                    <p style="color: var(--text-gray); margin-bottom: 1.5rem;">We can build a similar single page website tailored to your business needs.</p>
                    <a href="https://wa.me/60174776935?text=Hi,%20I%20would%20like%20to%20discuss%20building%20a%20Booking%20System%20similar%20to%20your%20sample%20project." class="btn btn-primary" target="_blank" style="display: inline-flex; align-items: center; gap: 0.5rem;">
                        <i class="fab fa-whatsapp"></i> Contact Me on WhatsApp
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
        <span class="whatsapp-tooltip">Chat with me</span>
    </a>

    <script src="../script.js"></script>
</body>

    <!-- Footer -->
    <?php include __DIR__ . '/../footer.php'; ?>
</html>

