<?php
include_once "core.php";
sessionAdmin();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- link to css -->
    <link rel="stylesheet" href="<?php echo DOMAIN ?>/dist/CSS/admin.css">

</head>
<body>
<section class="container">
    <!-- Make menu -->
    <?php include_once "_menu.php"; ?>
    <!-- End of make menu -->
    <!-- content -->
    <section class="content">
        <?php if (@$_SESSION['image_empty']): ?>
            <h1 class="wrong_image"><?php echo $_SESSION['image_empty'];  ?></h1>
        <?php endif; ?>

        <?php if (@$_SESSION['image_size']): ?>
            <h1 class="wrong_image"><?php echo $_SESSION['image_size'];  ?></h1>
        <?php endif; ?>

        <?php if (@$_SESSION['image_format']): ?>
            <h1 class="wrong_image"><?php echo $_SESSION['image_format'];  ?></h1>
        <?php endif; ?>

        <?php if (@$_SESSION['title_empty']): ?>
            <h1 class="wrong_image"><?php echo $_SESSION['title_empty'];  ?></h1>
        <?php endif; ?>

        <?php if (@$_SESSION['text_empty']): ?>
            <h1 class="wrong_image"><?php echo $_SESSION['text_empty'];  ?></h1>
        <?php endif; ?>

        <h1>ثبت اطلاعات مربوط به about</h1>
        <a class="showDetails" href="<?php echo DOMAIN ?>/administrator/admin/show_details_about.php">نمایش جزییات</a>
        <section class="form">
            <form action="about/insert.php" method="post" enctype="multipart/form-data">
                <input type="color" name="color">
                <input type="text" name="font_size" placeholder="please enter your desired font size">
                <textarea name="text" placeholder="please enter your about text"></textarea>
                <input type="file" name="image">
                <input type="submit" value="Submit">
            </form>
        </section>
    </section>
    <!-- End of content -->
    <?php
    $_SESSION['image_empty']=null;
    $_SESSION['image_format']=null;
    $_SESSION['image_size']=null;
    $_SESSION['title_empty']=null;
    $_SESSION['text_empty']=null;
    ?>
</section>
</body>
</html>