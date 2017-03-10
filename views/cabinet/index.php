<?php include ROOT . '/views/layouts/header.php'; ?>

<section id="content">
    <div class="main">
        <div class="container_12">
            <?php include ROOT . '/views/layouts/wrapper.php'; ?>
        </div>
            <div class="main">
                <div class="container-top">
                    <div class="container">
                        <div class="wrapper">
                            <div class="aligncenter">
                                <p><h5>Кабинет пользователя</h5><p>
                                    <h4>Привет, <?php echo $user['name'];?>!</h4>
                                    <ul>
                                        <li><a href="/cabinet/edit">Редактировать данные</a></li>
                                        <li><a href="/comments/create">Оставить отзыв</a></li>
                                        <?php if($user['role'] == 'admin'):?>
                                            <li><a href="/admin">Админпанель</a></li>
                                        <?php endif ;?>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>