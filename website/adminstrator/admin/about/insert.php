<?php
include_once "../core.php";
sessionAdmin();
$connect=connectDB();


$color=$_POST['color'];
$text=$_POST['text'];
$image=$_FILES['image'];
$font_size = $_POST['font_size'];


if ($font_size==null){
    $_SESSION['fontSize_empty']="لطفا عنوانی را برای تیتر اخبار انتخاب کنید";
    $update_db=false;
}
if ($text==null){
    $_SESSION['text_empty']="لطفا متنی را برای نمایش در سایت وارد کنید";
    $update_db=false;
}

$image_name=upload_image($image, "about");
if ($image_name != null){
    insert_about($color,$font_size,$text,$image_name);
}

header("location:".DOMAIN."/administrator/admin/create_form_about.php");
$connect->close();