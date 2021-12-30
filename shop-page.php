<?php
$title = 'Covid-19 Shop';
require_once('./database.php');
$first = (isset($_GET['page']) ? $_GET['page'] - 1 : 1 - 1) * 9;
$number = get_number_page('SELECT `id`, `name`, `slug`, `description`,`price` FROM `products`', 9);
$data = get_data('SELECT `id`, `name`,`slug`, `description`,`price` FROM `products` LIMIT ' . $first . ',' . 9);
require_once('./Layout/header.php'); ?>

<!-- Page Header Section Start Here -->
<section class="page-header">
    <div class="container">
        <div class="page-title">
            <h2>Shop Page</h2>
            <ul class="breadcrumb lab-ul">
                <li><a href="index.html">Home</a></li>
                <li>Shop Page</li>
            </ul>
        </div>
    </div>
</section>
<!-- Page Header Section Ending Here -->

<!-- Shop Page Section start here -->
<section class="shop-page padding-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12 sticky-widget">
                <div class="shop-title d-flex flex-wrap justify-content-between">
                    <p>Showing <?= $first + 1 ?> - <?= $number + 1 ?> Results</p>
                    <div class="product-view-mode">
                        <a class="active" data-target="grid"><i class="icofont-ghost"></i></a>
                        <a data-target="list"><i class="icofont-listine-dots"></i></a>
                    </div>
                </div>

                <div class="shop-product-wrap grid row justify-content-center">
                    <!-- Box Content -->
                    <?php foreach ($data as $v) : ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src="assets/images/shop/01.jpg" alt="shop">
                                    </div>
                                    <div class="product-action-link">
                                        <a href="product.php?name=<?= $v['slug'] ?>"><i class="icofont-eye"></i></a>
                                        <a href="#"><i class="icofont-heart"></i></a>
                                        <a class="view-modal" data-target="#quick_view"><i class="icofont-cart-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5><a href="#"><?= $v['name'] ?></a></h5>
                                    <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
                                    <h6>Rp. <?= $v['price'] ?></h6>
                                </div>
                            </div>
                            <div class="product-list-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src="assets/images/shop/01.jpg" alt="shop">
                                    </div>
                                    <div class="product-action-link">
                                        <a href="product.php?name=<?= $v['slug'] ?>"><i class="icofont-eye"></i></a>
                                        <a href="#"><i class="icofont-heart"></i></a>
                                        <a class="view-modal" data-target="#quick_view"><i class="icofont-cart-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5><a href="#"><?= $v['name'] ?></a></h5>
                                    <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
                                    <h6>
                                        Rp. <?= $v['price'] ?>
                                    </h6>
                                    <p><?= $v['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                    <!-- End Box Content -->
                </div>

                <div class="paginations">
                    <ul class="d-flex flex-wrap lab-ul justify-content-center">
                        <?php for ($page = 1; $page <= $number; $page++) {
                            echo '<li class="d-none d-sm-block">
                                <a href="shop-page.php?page=' . $page . '">' . $page . '</a>
                            </li>';
                        } ?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-7 col-12">
                <aside>
                    <div class="widget widget-search">
                        <form action="/" class="search-wrapper">
                            <input type="text" name="s" placeholder="Search...">
                            <button type="submit"><i class="icofont-search-2"></i></button>
                        </form>
                    </div>

                    <div class="widget letest-product">
                        <div class="widget-header">
                            <h5>Latests Products</h5>
                        </div>
                        <div class="widget-wrapper">
                            <ul class="lab-ul">
                                <li>
                                    <div class="product-thumb">
                                        <img src="assets/images/shop/01.jpg" alt="shop">
                                    </div>
                                    <div class="product-content">
                                        <h6><a href="#">Product Title Here</a></h6>
                                        <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i> <span>(3 review)</span></p>
                                        <h6>$200</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="product-thumb">
                                        <img src="assets/images/shop/02.jpg" alt="shop">
                                    </div>
                                    <div class="product-content">
                                        <h6><a href="#">Product Title Here</a></h6>
                                        <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i> <span>(3 review)</span></p>
                                        <h6>$200</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="product-thumb">
                                        <img src="assets/images/shop/03.jpg" alt="shop">
                                    </div>
                                    <div class="product-content">
                                        <h6><a href="#">Product Title Here</a></h6>
                                        <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i> <span>(3 review)</span></p>
                                        <h6>$200</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="product-thumb">
                                        <img src="assets/images/shop/04.jpg" alt="shop">
                                    </div>
                                    <div class="product-content">
                                        <h6><a href="#">Product Title Here</a></h6>
                                        <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i> <span>(3 review)</span></p>
                                        <h6>$200</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>

        <div class="modal" id="quick_view">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal"><i class="icofont-close"></i></button>
                    <div class="modal-body">
                        <div class="product-details-inner">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-12">
                                    <div class="thumb text-center">
                                        <div class="pro-thumb">
                                            <img src="assets/images/shop/09.jpg" alt="shop">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="product-content">
                                        <h5><a href="#"><?= $v['name'] ?></a></h5>
                                        <p>
                                            <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
                                        </p>
                                        <h6>Rp. <?= $v['price'] ?></h6>
                                        <p><?= $v['description'] ?></p>
                                    </div>
                                    <div class="cart-button">
                                        <div class="cart-plus-minus">
                                            <div class="dec qtybutton">-</div>
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                        <a href="#" class="lab-btn"><span>Add to Cart</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Page Section ending here -->

<?php require_once('./Layout/Footer.php') ?>