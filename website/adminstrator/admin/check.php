<?php
session_start();
include_once "core.php";
$username=$_POST['username'];
$password=$_POST['password'];
$passwordFinal=md5($password);
$query=selectAllAdmin();
$flag=false;
foreach ($query as $item){
    if ($item['username']==$username && $item['password']==$passwordFinal){
        $_SESSION['admin']=$username;
        header("location:admin.php");
        $flag=true;
    }
}
if ($flag==false){
    $_SESSION['wrong']="نام کاربری و یا کلمه عبور شما اشتباه است";
    header("location:login.php");
}