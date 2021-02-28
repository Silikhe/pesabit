<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Listing */

$this->title = 'Update Listing: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Listings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->listingId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="listing-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
