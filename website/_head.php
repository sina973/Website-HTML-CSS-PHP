<?php
session_start();
include_once "administrator/admin/core.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $query=select_latest_seo();
    ?>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo $query['keywords']; ?>">
    <meta name="description" content="<?php echo $query['description']; ?>">
    <meta name="author" content="<?php echo $query['author']; ?>">
    <meta name="robots" content="index,follow">
    <title><?php echo $query['title']; ?></title>
     <!-- Link to CSS -->
    <link rel="stylesheet" href="dist/CSS/Website(19-...).css">
</head>
<body>