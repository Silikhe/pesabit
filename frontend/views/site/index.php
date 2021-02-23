<?php

/* @var $this yii\web\View */

$this->title = 'lotery';
?>
<!-- <div class="" style="max-width:100%"> -->
<!--============= Banner Section Starts Here =============-->
<section class="banner-section-2 bg_img" data-background="<?= Yii::$app->request->baseUrl ?>/themes/images/banner/banner-bg-3.png">
    <div class="container">
        <div class="row align-items-center justify-content-between align-items-center">
            <div class="col-md-10 col-lg-6 col-xl-6">
                <div class="banner-content cl-white">
                    <h5 class="cate">Enjoy Exclusive</h5>
                    <h2 class="tile"><span class="d-xl-block">Hot Deal</span> For You</h3>
                    <p>
                        We’re constantly bringing new properties market so keep visiting our website that you don’t miss out on the next opportunity.
                    </p>
                    <a href="#0" class="custom-button yellow btn-medium">Get Started</a>
                </div>
            </div>
            <div class="col-md-3 col-lg-6 col-xl-6 d-none d-lg-block">
                <div class="banner-thumb-3">
                    <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/banner/banner-3.png" alt="banner">
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Banner Section Ends Here =============-->


<!--============= Trending Section Starts Here =============-->
<section class="trending-section padding-bottom pt-4">
    <div class="container">
        <div class="section-header-3">
            <div class="left d-block">
                <h2 class="title mb-3">Featured Items</h2>
                <p>Start winning great prizes</p>
            </div>
            <a href="#0" class="normal-button">View All</a>
        </div>
        <div class="row justify-content-center mb-30-none">
            <div class="col-md-6 col-lg-12">
                <div class="auction-item-6">
                    <div class="auction-inner">
                        <div class="auction-thumb">
                            <a href=""><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/auction/trending/auction-1.png" alt="trending"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h5 class="title"><a href="">3 days 2 nights Trip for 2 to <strong> mombasa</strong></a></h5>
                            <div class="item-information">
                                <ul>
                                    <li><span>Paybill</span>369780</li>
                                    <li><span>Account</span>2G1WG5EK3B245</li>
                                </ul>
                                <ul>
                                    <li><span>Worth</span> Ksh 30,000</li>
                                    <li><span>Winners</span>1 Lucky winner</li>
                                </ul>
                            </div>
                            <div class="p-2">
                                <div class="pt-1">
                                    <input type="text" class="form-control form-control-sm required" name="bid[msisdn]" placeholder="Your mobile">
                                </div>
                                <div class="pt-1">
                                    <input type="number" class="form-control form-control-sm required" name="bid[msisdn]" placeholder="Your Bid">
                                </div>
                            </div>
                        </div>
                        <div class="auction-bidding">
                            <div class="countdown">
                                <div id="bid_counter3"></div>
                            </div>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Bid Starts from</div>
                                    <div class="amount">Ksh 100.00</div>
                                </div>
                            </div>
                            <div class="bids-area">
                                <!-- Total Bids : <span class="total-bids">130 Bids</span> -->
                            </div>
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12">
                <div class="auction-item-6">
                    <div class="auction-inner">
                        <div class="auction-thumb">
                            <a href=""><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/auction/trending/auction-2.jpg" alt="trending"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h5 class="title"><a href=""><strong>Nairobi National park</strong> trip for 2 </a></h5>
                            <div class="item-information">
                                <ul>
                                    <li><span>Paybill</span>123456</li>
                                    <li><span>Account</span>2G1WG5EK3B</li>
                                </ul>
                                <ul>
                                    <li><span>Worth</span>Ksh. 6000</li>
                                    <li><span>Winners</span>2 Lucky Winners</li>
                                </ul>
                            </div>
                            <div class="p-2">
                                <div class="pt-1">
                                    <input type="text" class="form-control form-control-sm required" name="bid[msisdn]" placeholder="Your mobile">
                                </div>
                                <div class="pt-1">
                                    <input type="number" class="form-control form-control-sm required" name="bid[msisdn]" placeholder="Your Bid">
                                </div>
                            </div>
                        </div>
                        <div class="auction-bidding">
                            <div class="countdown">
                                <div id="bid_counter4"></div>
                            </div>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Bid Starts from</div>
                                    <div class="amount">Ksh. 30</div>
                                </div>
                            </div>
                            <div class="bids-area">
                                <!-- Total Bids : <span class="total-bids">130 Bids</span> -->
                            </div>
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12">
                <div class="auction-item-6">
                    <div class="auction-inner">
                        <div class="auction-thumb">
                            <a href=""><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/auction/trending/auction-3.jpg" alt="trending"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h5 class="title"><a href=""> <strong>A Valentine's dinner</strong> for 2 at 5 star Hotel</a></h5>
                            <div class="item-information">
                                <ul>
                                    <li><span>Paybill</span>1234567</li>
                                    <li><span>Account</span>2G1WG5EK3B</li>
                                </ul>
                                <ul>
                                    <li><span>Worth</span>Ksh. 5000</li>
                                    <li><span>Winners</span>3 Lucky winners</li>
                                </ul>
                            </div>
                            <div class="p-2">
                                <div class="pt-1">
                                    <input type="text" class="form-control form-control-sm required" name="bid[msisdn]" placeholder="Your mobile">
                                </div>
                                <div class="pt-1">
                                    <input type="number" class="form-control form-control-sm required" name="bid[msisdn]" placeholder="Your Bid">
                                </div>
                            </div>
                        </div>
                        <div class="auction-bidding">
                            <div class="countdown">
                                <div id="bid_counter5"></div>
                            </div>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Bid Starts from</div>
                                    <div class="amount">Ksh. 30</div>
                                </div>
                            </div>
                            <div class="bids-area">
                                <!-- Total Bids : <span class="total-bids">130 Bids</span> -->
                            </div>
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12">
                <div class="auction-item-6">
                    <div class="auction-inner">
                        <div class="auction-thumb">
                            <a href=""><img src="<?= Yii::$app->request->baseUrl ?>/themes/images/auction/trending/auction-4.jpg" alt="trending"></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h5 class="title"><a href=""><strong>A Valentine's dinner</strong> for 2 at 3 star Hotel</a></h5>
                            <div class="item-information">
                                <ul>
                                    <li><span>Paybill</span>369780</li>
                                    <li><span>Account</span>2G1WG5EK3B245</li>
                                </ul>
                                <ul>
                                    <li><span>Worth</span> Ksh 5,000</li>
                                    <li><span>Winners</span>4 Lucky winner</li>
                                </ul>
                            </div>
                            <div class="p-2">
                                <div class="pt-1">
                                    <input type="text" class="form-control form-control-sm required" name="bid[msisdn]" placeholder="Your mobile">
                                </div>
                                <div class="pt-1">
                                    <input type="number" class="form-control form-control-sm required" name="bid[msisdn]" placeholder="Your Bid">
                                </div>
                            </div>
                        </div>
                        <div class="auction-bidding">
                            <div class="countdown">
                                <div id="bid_counter6"></div>
                            </div>
                            <div class="bid-amount">
                                <div class="icon">
                                    <i class="flaticon-auction"></i>
                                </div>
                                <div class="amount-content">
                                    <div class="current">Bid Starts from</div>
                                    <div class="amount">Ksh 20.00</div>
                                </div>
                            </div>
                            <div class="bids-area">
                                <!-- Total Bids : <span class="total-bids">130 Bids</span> -->
                            </div>
                            <a href="#0" class="custom-button">Submit a bid</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Trending Section Ends Here =============-->


<!--============= Call In Section Starts Here =============-->
<section class="call-in-section padding-bottom" id="cont">
    <div class="container">
        <div class="call-wrapper cl-white bg_img" data-background="<?= Yii::$app->request->baseUrl ?>/themes/images/call-in/call-bg.png">
            <div class="section-header">
                <h3 class="title">Register for Free & Start Bidding Now!</h3>
                <p>From diani trips to dubai, we have it all.</p>
            </div>
            <a href="sign-up.html" class="custom-button white">Register</a>
        </div>
    </div>
</section>
<!--============= Call In Section Ends Here =============-->




<!-- </div> -->