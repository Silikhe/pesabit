<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ListingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="listing-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'listingId') ?>

    <?= $form->field($model, 'worth') ?>

    <?= $form->field($model, 'winner') ?>

    <?= $form->field($model, 'bidId') ?>

    <?= $form->field($model, 'imageId') ?>

    <?php // echo $form->field($model, 'userId') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'paybill') ?>

    <?php // echo $form->field($model, 'accountNo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
