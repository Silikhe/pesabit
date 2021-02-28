<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Listing */


\yii\web\YiiAsset::register($this);
?>
<div class="container">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->listingId], ['class' => 'btn custom-button']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->listingId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'listingId',
            'worth',
            'winner',
            'userId',
            'title',
            'paybill',
            'accountNo',
        ],
    ]) ?>

</div>