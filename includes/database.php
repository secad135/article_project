<?php

$db_host = "localhost";
$db_user = "ap_user";
$db_pass = "123456";
$db_name = "article_project";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}