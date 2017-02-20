<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="main">
        <div class="container-top">
            <div class="container">
                <div class="wrapper">
                    <div class="aligncenter">
                        <br/>
                            <h4>Управление прайсом</h4>
                            <a href="/admin/price/create" class=""><i class="fa fa-plus"></i> Добавить товар</a>
                            <h4>Список товаров:</h4>
                        <br/>
                        <table class="price-list">
                            <tr>
                                <th>ID товара</th>
                                <th>Товар</th>
                                <th>Описание</th>
                                <th>Розничная цена</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <?php foreach ($priceList as $price): ?>
                            <tr>
                                <td><?php echo $price['id']; ?></td>
                                <td><?php echo $price['name']; ?></td>
                                <td><?php echo $price['description']; ?></td>
                                <td>$<?php echo $price['retail_price']; ?></td>
                                <td><a href="/admin/price/update/<?php echo $price['id']; ?>" title="Редактировать"><i class="">Редактировать</i></a></td>
                                <td><a href="/admin/price/delete/<?php echo $price['id']; ?>" title="Удалить"><i class=""></i>Удалить</a></td>
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

