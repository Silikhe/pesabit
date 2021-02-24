<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\models\User;

// $this->title = 'Signup';
// $this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div> -->


<div class="hero-section">

    <div class="bg_img hero-bg bottom_center" data-background="<?= Yii::$app->request->baseUrl ?>/themes/images/banner/hero-bg.png"></div>
</div>
<!--============= Hero Section Ends Here =============-->


<!--============= Account Section Starts Here =============-->
<!-- <section class="account-section padding-bottom">
    <div class="container">
        <div class="account-wrapper mt--100 mt-lg--440">
            <div class="left-side">
                <div class="section-header">
                    <h2 class="title">HI, THERE</h2>
                    <p>Login or Create account Here</p>
                </div>
                <form class="login-form">
                    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                    <div class="form-group mb-30">
                        <label for="login-email"><i class="fas fa-phone"></i></label>
                        <?= $form->field($model, 'username')->textInput(['autofocus' => false]) ?>
                    </div>
                    <div class="form-group mb-30">
                        <label for="login-email"><i class="fas fa-phone"></i></label>
                        <?= $form->field($model, 'email') ?>
                    </div>
                    <div class="form-group mb-30">
                        <label for="login-email"><i class="fas fa-phone"></i></label>
                        <?= $form->field($model, 'password')->passwordInput() ?>
                    </div>
                    <div class="form-group mb-0">
                        <?= Html::submitButton('Proceed', ['class' => 'custom-button', 'name' => 'signup-button']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
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

<div class="container">
    <div class="site-signup">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Please fill out the following fields to signup:</p>

        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>


                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>