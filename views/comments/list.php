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
                                        <h3>Here is a comments about us:</h3>
                                        <?php foreach ($commentsList as $commentsItem) : ?>
                                            <div class="wrapper margin-bot">
                                                <div class="extra-wrap">
                                                    <h6><strong><?php echo $commentsItem['name'] ; ?></strong></h6>
                                                    <p>id:<?php echo $commentsItem['id'] ; ?></p>
                                                    <p><?php echo $commentsItem['comment'];?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                </article>
                                <article class="grid_4">
                                    <div class="indent-left2">
                                        <h3>Lorem ipsum<strong>Options</strong></h3>
                                        <h6>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</h6>
                                        <ul class="list-2 p1">
                                            <li>Labore et dolore magna aliquyam</li>
                                            <li>At vero eos et accusam et justo duo</li>
                                            <li>Stet clita kasd gubergren, no sea takimata</li>
                                            <li>Sanctus est lorem ipsum</li>
                                            <li>Lorem ipsum dolor sit consetetur </li>
                                            <li>Sadipscing elitr, sed diam</li>
                                        </ul>
                                        <p>Nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                        <h3>Spare Parts</h3>
                                        <h6>At vero eos et accusam et justo duo </h6>
                                        <p>Stet clita kasd gubergren, no sea takimata sanctus lorem ipsum. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                                        <a class="button" href="/comments/create/">leave your comment here</a> </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>