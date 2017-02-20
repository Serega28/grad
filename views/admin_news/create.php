<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="main">
        <div class="container-top">
            <div class="container">
                <div class="wrapper">
                    <section>
                        <br/>
                            <div class="breadcrumbs">
                                <ol class="breadcrumb">
                                    <li><a href="/admin/news">Управление новостями</a></li>
                                    <li class="active">Редактировать новость</li>
                                </ol>
                            </div>
                                <h4>Добавить новую запись</h4>
                                <br/>
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li> - <?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                            <div class="col-lg-4">
                                <div class="login-form">
                                    <form action="#" method="post" enctype="multipart/form-data">

                                        <p>Заголовок</p>
                                        <input type="text" name="title" placeholder="" value="">

                                        <p>Содержание</p>
                                        <input type="text" name="short_content" placeholder="" value="">
                                        <br/><br/>

                                        <p>Текст новости</p>
                                        <textarea name="content"></textarea>
                                        <br/><br/>

                                        <p>Автор</p>
                                        <input type="text" name="author_name" placeholder="" value="">

                                        <p>Изображение товара</p>
                                        <input type="file" name="image" placeholder="" value="">
                                        <br/><br/>

                                        <p>Отображение</p>
                                        <select name="type">
                                            <option value="1" selected="selected">Отображается</option>
                                            <option value="0">Скрыт</option>
                                        </select>
                                        <br/><br/>

                                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                                        <br/><br/>

                                    </form>
                                </div>
                            </div>
                    </section>
                </div>
            </div>
        </div>
</section>


<?php include ROOT . '/views/layouts/footer.php'; ?>

