<?php
// Base URL of your site (change to your domain)
$baseUrl = "http://heritageappreals.com/in/products/";

// Directory containing the PHP product pages
$directory = __DIR__ . "/in/products";

// Create new DOMDocument for sitemap
$dom = new DOMDocument('1.0', 'UTF-8');
$dom->formatOutput = true;

$urlset = $dom->createElement('urlset');
$urlset->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
$dom->appendChild($urlset);

// Scan directory for .php files
$files = scandir($directory);

foreach ($files as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
        $url = $dom->createElement('url');

        // Full URL for the file
        $loc = $dom->createElement('loc', htmlspecialchars($baseUrl . $file));
        $url->appendChild($loc);

        // Last modified time
        $lastmod = date('Y-m-d', filemtime($directory . '/' . $file));
        $url->appendChild($dom->createElement('lastmod', $lastmod));

        // Change frequency (you can adjust this)
        $url->appendChild($dom->createElement('changefreq', 'monthly'));

        // Priority
        $url->appendChild($dom->createElement('priority', '0.8'));

        $urlset->appendChild($url);
    }
}

// Output XML
header("Content-Type: application/xml; charset=UTF-8");
echo $dom->saveXML();
