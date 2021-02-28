<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Images */
/* @var $form ActiveForm */
?>
<div class="images" style="margin-top: 15%;">

    <?php $form = ActiveForm::begin(['id' => 'createimage'], [
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'path')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'listingId') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- images -->