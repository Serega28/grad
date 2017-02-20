<?php include ROOT . '/views/layouts/header.php'; ?>
<body id="page5">
<div class="main-bg">
    <div class="bg">
        <!--==============================content================================-->
        <section id="content">
            <div class="main">
                <div class="container_12">
                    <?php include ROOT . '/views/layouts/wrapper.php'; ?>
                    <div class="container-bot">
                        <div class="container-top">
                            <div class="container">
                                <div class="wrapper">
                                    <article class="grid_4">
                                        <div class="indent-left">
                                            <h3>Most Popular:</h3>
                                            <h6><a class="link color-1" href="#">Product Name 1</a></h6>
                                            <p class="p3">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p>
                                            <h6><a class="link color-1" href="#">Product Name 2</a></h6>
                                            <p class="img-indent-bot">Lusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                            <h6><a class="link color-1" href="#">Product Name 3</a></h6>
                                            <p class="img-indent-bot">Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
                                            <h6><a class="link color-1" href="#">Product Name 4</a></h6>
                                            Ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. </div>
                                    </article>
                                    <article class="grid_8">
                                        <div class="indent-left2">
                                            <h3 class="aligncenter">Price List</h3>
                                            <table class="price-list">
                                                <thead>
                                                <tr>
                                                    <td>id</td>
                                                    <td>name</td>
                                                    <td>description</td>
                                                    <td>availability</td>
                                                    <td>trade price</td>
                                                    <td>retail price</td>
                                                </tr>
                                                </thead>
                                                <?php foreach ($priceList as $item):?>
                                                    <tbody>
                                                    <tr>
                                                        <td><?php echo $item['id'];?></td>
                                                        <td><?php echo $item['name'];?></td>
                                                        <td><?php echo $item['description'];?></td>
                                                        <td>
                                                            <?php echo($item['availability']>0)? 'available' : 'not available';?>
                                                        </td>
                                                        <td>$<?php echo $item['trade_price'];?></td>
                                                        <td>$<?php echo $item['retail_price'];?></td>
                                                    </tr>
                                                    </tbody>
                                                <?php endforeach; ?>
                                            </table>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
        <!--==============================footer=================================-->
<?php include ROOT . '/views/layouts/footer.php'; ?>
