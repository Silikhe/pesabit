<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Contacts */
/* @var $form yii\widgets\ActiveForm */
?>

<section class="account-section padding-top padding-bottom" style="margin-top: 350px;">
    <div class="container">
        <div class="account-wrapper mt--100 mt-lg--440">
            <div class="left-side">
                <div class="section-header">
                    <h2 class="title">HI, THERE</h2>
                    <p>Enter contact Here</p>
                </div>
                <!-- <ul class="login-with">
                        <li>
                            <a href="#0"><i class="fab fa-facebook"></i>Log in with Facebook</a>
                        </li>
                        <li>
                            <a href="#0"><i class="fab fa-google-plus"></i>Log in with Google</a>
                        </li>
                    </ul>
                    <div class="or">
                        <span>Or</span>
                    </div> -->
                <form class="login-form">
                    <!-- <?php $form = ActiveForm::begin(); ?>
                    <div class="form-group mb-30">
                        <label for="login-email"><i class="fas fa-phone"></i></label>
                        <input type="text" id="login-email" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" id="login-pass" placeholder="Password">
                            <span class="pass-type"><i class="fas fa-eye"></i></span>
                        </div>
                        <div class="form-group">
                            <a href="#0">Forgot Password?</a>
                        </div>
                    <div class="form-group mb-0">
                        <button type="submit" class="custom-button">PROCEED</button>
                    </div>
                    <?php ActiveForm::end(); ?> -->
                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'userId')->textInput() ?>

                    <?= $form->field($model, 'contact')->textInput() ?>

                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </form>

            </div>
            <div class="right-side cl-white">
                <div class="section-header mb-0">
                    <h3 class="title mt-0">NEW HERE?</h3>
                    <p>Enter your mobile number to proceed</p>
                    <!-- <a href="sign-up.html" class="custom-button transparent">Sign Up</a> -->
                </div>
            </div>
        </div>
    </div>
</section>