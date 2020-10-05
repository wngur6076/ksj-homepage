<?php
session_start();
$conn = mysqli_connect("115.85.182.232", "wngur", "wngur", "testdb", "3306");
$conn->set_charset("utf8");

function mq($sql)
{
    global $conn;
    return $conn->query($sql);
}
