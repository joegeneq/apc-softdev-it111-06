<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\productinventory */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Productinventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productinventory-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID' => $model->ID, 'Supplier_ID' => $model->Supplier_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID' => $model->ID, 'Supplier_ID' => $model->Supplier_ID], [
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
            'ID',
            'Name',
            'Description',
            'QoH',
            'SerialNo',
            'Price',
            'Status',
            'CreateDate',
            'UpdateDate',
            'CreatedBy',
            'UpdatedBy',
            'Supplier_ID',
        ],
    ]) ?>

</div>
