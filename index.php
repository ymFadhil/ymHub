<?php
// Default redirect to BM (Bahasa Melayu)
// You can change this to 'en' if you want English as default
$default_lang = 'bm';

// Check if user has language preference in URL
$request_uri = $_SERVER['REQUEST_URI'];
if (strpos($request_uri, '/en') !== false || strpos($request_uri, '/en/') !== false) {
    header("Location: /en/");
} elseif (strpos($request_uri, '/bm') !== false || strpos($request_uri, '/bm/') !== false) {
    header("Location: /bm/");
} else {
    // Redirect to default language
    header("Location: /" . $default_lang . "/");
}
exit;
?>
