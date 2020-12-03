<section
    <?php $item=select_latest_slogan(); ?>
    style="width: 100%; height: 600px; background: url('<?php echo DOMAIN; ?>/administrator/admin/slogan/Images/<?php echo $item["image"]; ?>') center center no-repeat fixed; background-size: cover">
    <section>
        <h1><?php echo $item['title']; ?></h1>
        <p><?php echo $item['summary'] ?></section>
</section>