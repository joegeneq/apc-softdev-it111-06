<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\manageProductInventory */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Manage Product Inventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-product-inventory-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'supplier_id' => $model->supplier_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'supplier_id' => $model->supplier_id], [
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
            'name',
            'description',
            'qoh',
            'items_sold',
            'serial_no',
            'price',
            'status',
            'create_date',
            'supplier.name',
        ],
    ]) ?>
    <p align="left">
    <?= Html::a('Back to Manage Product Inventory', ['product-inventory/index'], ['class' => 'btn btn-primary','accesskey'=>'b']) ?>
    </p> 
</div>
