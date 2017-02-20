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
                                <article class="grid_4">
                                    <div class="indent-left">
                                        <section>
                                            <div class="container">
                                                <div class="row">

                                                    <div class="col-sm-4 col-sm-offset-4 padding-right">

                                                        <?php if (isset($errors) && is_array($errors)): ?>
                                                            <ul>
                                                                <?php foreach ($errors as $error): ?>
                                                                    <li> - <?php echo $error; ?></li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        <?php endif; ?>

                                                        <div class="signup-form"><!--sign up form-->
                                                            <h2>Вход на сайт</h2>
                                                            <form action="#" method="post">
                                                                <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                                                                <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                                                                <input type="submit" name="submit" class="btn btn-default" value="Вход" />
                                                            </form>
                                                        </div><!--/sign up form-->
                                                        <br/>
                                                        <br/>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
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