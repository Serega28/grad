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
                                <li><a href="/admin/comments">Управление отзывами</a></li>
                                <li class="active">Редактировать комментарий</li>
                            </ol>
                        </div>

                        <h4>Редактировать отзыв #<?php echo $id; ?></h4>

                        <br/>
                        <div class="col-lg-4">
                            <div class="login-form">
                                <form action="#" method="post" enctype="multipart/form-data">

                                    <p>Имя пользователя</p>
                                    <input type="text" name="name" placeholder="" value="<?php echo $comment['name']; ?>">

                                    <p>Текст комментария</p>
                                    <textarea name="comment"><?php echo $comment['comment']; ?></textarea>
                                    <br/><br/>
                                    <br/><br/>

                                        <p>Отображать на странице комментариев?</p>
                                        <select name="comment_type">
                                            <option value="1" <?php if ($comment['comment_type'] == 1) echo ' selected="selected"'; ?>>Да</option>
                                            <option value="0" <?php if ($comment['comment_type'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                                        </select>

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

