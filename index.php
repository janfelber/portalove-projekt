<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rosey Pixel Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- templatemo 337 rosey pixel -->
<!-- 
Rosey Pixel Template 
http://www.templatemo.com/preview/templatemo_337_rosey_pixel 
-->
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php
include_once "parts/header.php";

if(!isset($common)) {
    $common = new stdClass();
}
?>

<section class="banner">
    <div class="container text-white">
        <h3>Your</h3>
        <h1> Online Florist Shop</h1>
    </div>
</section>
<div class="content_box">
    <h2>Feature Product</h2>
    <div class="cleaner"></div>
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
    <div class="cleaner h30"></div>
    <div id="gallery">
        <?php
        require_once('lib/DB.php');

        use FS\Lib\DB;

        $database = new DB();
        $shopItems = $database->get4ItemsFromShop();

        if (!empty($shopItems)) {
            echo "<ul class='product-list'>";
            foreach ($shopItems as $item) {
                echo "<li class='product-item'>";
                echo "<div class='product-content'>";
                echo "<img src='" . $item['image_link'] . "' alt='Image' class='product-image'>";
                echo "<div class='text-container'>";
                echo "<p class='product-info'>";
                echo "<h4 class='product-name'>" . $item['name'] . "</h4>";
                echo "<span class='product-price'>&euro; " . $item['price'] . "</span>";
                echo "</p>";
                echo "</div>";
                echo "</div>";
                echo "</li>";
            }
            echo "</ul>";

            echo "<ul class='product-list'>";
            foreach ($shopItems as $item) {
                echo "<li class='product-item'>";
                echo "<div class='product-content'>";
                echo "<img src='" . $item['image_link'] . "' alt='Image' class='product-image'>";
                echo "<div class='text-container'>";
                echo "<p class='product-info'>";
                echo "<h4 class='product-name'>" . $item['name'] . "</h4>";
                echo "<span class='product-price'>&euro; " . $item['price'] . "</span>";
                echo "</p>";
                echo "</div>";
                echo "</div>";
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No items in the shop. Please add items via the admin panel.</p>";
        }
        ?>


        <div class="cleaner"></div>
    </div>
</div> <!-- end of a content box -->
<span id="top"></span>
<div id="templatemo_wrapper">
    <div id="templatemo_main">
        
	</div> <!-- end of main -->
<?php
include_once "parts/footer.php";
?>
    
</div> <!-- end of wrapper -->

</body>
</html>