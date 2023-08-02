<?php
global $conn_img;
require_once("db_images.php");

$deleteId = $_POST["deleteId"];

$sql = "DELETE FROM `image` WHERE id = '$deleteId'";
$result = $conn_img->query($sql);
echo "Успешное удаление из БД";