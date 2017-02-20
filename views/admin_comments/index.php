<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="main">
        <div class="container-top">
            <div class="container">
                <div class="wrapper">
                    <div class="aligncenter">

                        <br/>
                            <h4>Управление комментариями</h4>
                            <h4>Список отзывов:</h4>
                        <br/>

                        <table class="price-list">
                            <tr>
                                <th>Пользователь</th>
                                <th>Комментарий</th>
                                <th>Отображение</th>
                                <th></th>
                            </tr>
                            <?php foreach ($allComments as $comments): ?>
                            <tr>
                                <td><?php echo $comments['name']; ?></td>
                                <td><?php echo $comments['comment']; ?></td>
                                <td><?php echo($comments['comment_type']>0)? 'Отображается' : 'Скрыт';?></td>
                                <td><a href="/admin/comments/update/<?php echo $comments['id']; ?>" title="Редактировать"><i class="">Редактировать</i></a></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>

