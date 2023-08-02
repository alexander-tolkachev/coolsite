<?php
global $conn_img;
require_once("db_images.php");

$sql = "SELECT * FROM `image`";
$result = $conn_img->query($sql);

$json_array = array();
while($row = $result->fetch_assoc()) {
    $base64_image = base64_encode($row['image']);
    $json_array[] = array(
        'id' => $row['id'],
        'typeFilter' => $row['typeFilter'],
        'image' => $base64_image,
        'nameProject' => $row['nameProject'],
        'link' => $row['link']
    );
}
echo stripslashes(json_encode($json_array, JSON_UNESCAPED_UNICODE));