<?php

include_once "lib/DB.php";

use FS\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "florist-shop");
?>
<header class="container main-header">
    <div class="logo-holder">
        <a href="index.php" style="display: flex; align-items: center; text-decoration: none;; font-weight: bold; color: black">
            <img src="images/logo/logo.png" height="40" alt="Logo">
            <span style=" margin-left: 10px; font-size: 20px">Rosey Flower</span>
        </a>
    </div>
    <nav class="main-nav">
        <ul class="main-menu" id="main-menu container">
            <?php
            $menu = $db->getMenuItems();
            foreach ($menu as $menuName => $menuUrl) {
                echo '<li><a href="'.$menuUrl.'">'.$menuName.'</a></li>';
            }
            ?>
        </ul>
        <a class="hamburger" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
</header>

