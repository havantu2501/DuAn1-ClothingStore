<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from htmldemo.net/coron/coron/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2024 12:50:51 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Clothing Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/avatar.avif">

    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugin.css">
    <link rel="stylesheet" href="assets/css/bundle.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
</head>

<body>
    <!-- Add your site or application content here -->

    <div class="pos_page">
        <div class="container">
            <!--pos page inner-->
            <div class="pos_page_inner">
                <!--header area -->
                <div class="header_area">
                    <!--header top-->
                    <div class="header_top">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">

                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="header_links">

                                    <ul>
                                        <li><a> <?php if (isset($_SESSION['user_client'])) {
                                                    echo  $_SESSION['user_client'];
                                                } ?></a></li>


                                        <?php if (isset($_SESSION['user_client'])) { ?>
                                            <li><a href="my-account.html" title="My account">My account</a></li>
                                            <li><a href="<?= BASE_URL . '?act=logout' ?>" title="Logout">Logout</a></li>
                                        <?php } else { ?>
                                            <li><a href="<?= BASE_URL . '?act=register' ?>" title="Register">Register</a></li>
                                            <li><a href="<?= BASE_URL . '?act=login' ?>" title="Login">Login</a></li>
                                        <?php } ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--header top end-->

                    <!--header middel-->
                    <div class="header_middel">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="<?= BASE_URL ?>"><img src="assets/img/logo/avatar.jpg" alt="" width="150" height="100"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="header_right_info">
                                    <div class="search_bar">
                                        <form action="#">
                                            <input placeholder="Search..." type="text">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                    <div class="shopping_cart">
                                        <a href="#"><i class="fa fa-shopping-cart"></i> 2Items - $209.44 <i class="fa fa-angle-down"></i></a>

                                        <!-- Giỏ hàng-->
                                        <div class="mini_cart">
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="assets/img/cart/cart.jpg" alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">lorem ipsum dolor</a>
                                                    <span class="cart_price">$115.00</span>
                                                    <span class="quantity">Qty: 1</span>
                                                </div>
                                                <div class="cart_remove">
                                                    <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="assets/img/cart/cart2.jpg" alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">Quisque ornare dui</a>
                                                    <span class="cart_price">$105.00</span>
                                                    <span class="quantity">Qty: 1</span>
                                                </div>
                                                <div class="cart_remove">
                                                    <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="shipping_price">
                                                <span> Shipping </span>
                                                <span> $7.00 </span>
                                            </div>
                                            <div class="total_price">
                                                <span> total </span>
                                                <span class="prices"> $227.00 </span>
                                            </div>
                                            <div class="cart_button">
                                                <a href="checkout.html"> Check out</a>
                                            </div>
                                        </div>
                                        <!--Giỏ hàng-->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>