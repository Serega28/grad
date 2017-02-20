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

                            <h4>Добавить новый товар</h4>
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

                                        <p>Товар</p>
                                        <input type="text" name="name" placeholder="" value="">

                                        <p>Описание</p>
                                        <input type="text" name="description" placeholder="" value="">

                                        <p>Оптовая цена, $</p>
                                        <input type="text" name="trade_price" placeholder="" value="">

                                        <p>Розничная цена, $</p>
                                        <input type="text" name="retail_price" placeholder="" value="">

                                        <p>Наличие</p>
                                        <select name="availability">
                                            <option value="1" selected="selected">В наличии</option>
                                            <option value="0">Ожидается</option>
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

