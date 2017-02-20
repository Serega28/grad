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
                                        <h3 class="p1">Feedback</h3>
                                        <form id="contact-form" action="#" method="post" enctype="multipart/form-data">
                                            <fieldset>

                                                <div class="wrapper">
                                                    <div class="text-form">Message:</div>
                                                    <div class="extra-wrap">
                                                        <textarea name="comment"></textarea>
                                                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                                                    </div>
                                                </div>

                                            </fieldset>
                                        </form>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================footer=================================-->
<?php include ROOT . '/views/layouts/footer.php'; ?>