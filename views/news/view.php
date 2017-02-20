<?php include ROOT . '/views/layouts/header.php'; ?>

<!--==============================content================================-->
<section id="content">
    <div class="main">
        <div class="container_12">

            <?php include ROOT . '/views/layouts/wrapper.php'; ?>

            <div class="container-bot">
                <div class="container-top">
                    <div class="container">
                        <div class="post">
                            <h4><strong><?php echo $newsItem['title'] ; ?></strong></h4>
                            <p class="meta">Posted by <a href="#"><?php echo $newsItem['author_name'];?></a> on <?php echo $newsItem['date'];?>
                                &nbsp;&bull;&nbsp; <a href='/news/' class="permalink"> Back to our news</a></p>
                            <div class="entry">
                                <p>  <img src="<?php echo News::getImage($newsItem['id']); ?>" alt="" /></p>
                                <p><?php echo $newsItem['content'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>
