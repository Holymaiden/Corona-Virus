<?php
require_once('./database.php');
$data = query("SELECT `id`, `name`,`slug`, `description`,`price` FROM `products` WHERE `slug`='" . $_GET['name'] . "'");
$title = "Covid-19 | " . $data['name'] . "";
require_once('./Layout/header.php');
?>

<!-- Page Header Section Start Here -->
<section class="page-header">
    <div class="container">
        <div class="page-title">
            <h2><?= $data['name'] ?></h2>
            <ul class="breadcrumb lab-ul">
                <li><a href="index.html">Home</a></li>
                <li>Product Page</li>
            </ul>
        </div>
    </div>
</section>
<!-- Page Header Section Ending Here -->

<!-- Shop Page Section start here -->
<div class="shop-single padding-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12 sticky-widget">
                <div class="product-details">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="product-thumb">
                                <div class="swiper-container pro-single-top">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="single-thumb"><img src="assets/images/shop/01.jpg" alt="shop"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-thumb"><img src="assets/images/shop/02.jpg" alt="shop"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-thumb"><img src="assets/images/shop/03.jpg" alt="shop"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-thumb"><img src="assets/images/shop/04.jpg" alt="shop"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-thumb"><img src="assets/images/shop/05.jpg" alt="shop"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-container pro-single-thumbs">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="single-thumb"><img src="assets/images/shop/01.jpg" alt="shop"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-thumb"><img src="assets/images/shop/02.jpg" alt="shop"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-thumb"><img src="assets/images/shop/03.jpg" alt="shop"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-thumb"><img src="assets/images/shop/04.jpg" alt="shop"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-thumb"><img src="assets/images/shop/05.jpg" alt="shop"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pro-single-next"><i class="icofont-rounded-left"></i></div>
                                <div class="pro-single-prev"><i class="icofont-rounded-right"></i></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="post-content">
                                <h4><?= $data['name'] ?></h4>
                                <p class="rating">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    (3 review)
                                </p>
                                <h4><?= $data['price'] ?></h4>
                                <h6>Description</h6>
                                <p><?= $data['description'] ?></p>
                                <form>
                                    <div class="select-product size">
                                        <select>
                                            <option>Select Size</option>
                                            <option>SM</option>
                                            <option>MD</option>
                                            <option>LG</option>
                                            <option>XL</option>
                                            <option>XXL</option>
                                        </select>
                                        <i class="icofont-rounded-down"></i>
                                    </div>
                                    <div class="select-product color">
                                        <select>
                                            <option>Select Color</option>
                                            <option>Pink</option>
                                            <option>Ash</option>
                                            <option>Red</option>
                                            <option>White</option>
                                            <option>Blue</option>
                                        </select>
                                        <i class="icofont-rounded-down"></i>
                                    </div>
                                    <div class="cart-plus-minus">
                                        <div class="dec qtybutton">-</div>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        <div class="inc qtybutton">+</div>
                                    </div>
                                    <div class="discount-code">
                                        <input type="text" placeholder="Enter Discount Code">
                                    </div>
                                    <button type="submit" class="lab-btn"><span>Add To Cart</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
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
                            <ul class="codex">
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
    </div>
</div>
<!-- Shop Page Section ending here -->

<!-- Footer Section Start Here -->
<footer style="background-image: url(assets/css/bg-image/bg-3.jpg);">
    <div class="footer-top padding-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-item first-set">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h6>About Covid-19</h6>
                                </div>
                                <div class="content">
                                    <p>We believe in Simple Creative and Flexible Design Standards.</p>
                                    <h6>Headquarters:</h6>
                                    <p>795 Folsom Ave, Suite 600 San Francisco, CA 94107</p>
                                    <ul class="lab-ul">
                                        <li>
                                            <p><span>Phone:</span>(91) 8547 632521</p>
                                        </li>
                                        <li>
                                            <p><span>Email:</span><a href="#">info@covid-19.com</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-item">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h6>Navigate</h6>
                                </div>
                                <div class="content">
                                    <ul class="lab-ul">
                                        <li><a href="#"><i class="icofont-caret-right"></i>Advertisers</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Developers</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Resources</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Company</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Connect</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-item">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h6>Social Contact</h6>
                                </div>
                                <div class="content">
                                    <ul class="lab-ul">
                                        <li><a href="#"><i class="icofont-facebook"></i>Facebook</a></li>
                                        <li><a href="#"><i class="icofont-twitter"></i>Twitter</a></li>
                                        <li><a href="#"><i class="icofont-instagram"></i>Instagram</a></li>
                                        <li><a href="#"><i class="icofont-youtube"></i>YouTube</a></li>
                                        <li><a href="#"><i class="icofont-xing"></i>Xing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-item">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="title">
                                    <h6>Privacy And Tos</h6>
                                </div>
                                <div class="content">
                                    <ul class="lab-ul">
                                        <li><a href="#"><i class="icofont-caret-right"></i>Advertiser Agreement</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Acceptable Use Policy</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Privacy Policy</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Technology Privacy</a></li>
                                        <li><a href="#"><i class="icofont-caret-right"></i>Developer Agreement</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="section-wrapper">
                <p>&copy; 2020 All Rights Reserved. Designed by <a href="https://themeforest.net/user/codexcoder">CodexCoder</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section Ending Here -->

<!-- scrollToTop start here -->
<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
<!-- scrollToTop ending here -->


<script src="assets/js/jquery.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/lightcase.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/functions.js"></script>
</body>

</html>