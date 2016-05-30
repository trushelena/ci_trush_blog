<h2><?php echo $title; ?></h2>

<?php foreach ($news as $news_item): ?>

        <a href="<?php echo site_url('news/'.$news_item['slug']); ?>"><h3 class="title-news"><?php echo $news_item['title']; ?></h3></a>
        <a class="btn btn-primary" href="<?php echo site_url('news/edit/'.$news_item['id']); ?>">Редактировать</a>
        <a class="btn btn-danger" href="<?php echo site_url('news/delete/'.$news_item['id']); ?>">Удалить</a>
  
        <div class="main bg-danger">
                <?php echo $news_item['text']; ?>
        </div>
        <p class="text-primary"><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">Посмотреть новость</a></p>
 
<?php endforeach; ?>