<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;
use frontend\models\Bid;
// use kartik\date\DatePicker;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model frontend\models\Bid */
/* @var $form ActiveForm */

$userId = user::find()->where(['id' => Yii::$app->user->id])->one();
?>
<div class="conatiner" style="margin: 15%">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userId')->hiddenInput(['value' => $userId->id, 'readonly' => true])->label(false) ?>
    <?= $form->field($model, 'bidStart')->hiddenInput(['value' => date('yy/m/d')])->label(false) ?>
    <!-- <?= $form->field($model, 'bidEnd')->hiddenInput(['value' => date('yy/m/d')])->label(false) ?> -->
    <?= $form->field($model, 'bidEnd')->widget(
        DatePicker::className(),
        [
            // inline too, not bad
            'inline' => false,
            // modify template for custom rendering
            // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
        ]
    ); ?> -->
    <!-- <?= $form->field($model, 'bidEnd') ?>
    <?= $form->field($model, 'listingId') ?>
    <?= $form->field($model, 'Amount') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- bid -->