<?php
include_once "../core.php";
sessionAdmin();
$connect=connectDB();
$id=$_POST['id'];
$item=select_about_id($id);
unlink("Images/".$item['image']);
delete_about($id);
header("location:".DOMAIN."/administrator/admin/show_details_about.php");
$connect->close();