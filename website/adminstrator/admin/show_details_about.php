<?php
include_once "core.php";
sessionAdmin();
$query = select_about();
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
        <h1>جزئیات اطلاعات مربوط به about</h1>
        <a class="showDetails" href="create_form_about.php">ورود اطلاعات</a>
        <section class="details">
            <table>
                <tr>
                    <td class="first">ID</td>
                    <td class="first">Color</td>
                    <td class="first">Font Size</td>
                    <td class="first">Text</td>
                    <td class="first">Image</td>
                    <td class="first">Delete</td>
                </tr>
                <?php foreach ($query as $item): ?>
                    <tr>
                        <td><?php echo $item['id']; ?></td>
                        <td><h1 style="width: 80%; height: 30px; background-color:<?php echo $item['color']; ?>; margin: 0 auto;"></h1></td>
                        <td><?php echo $item['font_size']; ?></td>
                        <td><?php echo substr($item['text'], 0, 300); ?></td>
                        <td><img src="<?php echo DOMAIN . "/administrator/admin/about/Images/" . $item['image'] ?>"
                                 alt="<?php echo $item['image'] ?>"></td>
                        <td>
                            <form action="about/delete.php" method="post">
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