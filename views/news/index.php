<?php include ROOT . '/views/layouts/header.php'; ?>

    <!--==============================content================================-->
    <section id="content">
        <div class="main">
            <div class="container_12">

                <?php include ROOT . '/views/layouts/wrapper.php'; ?>

                <div class="container-bot">
                    <div class="container-top">
                        <div class="container">
                            <div class="wrapper">
                                <article class="grid_8">
                                    <div class="indent-left">
                                        <h3>Our news:</h3>
                                        <h6>Vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</h6>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.</p>
                                       <?php foreach ($newsList as $newsItem) : ?>
                                        <div class="wrapper margin-bot">
                                            <figure class="img-indent3"> <img src="<?php echo News::getImage($newsItem['id']); ?>" alt="" /></figure>
                                            <div class="extra-wrap">
                                                <h6><strong><?php echo $newsItem['title'] ; ?></strong></h6>
                                                <p><?php echo $newsItem['short_content'] ; ?></p>
                                                <a class="button" href="/news/<?php echo $newsItem['id'];?>">Read More</a>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                </article>
                                <article class="grid_4">
                                    <div class="indent-left2">
                                        <h3>Services Warranty <strong>Options</strong></h3>
                                        <h6>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</h6>
                                        <ul class="list-2 p1">
                                            <li><a href="#">Labore et dolore magna aliquyam</a></li>
                                            <li><a href="#">At vero eos et accusam et justo duo</a></li>
                                            <li><a href="#">Stet clita kasd gubergren, no sea takimata </a></li>
                                            <li><a href="#">Sanctus est lorem ipsum</a></li>
                                            <li><a href="#">Lorem ipsum dolor sit consetetur </a></li>
                                            <li><a href="#">Sadipscing elitr, sed diam</a></li>
                                        </ul>
                                        <p>Nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                        <h3>Spare Parts</h3>
                                        <h6>At vero eos et accusam et justo duo </h6>
                                        <p>Stet clita kasd gubergren, no sea takimata sanctus lorem ipsum. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                                        <a class="button" href="#">Read More</a> </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>