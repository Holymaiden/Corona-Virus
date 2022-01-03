<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/01.png">

        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icofont.min.css">
        <link rel="stylesheet" href="assets/css/lightcase.css">
        <link rel="stylesheet" href="assets/css/swiper.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <?php if ($title === "Covid-19 Harian" || $title === "Covid-19 Provinsi") {
                echo "<link href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css'rel='stylesheet'>
                <link href='https://cdn.datatables.net/1.11.3/css/dataTables.semanticui.min.css'rel='stylesheet'>";
        } ?>

        <title><?= $title ?></title>
</head>

<body>
        <!-- Mobile Menu Start Here -->
        <div class="mobile-menu">
                <nav class="mobile-header">
                        <div class="header-logo">
                                <a href="index.php"><img src="assets/images/logo/01.png" alt="logo"></a>
                        </div>
                        <div class="header-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                        </div>
                </nav>
                <nav class="mobile-menu">
                        <div class="mobile-menu-area">
                                <div class="mobile-menu-area-inner">
                                        <ul class="lab-ul">
                                                <li class="active"><a href="index.php">Home</a>
                                                </li>
                                                <li><a href="#">Data Covid-19</a>
                                                        <ul class="lab-ul">
                                                                <li><a href="harian.php">Harian</a></li>
                                                                <li><a href="provinsi.php">Provinsi</a></li>
                                                        </ul>
                                                </li>
                                                <li><a href="service.html">Prevention</a></li>
                                                <li><a href="#0">Shop</a>
                                                        <ul class="lab-ul">
                                                                <li><a href="shop-page.php">Products Page</a></li>
                                                                <li><a href="shop-single.html">Product Single</a></li>
                                                                <li><a href="cart-page.html">Cart Page</a></li>
                                                        </ul>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                </div>
                        </div>
                </nav>
        </div>
        <!-- Mobile Menu Ending Here -->

        <!-- desktop menu start here -->
        <header class="header-section">
                <div class="header-area">
                        <div class="container">
                                <div class="primary-menu">
                                        <div class="logo">
                                                <a href="index.php"><img src="assets/images/logo/01.png" alt="logo"></a>
                                        </div>
                                        <div class="main-area">
                                                <div class="main-menu">
                                                        <ul class="lab-ul">
                                                                <li class="active"><a href="index.php">Home</a>
                                                                </li>
                                                                <li><a href="#">Data Covid-19</a>
                                                                        <ul class="lab-ul">
                                                                                <li><a href="harian.php">Harian</a></li>
                                                                                <li><a href="provinsi.php">Provinsi</a></li>
                                                                        </ul>
                                                                </li>
                                                                <li><a href="#0">Shop</a>
                                                                        <ul class="lab-ul">
                                                                                <li><a href="shop-page.php">Products Page</a></li>
                                                                                <li><a href="cart-page.html">Cart Page</a></li>
                                                                        </ul>
                                                                </li>
                                                                <li><a href="contact.html">Contact</a></li>
                                                                <?php
                                                                if (isset($_SESSION['username'])) {
                                                                        if ($_SESSION['username'] != null)
                                                                                echo '<li><a href="logout.php">Log Out</a></li>';
                                                                }
                                                                ?>
                                                        </ul>
                                                </div>
                                                <div class="header-btn">
                                                        <a href="login.php" class="lab-btn"><span>Protect Yourself</span></a>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </header>
        <!-- desktop menu ending here -->