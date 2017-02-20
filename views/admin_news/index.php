<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="main">
        <div class="container-top">
            <div class="container">
                <div class="wrapper">
                    <div class="aligncenter">

                        <br/>
                            <h4>Управление новостями</h4>
                            <a href="/admin/news/create" class=""><i class=""></i> Добавить новость</a>
                            <h4>Список новостей:</h4>
                        <br/>

                        <table class="price-list">
                            <tr>
                                <th>ID новости</th>
                                <th>Заголовок</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <?php foreach ($allNews as $news): ?>
                            <tr>
                                <td><?php echo $news['id']; ?></td>
                                <td><?php echo $news['title']; ?></td>
                                <td><a href="/admin/news/update/<?php echo $news['id']; ?>" title="Редактировать"><i class="">Редактировать</i></a></td>
                                <td><a href="/admin/news/delete/<?php echo $news['id']; ?>" title="Удалить"><i class=""></i>Удалить</a></td>
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

