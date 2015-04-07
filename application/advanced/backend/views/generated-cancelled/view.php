<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\generatedCancelled */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Generated Cancelleds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="generated-cancelled-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'productinventory_id' => $model->productinventory_id, 'customer_id' => $model->customer_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'productinventory_id' => $model->productinventory_id, 'customer_id' => $model->customer_id], [
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
            'status',
            'num_items',
            'total_amount',
            'productinventory_id',
            'customer_id',
        ],
    ]) ?>

</div>