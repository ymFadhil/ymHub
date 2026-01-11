<?php
// Set XML header
header('Content-Type: application/xml; charset=utf-8');

// Base URL of your website
$base_url = 'https://ymhub.com'; // Change if needed

// Current date
$lastmod = date('Y-m-d');

// List all pages
$pages = [
    ['/bm/', '1.0', 'weekly'],
    ['/en/', '1.0', 'weekly'],
    ['/bm/ecommerce', '0.8', 'monthly'],
    ['/en/ecommerce', '0.8', 'monthly'],
    ['/bm/professional-website', '0.8', 'monthly'],
    ['/en/professional-website', '0.8', 'monthly'],
    ['/bm/single-page', '0.7', 'monthly'],
    ['/en/single-page', '0.7', 'monthly'],
];

// Start XML output (no whitespace above this line)
echo '<?'.'xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">' . "\n";

// Loop through pages
foreach ($pages as $page) {
    [$url_path, $priority, $freq] = $page;
    $full_url = $base_url . $url_path;

    echo "  <url>\n";
    echo "    <loc>" . htmlspecialchars($full_url, ENT_XML1, 'UTF-8') . "</loc>\n";
    echo "    <lastmod>$lastmod</lastmod>\n";
    echo "    <changefreq>$freq</changefreq>\n";
    echo "    <priority>$priority</priority>\n";

    // Multilingual hreflang
    if (strpos($url_path, '/bm/') !== false) {
        echo "    <xhtml:link rel=\"alternate\" hreflang=\"ms\" href=\"" . $full_url . "\" />\n";
        echo "    <xhtml:link rel=\"alternate\" hreflang=\"en\" href=\"" . str_replace('/bm/', '/en/', $full_url) . "\" />\n";
    } elseif (strpos($url_path, '/en/') !== false) {
        echo "    <xhtml:link rel=\"alternate\" hreflang=\"ms\" href=\"" . str_replace('/en/', '/bm/', $full_url) . "\" />\n";
        echo "    <xhtml:link rel=\"alternate\" hreflang=\"en\" href=\"" . $full_url . "\" />\n";
    }

    echo "  </url>\n";
}

echo '</urlset>';
