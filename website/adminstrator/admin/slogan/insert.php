<?php
include_once "../core.php";
sessionAdmin();
$connect=connectDB();

$title=$_POST['title'];
$summary=$_POST['summary'];
$image=$_FILES['image'];

if ($title==null){
    $_SESSION['title_empty']="لطفا عنوانی را برای تیتر سایت انتخاب کنید";
    $update_db=false;
}
if ($summary==null){
    $_SESSION['summary_empty']="لطفا متنی را برای نمایش در سایت وارد کنید";
    $update_db=false;
}

$image_name=upload_image($image, "slogan");
if ($image_name != null){
    insert_slogan($title,$summary,$image_name);
}

header("location:".DOMAIN."/administrator/admin/create_form_slogan.php");
$connect->close();