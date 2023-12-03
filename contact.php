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
        <h3>For all your floral needs</h3>
        <h1>We're here to help!</h1>
    </div>
</section>
<div class="cleaner h20"></div>
<section class="container">
    <div class="row">
        <div class="col-50">
        <h2>Contact Information</h2>
        <div class="cleaner"></div>
            <p>Nullam a tortor est, congue fermentum nisi. Maecenas nulla nulla, lobortis eu volutpat euismod, scelerisque ut dui.</p>
            <p>Integer luctus tellus ac mi malesuada dignissim. Sed id diam dui.</p>
            <p>In ut nunc urna. Pellentesque tempus mi non augue euismod adipiscing.</p>
        </div>
            <div class="cleaner h30"></div>
        <div class="col-50 text-right">
            <div id="contact_form">
                <h4>Contact Form</h4>
                <form method="post" name="contact" action="#">

                    <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                    <div class="cleaner h10"></div>

                    <label for="email">Email:</label> <input type="text" class="validate-email required input_field" name="email" id="email" />
                    <div class="cleaner h10"></div>

                    <label for="subject">Subject:</label> <input type="text" class="validate-subject required input_field" name="subject" id="subject"/>
                    <div class="cleaner h10"></div>

                    <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                    <div class="cleaner h10"></div>

                    <input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
                    <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />

                </form>

            </div>
            </div>
    </div>
</section>

<?php
include_once "parts/footer.php";
?>
</body>
</html>