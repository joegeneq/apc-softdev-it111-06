<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\manageOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-order-index">

    <center><h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?></center>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
            'attribute' => 'customer_id',
            'value' => 'customer.name',
            ],

            [
            'attribute' => 'productinventory_id',
            'value' => 'productinventory.name',
            ],
            'id',
            'date',
            'status',
            'num_items',
            'amount',
            // 'discount',
             

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<p align="right">
                <?= Html::a('Back to Orders', ['order/index'], ['class' => 'btn btn-primary']) ?>
            </p>
</div>
