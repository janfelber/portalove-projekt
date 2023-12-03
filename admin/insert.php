<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include "menu.php";
?>
<br><br>
<form action="insert-item.php" method="post">
    <input type="text" name="name" value="" placeholder="Name of flower"><br>
    <input type="text" name="price" value="" placeholder="Price of flower"><br>
    <input type="text" name="image_link" value="" placeholder="Image link"><br>
    <input type="submit" name="submit" value="Vlozit">
</form>
