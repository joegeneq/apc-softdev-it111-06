<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\managePurchase */

$this->title = 'Update Purchase Record: ' . ' ' . $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Manage Purchases', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'productinventory_id' => $model->productinventory_id, 'customer_id' => $model->customer_id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="manage-purchase-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
