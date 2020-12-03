<?php
include_once "../core.php";
sessionAdmin();
$connect=connectDB();
$id=$_POST['id'];
$item=select_news_id($id);
unlink("Images/".$item['image']);
delete_news($id);
header("location:".DOMAIN."/administrator/admin/show_details_news.php");
$connect->close();