<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ListingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$username = \Yii::$app->user->identity->username;
?>
<div class="container" style="margin: 12%">

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'listingId',
            'worth',
            'winner',
            'userId',
            'title',
            'paybill',
            'accountNo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>