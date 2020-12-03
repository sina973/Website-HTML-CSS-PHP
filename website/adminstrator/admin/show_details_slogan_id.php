<?php
include_once "core.php";
sessionAdmin();
$id=$_GET['id'];
$item=select_slogan_id($id);
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

        <?php if (@$_SESSION['summary_empty']): ?>
            <h1 class="wrong_image"><?php echo $_SESSION['summary_empty'];  ?></h1>
        <?php endif; ?>

        <h1>به روز رسانی اطلاعات مربوط به slogan با شناسه <?php echo $id ?></h1>
        <a class="showDetails" href="<?php echo DOMAIN ?>/administrator/admin/show_details_slogan.php">نمایش همه ی اطلاعات</a>
        <section class="form">
            <form action="slogan/update.php" method="post" enctype="multipart/form-data">
                <input type="text" name="title" value="<?php echo $item['title'] ?>">

                <textarea name="summary"><?php echo $item['summary'] ?></textarea>
                <input type="file" name="image">
                <img src="<?php echo DOMAIN ?>/administrator/admin/slogan/Images/<?php echo $item['image'] ?>" alt="<?php echo $item['image'] ?>">
                <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
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
    $_SESSION['summary_empty']=null;
    ?>
</section>
</body>
</html>