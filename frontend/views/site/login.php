<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div class="hero-section">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="#0">Pages</a>
            </li>
            <li>
                <span>Sign In</span>
            </li>
        </ul>
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="<?= Yii::$app->request->baseUrl ?>/themes/images/banner/hero-bg.png"></div>
</div>


<section class="account-section padding-bottom">
    <div class="container">
        <div class="account-wrapper mt--100 mt-lg--440">
            <div class="left-side">
                <div class="section-header">
                    <h2 class="title">HI, THERE</h2>
                    <p>Login or Create account Here</p>
                </div>
                <form class="login-form">
                    <div class="form-group mb-30">
                        <label for="login-email"><i class="fas fa-phone"></i></label>
                        <input type="text" id="login-email" placeholder="Phone Number">
                    </div>
                    <div class="form-group mb-0">
                        <button type="submit" class="custom-button">PROCEED</button>
                    </div>
                </form>

            </div>
            <div class="right-side cl-white">
                <div class="section-header mb-0">
                    <h3 class="title mt-0">NEW HERE?</h3>
                    <p>Enter your mobile number to proceed</p>
                </div>
            </div>
        </div>
    </div>
</section> -->

<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div style="color:#999;margin:1em 0">
                If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                <br>
                Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
            </div>

            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>