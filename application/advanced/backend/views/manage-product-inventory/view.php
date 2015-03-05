<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\manageProductInventory */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Manage Inventory', 'url' => ['index']];
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
            'serial_no',
            'price',
            'status',
            'create_date',
            'update_date',
            'created_by',
            'updated_by',
            'supplier.name',
        ],
    ]) ?>

    <p align="right">
    <?= Html::a('Back to Manage Inventory', ['/manage-product-inventory/index'], ['class' => 'btn btn-primary']) ?>
    </p>
</div>
