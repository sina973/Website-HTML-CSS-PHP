<?php
include_once "core.php";
sessionAdmin();
$query = select_contact();
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
        <h1>جزئیات اطلاعات مربوط به Contact Us</h1>
        <a class="showDetails" href="<?php echo DOMAIN ?>/index.php">ورود اطلاعات</a>
        <section class="details">
            <table>
                <tr>
                    <td class="first">ID</td>
                    <td class="first">FullName</td>
                    <td class="first">E-mail</td>
                    <td class="first">Comment</td>
                    <td class="first">Delete</td>
                </tr>
                <?php foreach ($query as $item): ?>
                    <tr>
                        <td><?php echo $item['id']; ?></td>
                        <td><?php echo $item['fullName']; ?></td>
                        <td><?php echo $item['email']; ?></td>
                        <td><?php echo substr($item['comment'], 0, 300); ?></td>
                        <td>
                            <form action="contact/delete.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                                <input type="submit" value="Delete" class="delete">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
    </section>
    <!-- End of content -->
</section>
</body>
</html>