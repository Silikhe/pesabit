<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Listing */

$this->title = 'Dashboard';
// $this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<!--============= Hero Section Starts Here =============-->
<div class="hero-section style-2 pb-lg-400">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="#0">My Account</a>
            </li>
            <li>
                <span>Dashboard</span>
            </li>
        </ul>
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="<?= Yii::$app->request->baseUrl ?>/themes/images/banner/hero-bg.png"></div>
</div>
<!--============= Hero Section Ends Here =============-->


<!--============= Dashboard Section Starts Here =============-->
<section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-7 col-lg-4">
                <div class="dashboard-widget mb-30 mb-lg-0">
                    <div class="user">
                        <!-- <div class="thumb-area">
                                <div class="thumb">
                                    <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/dashboard/user.png" alt="user">
                                </div>
                                <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                                <input type="file" id="profile-pic" class="d-none">
                            </div> -->
                        <div class="content">
                            <h5 class="title"><a href="#0">0712345678</a></h5>
                            <!-- <span class="username">john@gmail.com</span> -->
                        </div>
                    </div>
                    <ul class="dashboard-menu">
                        <li>
                            <a href="#0" class="active"><i class="flaticon-dashboard"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="my-bid.html"><i class="flaticon-auction"></i>My Bids</a>
                        </li>
                        <li>
                            <a href="winning-bids.html"><i class="flaticon-best-seller"></i>Winning Bids</a>
                        </li>
                        <li>
                            <a href="winning-bids.html"><i class="flaticon-right-arrow"></i>Log out</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="dashboard-widget mb-40">
                    <div class="dashboard-title mb-30">
                        <h5 class="title">My Activity</h5>
                    </div>
                    <div class="row justify-content-center mb-30-none">
                        <div class="col-md-4 col-sm-6">
                            <div class="dashboard-item">
                                <div class="thumb">
                                    <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/dashboard/01.png" alt="dashboard">
                                </div>
                                <div class="content">
                                    <h2 class="title"><span class="counter">80</span></h2>
                                    <h6 class="info">Active Bids</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="dashboard-item">
                                <div class="thumb">
                                    <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/dashboard/02.png" alt="dashboard">
                                </div>
                                <div class="content">
                                    <h2 class="title"><span class="counter">15</span></h2>
                                    <h6 class="info">Items Won</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Dashboard Section Ends Here =============-->