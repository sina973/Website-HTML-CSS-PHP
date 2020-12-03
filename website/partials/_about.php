<?php
$item = select_latest_about();
?>
<section class="about" style="background: url('<?php echo DOMAIN; ?>/administrator/admin/about/Images/<?php echo $item["image"]; ?>') center center no-repeat fixed; background-size: cover;">
    <section>
        <p style="color: <?php echo $item['color']; ?>; font-size: <?php echo $item['font_size']; ?>px;"><?php echo $item['text']; ?></p>
    </section>
</section>