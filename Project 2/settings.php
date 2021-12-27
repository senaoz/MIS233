<?php

$u_mail = $_SESSION["u_mail"];
$db = new mysqli("127.0.0.1", "root", "", "MIS 233");
$query = "select * from users where u_mail='$u_mail'";
$result = $db->query($query);
$row = $result->fetch_row();

$MinPwd = 6;
$MaxPwd = 10;
$MaxCourse = 10;
$MaxStuCourse = 10;
$MaxProfCourse = 10;
?>