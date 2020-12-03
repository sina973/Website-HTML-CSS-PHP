<?php

##################################################### domain ##########################################################
define("DOMAIN", "http://localhost/Online_Class/Website(22)");

############################################### End of domain ##########################################################

###################################### Function connect to DB ##########################################################
function connectDB(){
    $connect = mysqli_connect("localhost", "root", "", "website") or die("Not connect");
    mysqli_set_charset($connect, "utf8");
    return $connect;
}

###################################### End of function connect to DB ###################################################

##################################################### Login ###################################################
function selectAllAdmin(){
    $connect=connectDB();
    $query=mysqli_query($connect, "select * from login");
    return $query;
}
function insertAdmin($username, $password){
    $connect = connectDB();
    mysqli_query($connect, "insert into login(username, password) value ('$username','$password')");
}

############################################## End of Login ###################################################

######################### Check SESSION ######################################
function sessionAdmin(){
    session_start();
    if (!(isset($_SESSION['admin']))){
        header("location:".DOMAIN."/administrator/admin/login.php");
    }
}
########################## End of Check SESSION ###############################

############################### SEO #########################################

function insert_seo($title,$author,$keywords,$description){
    $connect=connectDB();
    mysqli_query($connect, "insert into seo(title,author,keywords,description)values('$title','$author','$keywords','$description')");
}

function select_seo(){
    $connect=connectDB();
    $query=mysqli_query($connect, "select * from seo");
    return $query;
}

function delete_seo($id){
    $connect=connectDB();
    mysqli_query($connect, "delete from seo where id=$id");
}

function select_latest_seo(){
    $connect=connectDB();
    $query=mysqli_query($connect, "select * from seo order by id desc limit 1 offset 0");
    $item=mysqli_fetch_assoc($query);
    return $item;
}

############################### End of SEO #########################################

############################### Image #########################################

function upload_image($image, $path){

    if ($image['name']==null){
        $_SESSION['image_empty']='لطفا یک عکس انتخاب کنید';
    }
    else {
        $upload = true;
        $image_name =time().$image['name'];
        $directory="../".$path."/Images/".$image_name;
        $filePath=pathinfo($directory, PATHINFO_EXTENSION);
        if ($filePath !== "jpg" && $filePath !== "png" && $filePath !== "JPG" && $filePath !== "jpeg" &&
            $filePath !== "JPEG" && $filePath !== "PNG") {
            $upload = false;
            $_SESSION['image_format'] = 'فرمت عکس صحیح نمی باشد'.$upload;
        }
        if ($image['size'] > 5000000) {
            $upload = false;
            $_SESSION['image_size'] = 'این فایل بزرگ تر از پنج مگابایت می باشد'.$upload;
        }
        if ($upload == true) {
            move_uploaded_file($image['tmp_name'],$directory);
        }
        return $image_name;
    }
    return null;
}

############################### End of Image #########################################

############################### Slogan #########################################

function insert_slogan($title,$summary,$image){
    $connect=connectDB();
    echo "name:".$image."          ";
    mysqli_query($connect, "insert into slogan(title,summary,image)values('$title','$summary','$image')");
}

function select_slogan(){
    $connect=connectDB();
    return mysqli_query($connect, "select * from slogan");
}

function delete_slogan($id){
    $connect=connectDB();
    mysqli_query($connect, "delete from slogan where id=$id");
}

function select_slogan_id($id){
    $connect=connectDB();
    $query=mysqli_query($connect, "select * from slogan where id=$id");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
function update_slogan($id,$title,$summary,$image){
    $connect=connectDB();
    mysqli_query($connect, "update slogan set title='$title',summary='$summary',image='$image' where id=$id");
}
function select_latest_slogan(){
    $connect=connectDB();
    $query=mysqli_query($connect, "select * from slogan order by id desc limit 1 offset 0");
    return mysqli_fetch_assoc($query);
}

############################### End of Slogan #########################################

############################### News #########################################

function insert_news($title,$text,$image){
    $connect=connectDB();
    mysqli_query($connect, "insert into news(title,text,image)values('$title','$text','$image')");
}

function select_news(){
    $connect=connectDB();
    return mysqli_query($connect, "select * from news");
}

function delete_news($id){
    $connect=connectDB();
    mysqli_query($connect, "delete from news where id=$id");
}

function select_news_id($id){
    $connect=connectDB();
    $query=mysqli_query($connect, "select * from news where id=$id");
    return mysqli_fetch_assoc($query);
}
function update_news($id,$title,$text,$image){
    $connect=connectDB();
    mysqli_query($connect, "update news set title='$title',text='$text',image='$image' where id=$id");
}
function select_latest_news($limit){
    $connect=connectDB();
    return mysqli_query($connect, "select * from news order by id desc limit $limit offset 0");
}

################################ End of News #########################################

############################### About #########################################

function insert_about($color,$font_size,$text,$image){
    $connect=connectDB();
    mysqli_query($connect, "insert into about(color,font_size,text,image)values('$color','$font_size','$text','$image')");
}

function select_about(){
    $connect=connectDB();
    return mysqli_query($connect, "select * from about");
}

function delete_about($id){
    $connect=connectDB();
    mysqli_query($connect, "delete from about where id=$id");
}

function select_about_id($id){
    $connect=connectDB();
    $query=mysqli_query($connect, "select * from about where id=$id");
    return mysqli_fetch_assoc($query);
}

function select_latest_about(){
    $connect=connectDB();
    $query=mysqli_query($connect, "select * from about order by id desc limit 1 offset 0");
    return mysqli_fetch_assoc($query);
}

################################ End of About #########################################
################################# Contact #########################################

function insert_contact($fullName,$email,$comment){
    $connect=connectDB();
    mysqli_query($connect, "insert into contact(fullName,email,comment)values('$fullName','$email','$comment')");
}

function select_contact(){
    $connect=connectDB();
    return mysqli_query($connect, "select * from contact");
}

function delete_contact($id){
    $connect=connectDB();
    mysqli_query($connect, "delete from contact where id=$id");
}

function select_contact_id($id){
    $connect=connectDB();
    $query=mysqli_query($connect, "select * from contact where id=$id");
    return mysqli_fetch_assoc($query);
}

function select_latest_contact(){
    $connect=connectDB();
    $query=mysqli_query($connect, "select * from contact order by id desc limit 1 offset 0");
    return mysqli_fetch_assoc($query);
}
################################## End of Contact #########################################
