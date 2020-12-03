<?php
include_once "../core.php";
sessionAdmin();
$connect=connectDB();
$id=$_POST['id'];
$item=select_slogan_id($id);
unlink("Images/".$item['image']);
delete_slogan($id);
header("location:".DOMAIN."/administrator/admin/show_details_slogan.php");
$connect->close();