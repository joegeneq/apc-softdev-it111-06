<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\managePurchase */

$this->title = 'Create Manage Purchase';
$this->params['breadcrumbs'][] = ['label' => 'Manage Purchases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-purchase-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
