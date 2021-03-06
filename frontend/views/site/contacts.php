<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model frontend\models\Contacts */
/* @var $form ActiveForm */

$userId = user::find()->where(['id' => Yii::$app->user->id])->one();
?>
<section class="account-section padding-bottom" style="padding-top: 40%;">
    <div class="container">
        <div class="account-wrapper mt--100 mt-lg--440">
            <div class="left-side">
                <div class="section-header">
                    <h2 class="title">HI, THERE</h2>
                    <p>Login or Create account Here</p>
                </div>
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'userId')->hiddenInput(['value' => $userId->id, 'readonly' => true])->label(false) ?>

                <?= $form->field($model, 'userId')->textInput() ?>

                <?= $form->field($model, 'contact')->textInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
            <div class="right-side cl-white">
                <div class="section-header mb-0">
                    <h3 class="title mt-0">NEW HERE?</h3>
                    <p>Enter your mobile number to proceed</p>
                </div>
            </div>
        </div>
    </div>
</section>