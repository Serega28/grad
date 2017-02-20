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

                                                            <?php if ($result): ?>
                                                                <p>Вы зарегистрированы!</p>
                                                            <?php else: ?>
                                                                <?php if (isset($errors) && is_array($errors)): ?>
                                                                    <ul>
                                                                        <?php foreach ($errors as $error): ?>
                                                                            <li> - <?php echo $error; ?></li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                <?php endif; ?>

                                                                <div class="signup-form"><!--sign up form-->
                                                                    <h3>Регистрация на сайте</h3>
                                                                    <form action="#" method="post">
                                                                        <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                                                                        <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                                                                        <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                                                                        <input type="submit" name="submit" class="btn btn-default" value="Регистрация" />
                                                                    </form>
                                                                </div><!--/sign up form-->

                                                            <?php endif; ?>
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