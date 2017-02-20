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
                                <li><a href="/admin/price">Управление прайсом</a></li>
                                <li class="active">Редактировать товар</li>
                            </ol>
                        </div>

                        <h4>Редактировать товар #<?php echo $id; ?></h4>
                        <br/>

                        <div class="col-lg-4">
                            <div class="login-form">
                                <form action="#" method="post" enctype="multipart/form-data">

                                    <p>Товар</p>
                                    <input type="text" name="name" placeholder="" value="<?php echo $price['name']; ?>">

                                    <p>Описание</p>
                                    <input type="text" name="description" placeholder="" value="<?php echo $price['description']; ?>">

                                    <p>Наличие</p>
                                    <select name="availability">
                                        <option value="1" <?php if ($price['availability'] == 1) echo ' selected="selected"'; ?>>В наличии</option>
                                        <option value="0" <?php if ($price['availability'] == 0) echo ' selected="selected"'; ?>>Ожидается</option>
                                    </select>

                                    <p>Оптовая цена, $</p>
                                    <input type="text" name="trade_price" placeholder="" value="<?php echo $price['trade_price']; ?>">

                                    <p>Розничная цена, $</p>
                                    <input type="text" name="retail_price" placeholder="" value="<?php echo $price['retail_price']; ?>">
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

