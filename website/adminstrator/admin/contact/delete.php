<?php
include_once "../core.php";
sessionAdmin();
$connect=connectDB();
$id=$_POST['id'];
$item=select_contact_id($id);
delete_contact($id);
header("location:".DOMAIN."/administrator/admin/show_details_contact.php");
$connect->close();