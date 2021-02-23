<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="">

        <body>
            <!--============= ScrollToTop Section Starts Here =============-->
            <div class="overlayer" id="overlayer">
                <div class="loader">
                    <div class="loader-inner"></div>
                </div>
            </div>
            <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
            <div class="overlay"></div>
            <!--============= ScrollToTop Section Ends Here =============-->


            <!--============= Header Section Starts Here =============-->
            <header>
                <div class="header-top">
                    <div class="container">
                        <div class="header-top-wrapper">
                            <ul class="customer-support">
                                <li>
                                    <a href="#0" class="mr-3"><i class="fas fa-phone-alt"></i><span class="ml-2 d-none d-sm-inline-block">Customer Support</span></a>
                                </li>
                                <li>
                                    <i class="fas fa-globe"></i>
                                    <select name="language" class="select-bar">
                                        <option value="en">Ke</option>
                                        <option value="Bn">Ug</option>
                                        <option value="Rs">Tz</option>
                                    </select>
                                </li>
                            </ul>
                            <ul class="cart-button-area">
                                <!-- <li>
                                    <a href="#0" class="cart-button"><i class="flaticon-shopping-basket"></i><span class="amount">08</span></a>
                                </li> -->
                                <li>
                                    <a href="sign-in.html" class="user-button"><i class="flaticon-user"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="container">
                        <div class="header-wrapper">
                            <div class="logo">

                                <a href="/">
                                    <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/logo/logo.png" alt="logo">
                                </a>
                            </div>
                            <ul class="menu ml-auto">
                                <li>
                                    <a href="/">Home</a>
                                    <!-- <ul class="submenu">
                                <li>
                                    <a href="index.html">Home Page One</a>
                                </li>
                                <li>
                                    <a href="index-2.html">Home Page Two</a>
                                </li>
                                <li>
                                    <a href="index-3.html">Home Page Three</a>
                                </li>
                                <li>
                                    <a href="index-4.html">Home Page Four</a>
                                </li>
                                <li>
                                    <a href="index-5.html">Home Page Five</a>
                                </li>
                            </ul> -->
                                </li>
                                <li>
                                    <a href="site/works">How it works</a>
                                </li>
                                <li>
                                    <a href="product.html">Term and Conditions</a>
                                </li>

                                <li>
                                    <a href="">Contact</a>
                                </li>
                            </ul>
                            <form class="search-form">
                                <input type="text" placeholder="Search for brand, model....">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                            <div class="search-bar d-md-none">
                                <a href="#0"><i class="fas fa-search"></i></a>
                            </div>
                            <div class="header-bar d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--============= Header Section Ends Here =============-->

            <!--============= Cart Section Starts Here =============-->
            <div class="cart-sidebar-area">
                <div class="top-content">
                    <a href="index.html" class="logo">
                        <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/logo/logo.png" alt="logo">
                    </a>
                    <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
                </div>
                <div class="bottom-content">
                    <div class="cart-products">
                        <h4 class="title">Shopping cart</h4>
                        <div class="single-product-item">
                            <div class="thumb">
                                <a href="#0"><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/shop/shop01.jpg" alt="shop"></a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#0">Color Pencil</a></h4>
                                <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                                <a href="#" class="remove-cart">Remove</a>
                            </div>
                        </div>
                        <div class="single-product-item">
                            <div class="thumb">
                                <a href="#0"><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/shop/shop02.jpg" alt="shop"></a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#0">Water Pot</a></h4>
                                <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                                <a href="#" class="remove-cart">Remove</a>
                            </div>
                        </div>
                        <div class="single-product-item">
                            <div class="thumb">
                                <a href="#0"><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/shop/shop03.jpg" alt="shop"></a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#0">Art Paper</a></h4>
                                <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                                <a href="#" class="remove-cart">Remove</a>
                            </div>
                        </div>
                        <div class="single-product-item">
                            <div class="thumb">
                                <a href="#0"><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/shop/shop04.jpg" alt="shop"></a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#0">Stop Watch</a></h4>
                                <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                                <a href="#" class="remove-cart">Remove</a>
                            </div>
                        </div>
                        <div class="single-product-item">
                            <div class="thumb">
                                <a href="#0"><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/shop/shop05.jpg" alt="shop"></a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="#0">Comics Book</a></h4>
                                <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                                <a href="#" class="remove-cart">Remove</a>
                            </div>
                        </div>
                        <div class="btn-wrapper text-center">
                            <a href="#0" class="custom-button"><span>Checkout</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--============= Cart Section Ends Here =============-->

            <div class="">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
    </div>


    <!--============= Footer Section Starts Here =============-->
    <footer class="bg_img oh" data-background="<?= Yii::$app->request->baseUrl ?>/themes/images/footer/footer-bg.jpg">
        <div class="footer-top-shape">
            <img src="assets/css/img/footer-top-shape.png" alt="css">
        </div>
        <div class="anime-wrapper">
            <div class="anime-1 plus-anime">
                <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/footer/p1.png" alt="footer">
            </div>
            <div class="anime-2 plus-anime">
                <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/footer/p2.png" alt="footer">
            </div>
            <div class="anime-3 plus-anime">
                <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/footer/p3.png" alt="footer">
            </div>
            <div class="anime-5 zigzag">
                <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/footer/c2.png" alt="footer">
            </div>
            <div class="anime-6 zigzag">
                <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/footer/c3.png" alt="footer">
            </div>
            <div class="anime-7 zigzag">
                <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/footer/c4.png" alt="footer">
            </div>
        </div>

        <div class="footer-top padding-bottom padding-top">
            <div class="container">
                <div class="row mb--60">
                    <div class="col-sm-6 col-lg-4">
                        <div class="footer-widget widget-links">
                            <h5 class="title">Auction Categories</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0">Watches</a>
                                </li>
                                <li>
                                    <a href="#0">Electronics</a>
                                </li>
                                <li>
                                    <a href="#0">Real Estate</a>
                                </li>
                                <li>
                                    <a href="#0">Jewelry</a>
                                </li>
                                <li>
                                    <a href="#0">All Cartegories comimg soon</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="footer-widget widget-links">
                            <h5 class="title">Terms</h5>
                            <ul class="links-list mid-list">
                                <li>
                                    <a href="#0">Minimum bid amount is Ksh 100.00</a>
                                </li>
                                <li>
                                    <a href="#0">You must be 18 years and above to bid</a>
                                </li>
                                <li>
                                    <a href="#0">Only one person can Win per Item</a>
                                </li>
                                <li>
                                    <a href="#0">Winners will be notified via sms or call</a>
                                </li>
                                <li>
                                    <a href="#0">Only the LOWEST UNIQUE BID Wins</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="footer-widget widget-follow">
                            <h5 class="title">Follow Us</h5>
                            <ul class="links-list">
                                <li>
                                    <a href="#0"><i class="fas fa-phone-alt"></i>(646) 663-4575</a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-blender-phone"></i>(646) 968-0608</a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-envelope-open-text"></i>tech@WigglesTech.com</a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-location-arrow"></i>1201 Broadway Suite</a>
                                </li>
                            </ul>
                            <ul class="social-icons">
                                <li>
                                    <a href="#0" class="active"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright-area">
                    <div class="footer-bottom-wrapper">
                        <div class="logo">
                            <!-- <a href="index.html"><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/logo/footer-logo.png" alt="logo"></a> -->
                        </div>
                        <ul class="gateway-area">
                            <li>
                                <a href="#0"><img height="40" src="<?= Yii::$app->request->baseUrl ?>/themes/images/footer/paypal.png" alt="footer"></a>
                            </li>
                            <!-- <li>
                                <a href="#0"><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/footer/visa.png" alt="footer"></a>
                            </li> -->
                            <!-- <li>
                                <a href="#0"><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/footer/discover.png" alt="footer"></a>
                            </li> -->
                            <!-- <li>
                                <a href="#0"><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/footer/mastercard.png" alt="footer"></a>
                            </li> -->
                        </ul>
                        <div class="copyright">
                            <p>&copy; Copyright 2021 | <a href="#0">PesaBit</a> By <a href="#0">WigglesTech</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>