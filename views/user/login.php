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
                                        <?php if (isset($errors) && is_array($errors)): ?>
                                            <ul>
                                                <?php foreach ($errors as $error): ?>
                                                    <li> - <?php echo $error; ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>

                                    <div class="signup-form"><!--sign up form-->
                                    <h4>Введите свой E-mail и пароль:</h4>
                                    <form id="contact-form" action="#" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <label><input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/></label><br>
                                            <label><input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/></label><br>
                                            <label><input type="submit" name="submit" class="btn btn-default" value="Вход" /></label><br>
                                        </fieldset>
                                        </form>
                                    </div><!--/sign up form-->
                                </article>
                                <article class="grid_4">
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