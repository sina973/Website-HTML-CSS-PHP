<?php
include_once "../core.php";
sessionAdmin();
$connect = connectDB();

$upload = true;
$title = $_POST['title'];
$summary = $_POST['summary'];
$image = $_FILES['image'];
$id=$_POST['id'];
$item=select_slogan_id($id);

if ($title == null) {
    $_SESSION['title_empty'] = "لطفا عنوانی را برای تیتر سایت انتخاب کنید";
    $update_db = false;
}
if ($summary == null) {
    $_SESSION['summary_empty'] = "لطفا متنی را برای نمایش در سایت وارد کنید";
    $update_db = false;
}

if ($image['name']==null){
    $image_name=$item['image'];
}
else{
    $image_name = upload_image($image, "slogan");
    unlink("Images/".$item['image']);
}

update_slogan($id, $title, $summary, $image_name);


header("location:" . DOMAIN . "/administrator/admin/show_details_slogan.php");
$connect->close();