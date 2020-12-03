<?php
session_start();
include_once "core.php";
$connect=connectDB();
$query=selectAllAdmin();
$flag=true;
foreach ($query as $item){
    $flag=false;
}
if ($flag==true){
    $username = "sina";
    $password = "123456";
    $password_final=md5($password);
    insertAdmin($username,$password_final);

}
$connect->close();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>صفحه ورود</title>
    <link rel="stylesheet" href="<?php echo DOMAIN; ?>/dist/CSS/login.css">
</head>
<body>
<section class="background" style="width: auto; height: 768px; background: url('<?php echo DOMAIN; ?>/dist/Images/5568.jpg') center center no-repeat; background-size: cover;">
    <?php if(isset($_SESSION['wrong'])): ?>
        <h1 class="wrong"><?php echo $_SESSION['wrong'] ?></h1>
    <?php endif; ?>

    <?php if(isset($_SESSION['admin'])): ?>
        <?php header("location:admin.php"); ?>
    <?php endif; ?>
    <!-- ##################### Making login form  #################### -->
    <section class="login">
        <form action="check.php" method="post">
            <input type="text" name="username" placeholder="Enter your username">
            <input type="password" name="password" placeholder="Enter your password">
            <input type="submit" value="Login">
        </form>
    </section>
    <!-- ################### End of Making login form  ################# -->
</section>
</body>
</html>