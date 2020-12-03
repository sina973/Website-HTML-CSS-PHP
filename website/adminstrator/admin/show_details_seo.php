<?php
include_once "core.php";
sessionAdmin();
$query = select_seo();
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
        <a class="showDetails" href="admin.php">ورود اطلاعات</a>
        <section class="details">
            <table>
                <tr>
                    <td class="first">ID</td>
                    <td class="first">Title</td>
                    <td class="first">Author</td>
                    <td class="first">Keywords</td>
                    <td class="first">Delete</td>
                </tr>
                <?php foreach ($query as $item): ?>
                    <tr>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['title'] ?></td>
                        <td><?php echo $item['author'] ?></td>
                        <td><?php echo $item['keywords'] ?></td>
                        <td><a class="delete" href="<?php echo DOMAIN; ?>/administrator/admin/seo/delete.php?id=<?php echo $item['id']; ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
    </section>
    <!-- End of content -->
</section>
</body>
</html>