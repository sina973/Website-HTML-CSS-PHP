<?php
include_once "../core.php";
sessionAdmin();
$connect=connectDB();


$title=$_POST['title'];
$text=$_POST['text'];
$image=$_FILES['image'];

if ($title==null){
    $_SESSION['title_empty']="لطفا عنوانی را برای تیتر اخبار انتخاب کنید";
    $update_db=false;
}
if ($text==null){
    $_SESSION['text_empty']="لطفا متنی را برای نمایش در سایت وارد کنید";
    $update_db=false;
}

$image_name=upload_image($image, "news");
if ($image_name != null){
    insert_news($title,$text,$image_name);
}

header("location:".DOMAIN."/administrator/admin/create_form_news.php");
$connect->close();