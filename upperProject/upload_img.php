<?php
global $conn_img;
require_once("db_images.php");

$typeFilter = $_POST["typeFilter"];
$nameProject = $_POST["nameProject"];
$link = $_POST["link"];
$image = null;
$password = $_POST["password"];

if ($password == "testPassword"){
    if (isset($_POST['submit'])) {
        if (!empty($_FILES['image']['tmp_name'])&&!empty($typeFilter)&&!empty($nameProject)&&!empty($link)) {
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $sql = "INSERT INTO `image` (typeFilter, image, nameProject, link) VALUES ('$typeFilter', '$image', '$nameProject', '$link')";
            if ($conn_img -> query($sql)){
                echo "Успешная загрузка в БД";
            } else
                echo "Ошибка: ".$conn_img->error;
        } else {
            echo "Заполните все поля";
        }
    }
} else {
    echo "Неверный пароль";
}