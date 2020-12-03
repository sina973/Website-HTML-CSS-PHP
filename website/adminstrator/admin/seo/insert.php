<?php
include_once "../core.php";
sessionAdmin();
$connect=connectDB();
$title=$_POST['title'];
$author=$_POST['author'];
$keywords=$_POST['keywords'];
$description=$_POST['description'];
insert_seo($title,$author,$keywords,$description);
header("location:".DOMAIN."/administrator/admin/admin.php");

$connect->close();