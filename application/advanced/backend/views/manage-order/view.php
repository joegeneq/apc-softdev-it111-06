<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\manageOrder */

$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Manage Orders', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-order-view">

    <h1><?= Html::encode($this->title) ?></h1>

     <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'supplier_id' => $model->supplier_id, 'productinventory_id' => $model->productinventory_id], ['class' => 'btn btn-primary','accesskey'=>'u']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'supplier_id' => $model->supplier_id, 'productinventory_id' => $model->productinventory_id], [
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
            'id',
            'date',
            'qty',
            'price',
            'supplier.name',
            'productinventory.name',
        ],
    ]) ?>
    <p align="left">
    <?= Html::a('Back to Manage Orders', ['manage-order/index'], ['class' => 'btn btn-primary','accesskey'=>'b']) ?>
    </p>
</div>
