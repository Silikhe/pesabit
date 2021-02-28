<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

// $this->title = $name;
?>
<!--============= Error Section Starts Here =============-->
<div class="error-section p-5 padding-bottom bg_img" data-background="assets/images/error-bg.png">
    <div class="container">
        <div class="error-wrapper">
            <div class="error-thumb">
                <img src="<?= Yii::$app->request->baseUrl ?>/themes/images/error.png" alt="error">
            </div>
            <h4 class="title">Return to the <a href="index.html">homepage</a></h4>
        </div>
    </div>
</div>
<!--============= Error Section Ends Here =============-->