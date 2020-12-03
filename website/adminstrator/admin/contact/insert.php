<?php
include_once "../core.php";
session_start();
$connect=connectDB();


$fullName=$_POST['fullname'];
$email=$_POST['email'];
$comment=$_POST['comment'];

if ($fullName==null){
    $_SESSION['name_empty']="لطفا عنوانی را برای تیتر اخبار انتخاب کنید";
    $update_db=false;
}
if ($comment==null){
    $_SESSION['comment_empty']="لطفا متنی را برای نمایش در سایت وارد کنید";
    $update_db=false;
}

insert_contact($fullName,$email,$comment);

$_SESSION['contact'] = "با تشکر از نظر شما، در اولین فرصت به شما پاسخ داده خواهد شد.";

header("location:".DOMAIN."/index.php");
$connect->close();