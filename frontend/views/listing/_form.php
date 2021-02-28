<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model frontend\models\Listing */
/* @var $form yii\widgets\ActiveForm */

$userId = user::find()->where(['id' => Yii::$app->user->id])->one();
?>


<section class="contact-section padding-bottom p-5" style="margin-top: 45%;">
    <div class="container">
        <div class="contact-wrapper pt-5 padding-bottom mt--100 mt-lg--440">
            <div class="section-header">
                <h2 class="title">Create a listing</h2>
            </div>
            <div class="row p-5">
                <div class="col-xl-12 col-lg-12">
                    <!-- <div class="p-5" id="contact_form"> -->

                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'userId')->hiddenInput(['value' => $userId->id, 'readonly' => true])->label(false) ?>

                    <?= $form->field($model, 'worth')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'winner')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'paybill')->textInput() ?>

                    <?= $form->field($model, 'accountNo')->textInput(['maxlength' => true]) ?>

                    <?= Html::submitButton('List', ['class' => 'custom-button mx-auto']) ?>

                    <?php ActiveForm::end(); ?>
                    <!-- <div class="form-group">
                            <label for="name"><i class="far fa-user"></i></label>
                            <input type="text" placeholder="Your Name" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="name"><i class="fas fa-envelope-open-text"></i></label>
                            <input type="text" placeholder="Enter Your Email ID" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="message" class="message"><i class="far fa-envelope"></i></label>
                            <textarea name="message" id="message" placeholder="Type Your Message"></textarea>
                        </div>
                        <div class="form-group text-center mb-0">
                            <button type="submit" class="custom-button">Send Message</button>
                        </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</section>