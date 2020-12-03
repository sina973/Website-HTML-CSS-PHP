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
        <h1>ثبت اطلاعات مربوط به seo</h1>
        <a class="showDetails" href="<?php echo DOMAIN ?>/administrator/admin/show_details_seo.php">نمایش جزییات</a>
        <section class="form">
            <form action="seo/insert.php" method="post">
                <input type="text" name="title" placeholder="please enter a name for the website">
                <input type="text" name="author" placeholder="please enter a name for author of the website">
                <textarea name="keywords" placeholder="please enter keywords"></textarea>
                <textarea name="description" placeholder="please enter description"></textarea>
                <input type="submit" value="Submit">
            </form>
        </section>
    </section>
    <!-- End of content -->
</section>
</body>
</html>