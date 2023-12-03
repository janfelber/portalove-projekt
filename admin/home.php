<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use FS\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "florist-shop");

include "menu.php";

$menuItems = $db->getShop();

if(isset($_GET['status'])) {
    if($_GET['status'] == 1) {
        echo "<br><p style='color: green'>The item was successfully added to the shop.</p><br>";
    } elseif ($_GET['status'] == 2) {
        echo "<br><p style='color: red'>The attempt to add the item to the shop failed.</p><br>";
    } elseif ($_GET['status'] == 3) {
        echo "<br><p style='color: green'>The item was successfully deleted from the shop</p><br>";
    } elseif ($_GET['status'] == 4) {
        echo "<br><p style='color: red'>The attempt to delete the item from the shop failed.</p><br>";
    } elseif ($_GET['status'] == 5) {
        echo "<br><p style='color: green'>The item was successfully updated</p><br>";
    } elseif ($_GET['status'] == 6) {
        echo "<br><p style='color: red'>The attempt to update the item from the shop failed.</p><br>";
    }
}

echo "<ul>";
foreach ($menuItems as $menuItem) {
    echo "<li>".$menuItem['name']." 
    <a href='update.php?id=".$menuItem['id']."'>Update</a>  
    <a href='delete.php?id=".$menuItem['id']."'>Delete</a>
    </li>";
}
echo "</ul>";
?>


