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
        <h3>Welcome To Rosey Flower</h3>
        <h1>Explore our flower passion's story!</h1>
    </div>
</section>
<div class="cleaner h20"></div>
<section class="container">
    <div class="row">
        <div class="col-50">
            <h2>About Us</h2>
            <div class="cleaner"></div>
                <div class="image_wrapper"><img src="images/flower-shop.jpg" alt="Image 02" /></div> <br>
                <p><em>Cras non mauris vel mi tincidunt accumsan eu nec massa. Quisque laoreet arcu id nibh vehicula placerat.</em></p>
                <p>Nunc euismod lectus eu neque ultrices laoreet. Aenean et velit tincidunt ante <a href="#">porttitor facilisis</a>. Quisque in turpis vitae enim blandit vehicula. Duis sed sem nulla.</p>
                <p>Fusce faucibus vestibulum diam sed placerat. Duis quam arcu, vestibulum at volutpat sit amet, <a href="#">congue at augue</a>. Nam urna nibh, tincidunt in id, interdum vel odio.</p>
        </div >
        <div class="cleaner h20"></div>
            <div class="col-50 text-right">
                <h3 style="text-align: center">Our Services</h3>
                <p style="text-align: left"><em>Vestibulum pharetra convallis libero ac luctus. Etiam in quam a urna aliquet imperdiet porta vitae nisl.</em></p>
                <p style="text-align: left">Nullam non neque sit amet elit elementum pharetra vitae eu quam. Sed ultricies semper purus, eu fringilla nibh condimentum a. Quisque felis mi, mattis a luctus at, lacinia vel diam. Fusce sollicitudin erat id dolor tempus cursus. Sed id nisi a massa tristique facilisis et.
                <ul style="text-align: left">
                    <li>Nulla sit amet est at nisi auctor bibendum.</li>
                    <li>Fusce risus tortor, interdum in malesuada pulvinar.</li>
                    <li>Quisque eget nulla vitae nisi pretium feugiat.</li>
                    <li>Sed vel justo quis ligula blandit commodo et.</li>
                    <li>Duis semper urna eget tellus condimentum.</li>
                </ul>
            </div>
        </div>


</section>

<?php
include_once "parts/footer.php";
?>
</body>
</html>
