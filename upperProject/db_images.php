<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "image_src";

$conn_img = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn_img){
    die("Connection Failed".mysqli_connect_error());
}