<?php foreach($news as $news_item): ?>

    <h2><?php echo $news_item['title']; ?></h2>
    <div class="main">
        <?php echo $news_item['text']; ?>
    </div>
    <p><a href="<?php echo base_url('news/' . $news_item['slug']); ?>">View Article</a></p>

<?php endforeach ?>