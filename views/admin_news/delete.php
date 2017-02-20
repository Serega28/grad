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
                                <li><a href="/admin/product">Управление новостями</a></li>
                            </ol>
                        </div>

                        <h4>Удалить новость #<?php echo $id; ?></h4>

                        <p>Вы действительно хотите удалить этоу новость?</p>

                        <form method="post">
                            <input type="submit" name="submit" value="Удалить" />
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>

