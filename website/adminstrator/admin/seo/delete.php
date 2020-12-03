<?php
include_once "../core.php";
sessionAdmin();
$connect=connectDB();
$id=$_GET['id'];
delete_seo($id);
header("location:".DOMAIN."/administrator/admin/show_details_seo.php");
$connect->close();