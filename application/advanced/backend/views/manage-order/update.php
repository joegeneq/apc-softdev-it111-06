<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\manageOrder */

$this->title = 'Update Manage Order: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Manage Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'supplier_id' => $model->supplier_id, 'productinventory_id' => $model->productinventory_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="manage-order-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
