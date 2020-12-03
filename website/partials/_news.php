<section>

    <?php
        $query = select_latest_news(3);
    ?>
    <?php foreach ($query as $item): ?>
    <div class="news">
        <h1><?php echo $item['title']; ?></h1>
        <p><?php echo substr($item['text'], 0, 800); ?></p>
        <img src="<?php echo DOMAIN; ?>/administrator/admin/news/Images/<?php echo $item["image"]; ?>" alt="<?php echo $item["image"]; ?>">
        <a href="<?php echo DOMAIN; ?>/news_by_id.php?id=<?php echo $item['id']; ?>">ادامه مطلب</a>
    </div>
    <?php endforeach; ?>
</section>