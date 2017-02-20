<?php include ROOT . '/views/layouts/header.php'; ?>
<section id="content">
    <div class="main">
        <div class="container_12">
            <?php include ROOT . '/views/layouts/wrapper.php'; ?>
        </div>
        <div class="container-bot">
            <div class="container-top">
                <div class="container">
                    <div class="wrapper">
                        <article class="grid_8">
                            <div class="indent-left2">
                                <h3 class="p1">Редактирование данных</h3>
                                <div class="col-sm-4 col-sm-offset-4 padding-right">

                                    <?php if ($result): ?>
                                        <p>Данные отредактированы!</p>
                                    <?php else: ?>
                                        <?php if (isset($errors) && is_array($errors)): ?>
                                            <ul>
                                                <?php foreach ($errors as $error): ?>
                                                    <li> - <?php echo $error; ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>

                                        <div class="login-form"><!--sign up form-->
                                            <form action="#" method="post">
                                                <ul>
                                                    <li><p>Имя:</p></li>
                                                    <li><input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/></li></br>
                                                    <li><p>Пароль:</p></li>
                                                    <li><input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/></li></br>
                                                    <li><input type="submit" name="submit" class="btn btn-default" value="Сохранить" /></li>
                                                </ul>
                                            </form>
                                        </div><!--/sign up form-->
                                    <?php endif; ?>
                                    <br/>
                                    <br/>
                                </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>

