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

                        <h4>Редактировать новость #<?php echo $id; ?></h4>

                        <br/>
                        <div class="col-lg-4">
                            <div class="login-form">
                                <form action="#" method="post" enctype="multipart/form-data">

                                    <p>Заголовок</p>
                                    <input type="text" name="title" placeholder="" value="<?php echo $news['title']; ?>">

                                    <p>Содержание</p>
                                    <input type="text" name="short_content" placeholder="" value="<?php echo $news['short_content']; ?>">

                                    <p>Текст новости</p>
                                    <textarea name="content"><?php echo $news['content']; ?></textarea>
                                    <br/><br/>

                                    <p>Автор</p>
                                    <input type="text" name="author_name" placeholder="" value="<?php echo $news['author_name']; ?>">

                                    <p>Изображение</p>
                                    <img src="<?php echo News::getImage($news['id']); ?>" width="200" alt="" />
                                    <input type="file" name="image" placeholder="" value="<?php echo $news['image']; ?>">

                                    <br/><br/>

                                    <p>Отображение</p>
                                    <select name="type">
                                        <option value="1" <?php if ($news['type'] == 1) echo ' selected="selected"'; ?>>Да</option>
                                        <option value="0" <?php if ($news['type'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                                    </select>

                                    <br/><br/>
                                    <br/><br/>
                                    <br/><br/>
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
    </div>
</section>


<?php include ROOT . '/views/layouts/footer.php'; ?>

