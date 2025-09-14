<?php
// Path to the products folder
$dir = __DIR__;

// Scan folder for product files
$files = scandir($dir);

// Exclude unwanted files
$exclude = ['.', '..', 'index.php'];

// Start product list
echo "<h1>Our Products</h1>";
echo "<ul>";

foreach ($files as $file) {
    if (!in_array($file, $exclude) && pathinfo($file, PATHINFO_EXTENSION) === 'php') {
        // Remove .php extension
        $productName = basename($file, ".php");

        // Create a readable title (Product-Name => Product Name)
        $title = ucwords(str_replace("-", " ", $productName));

        // Make anchor link
        echo "<li><a href='/in/products/$file'>$title</a></li>";
    }
}

echo "</ul>";
