<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Listing */

$this->title = 'Create Listing';

?>
<div class="listing-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>