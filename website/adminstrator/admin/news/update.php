<?php
include_once "../core.php";
sessionAdmin();
$connect = connectDB();

$title = $_POST['title'];
$text = $_POST['text'];
$image = $_FILES['image'];
$id=$_POST['id'];
$item=select_news_id($id);

if ($title == null) {
    $_SESSION['title_empty'] = "لطفا عنوانی را برای تیتر سایت انتخاب کنید";
    $update_db = false;
}
if ($text==null){
    $_SESSION['text_empty']="لطفا متنی را برای نمایش در سایت وارد کنید";
    $update_db=false;
}

if ($image['name']==null){
    $image_name=$item['image'];
}
else{
    $image_name = upload_image($image, "news");
    unlink("Images/".$item['image']);
}

update_news($id, $title, $text, $image_name);


header("location:" . DOMAIN . "/administrator/admin/show_details_news.php");
$connect->close();