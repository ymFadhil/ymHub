<?php
// AUTO detect base URL
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];

// kalau LOCAL ada folder ymhub
if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    $base_url .= "/ymhub";
}

// Base path (without protocol and domain) for relative paths
$base_path_relative = '';
if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    $base_path_relative = "/ymhub";
}
?>

