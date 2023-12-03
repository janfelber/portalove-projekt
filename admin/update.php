<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use FS\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "florist-shop");

include "menu.php";

if(!isset($_GET['id'])) {
    header("Location: home.php");
}

$menuItem = $db->getShopItem($_GET['id']);
?>
<br><br>
<form action="update-item.php" method="post">
    <input type="text" name="name" value="<?php echo $menuItem['name']; ?>" placeholder="Name of flower"><br>
    <input type="text" name="price" value="<?php echo $menuItem['price']; ?>" placeholder="Price of flower"><br>
    <input type="text" name="image_link" value="<?php echo $menuItem['image_link']; ?>" placeholder="Image link"><br>
    <input type="text" name="id" value="<?php echo $menuItem['id']; ?>">
    <input type="submit" name="submit" value="Update">
</form>