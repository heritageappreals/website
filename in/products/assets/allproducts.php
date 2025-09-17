<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Best Clothing Menufecturer and Trader In Ludhiana
         | Heritage Appreals</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
       <?php include '../../assets/head.php';?>
</head>

<body>

 <?php include '../../assets/body.php';?>
    <!-- Header -->
    <?php include '../../assets/header.php';?>
    <!-- Header end /-->
    <!-- Header end /-->
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
?>
      <!-- Footer -->
    <?php include '../../assets/footer.php';?>
    <!-- Footer End -->






    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/one-page-nav-min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery-ui-slider-range.js"></script>
    <script src="js/meanmenu.min.js"></script>
    <script src="js/Elemental.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>