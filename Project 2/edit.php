<?php
include("db.php");
$delete_mail = $_GET['del'];
$delete_query = "DELETE FROM `users` WHERE `u_mail`=`$delete_mail`";
$run = mysqli_query($db, $delete_query);
if($run) { header("Location: tables.php"); }
?>