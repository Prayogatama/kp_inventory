<?php foreach ($news as $news_item) { ?>
  <h1> <a href="<?php echo site_url('news/'.$news_item['slug']); ?>"> <?php echo $news_item['title']; ?></a></h1>
  <p><?php echo $news_item['text']; ?></p>
  <!-- echo untuk update -->
   <a href="<?php echo site_url('news/update/'.$news_item['id']); ?>">Edit</a>
   <!-- echo untuk update -->
   <br>
   <!-- echo untuk update -->
    <a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>">Hapus</a>
    <!-- echo untuk update -->
<?php } ?>
