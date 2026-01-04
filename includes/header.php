<?php
if (!isset($lang)) {
    require_once __DIR__ . '/../lang.php';
}
$current_url = $_SERVER['REQUEST_URI'];
// Fix base path for language folders
if (!isset($base_path)) {
    $base_path = dirname($_SERVER['PHP_SELF']);
    if ($base_path == '/' || $base_path == '\\') {
        $base_path = '';
    }
    // Ensure base_path includes language prefix if in language folder
    if (strpos($base_path, '/bm') !== false) {
        $base_path = '/bm';
    } elseif (strpos($base_path, '/en') !== false) {
        $base_path = '/en';
    }
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang == 'en' ? 'en' : 'ms'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : ($lang == 'en' ? 'Custom Web Systems in Malaysia | Ym Hub' : 'Custom Sistem Web di Malaysia | Ym Hub'); ?></title>
    <meta name="description" content="<?php echo isset($page_meta_description) ? $page_meta_description : ($lang == 'en' ? 'Ym Hub builds custom web systems, admin panels and automated reports for businesses in Malaysia. Professional PHP development services with reliable delivery.' : 'Ym Hub membina sistem web custom, admin panel dan laporan automatik untuk bisnes di Malaysia.'); ?>">
    
    <!-- SEO Hreflang Tags -->
    <?php
    if (isset($custom_hreflang_ms) && isset($custom_hreflang_en)) {
        // Use custom hreflang tags for project pages
        echo '<link rel="alternate" hreflang="ms" href="' . htmlspecialchars($custom_hreflang_ms) . '" />' . "\n    ";
        echo '<link rel="alternate" hreflang="en" href="' . htmlspecialchars($custom_hreflang_en) . '" />' . "\n    ";
    } elseif (!isset($skip_default_hreflang) || !$skip_default_hreflang) {
        // Default hreflang tags for index pages
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'];
        // Use ymhub.com domain if available, otherwise use current host
        $domain = (strpos($host, 'ymhub.com') !== false || strpos($host, 'localhost') !== false) ? 'ymhub.com' : $host;
        $root_path = str_replace('/bm', '', str_replace('/en', '', dirname($_SERVER['PHP_SELF'])));
        if ($root_path == '/' || $root_path == '\\') $root_path = '';
        echo '<link rel="alternate" hreflang="ms" href="' . $protocol . '://' . $domain . $root_path . '/bm/" />' . "\n    ";
        echo '<link rel="alternate" hreflang="en" href="' . $protocol . '://' . $domain . $root_path . '/en/" />' . "\n    ";
    }
    ?>
    <link rel="canonical" href="<?php echo isset($protocol) ? $protocol : (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http'); ?>://<?php echo isset($host) ? $host : $_SERVER['HTTP_HOST']; ?><?php echo $_SERVER['REQUEST_URI']; ?>" />
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_path == '/bm' || $base_path == '/en' ? '..' : ''; ?>/assets/backgroud_picture/logo-ym-success.png">
    <link rel="shortcut icon" type="image/png" href="<?php echo $base_path == '/bm' || $base_path == '/en' ? '..' : ''; ?>/assets/backgroud_picture/logo-ym-success.png">
    
    <link rel="stylesheet" href="<?php echo $base_path == '/bm' || $base_path == '/en' ? '..' : ''; ?>/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <?php
            // Ensure $base_url is available (from config.php via lang.php)
            if (!isset($base_url)) {
                require_once __DIR__ . '/../config.php';
            }
            
            // Get the current directory structure to detect subdirectory
            $current_dir = dirname($_SERVER['PHP_SELF']);
            $has_ymhub = strpos($current_dir, '/ymhub') !== false;
            $prefix = $has_ymhub ? '/ymhub' : '';
            
            // Determine language path based on $lang variable (most reliable)
            $home_url = '';
            if (isset($lang) && $lang == 'en') {
                $home_url = $base_url . '/en/';
            } elseif (isset($lang) && $lang == 'bm') {
                $home_url = $base_url . '/bm/';
            } elseif ($base_path == '/en') {
                $home_url = $base_url . '/en/';
            } elseif ($base_path == '/bm') {
                $home_url = $base_url . '/bm/';
            } else {
                $home_url = $base_url . '/bm/'; // default
            }
            
            // Determine if we're on a project detail page (not index)
            $is_project_page = basename($_SERVER['PHP_SELF']) != 'index.php' && basename($_SERVER['PHP_SELF']) != 'index';
            
            // Get the base URL for navigation links
            $nav_base = $is_project_page ? $home_url : '';
            ?>
            <a href="<?php echo $home_url; ?>" class="nav-brand">
                <img src="<?php echo $base_path == '/bm' || $base_path == '/en' ? '..' : ''; ?>/assets/backgroud_picture/logo-ym-success.png" alt="YM Success Logo" class="logo-img">
            </a>
            <ul class="nav-menu">
                <li><a href="<?php echo $nav_base; ?>#home"><?php echo $L['nav_home']; ?></a></li>
                <li><a href="<?php echo $nav_base; ?>#services"><?php echo $L['nav_services']; ?></a></li>
                <li><a href="<?php echo $nav_base; ?>#portfolio"><?php echo $L['nav_portfolio']; ?></a></li>
                <li><a href="<?php echo $nav_base; ?>#how-it-works"><?php echo $L['nav_how_it_works']; ?></a></li>
                <li><a href="<?php echo $nav_base; ?>#packages"><?php echo $L['nav_packages']; ?></a></li>
                <li><a href="<?php echo $nav_base; ?>#contact"><?php echo $L['nav_contact']; ?></a></li>
            </ul>
            <div class="nav-right">
                <div class="lang-switch">
                    <a href="<?php echo $base_path == '/bm' || $base_path == '/en' ? '..' : ''; ?>/bm/" class="<?php echo $lang == 'bm' ? 'active' : ''; ?>">🇲🇾 BM</a>
                    <span class="lang-separator">|</span>
                    <a href="<?php echo $base_path == '/bm' || $base_path == '/en' ? '..' : ''; ?>/en/" class="<?php echo $lang == 'en' ? 'active' : ''; ?>">🇬🇧 EN</a>
                </div>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>

