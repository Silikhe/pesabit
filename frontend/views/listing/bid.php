<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model frontend\models\Bid */
/* @var $form ActiveForm */

$userId = user::find()->where(['id' => Yii::$app->user->id])->one();
?>
<div class="conatiner" style="margin: 20%">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userId')->hiddenInput(['value' => $userId->id, 'readonly' => true])->label(false) ?>
    <?= $form->field($model, 'bidStart') ?>
    <?= $form->field($model, 'bidEnd') ?>
    <?= $form->field($model, 'listingId') ?>
    <?= $form->field($model, 'Amount') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- bid -->