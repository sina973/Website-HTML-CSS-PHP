<section class="news_section">
    <?php
    $id = $_GET['id'];
    $item = select_news_id($id);
    ?>
    <div class="news">
        <h1><?php echo $item['title']; ?></h1>
        <p><?php echo($item['text']); ?></p>
        <img src="<?php echo DOMAIN; ?>/administrator/admin/news/Images/<?php echo $item["image"]; ?>"
             alt="<?php echo $item["image"]; ?>">
    </div>
</section>