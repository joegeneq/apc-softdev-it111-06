<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List of Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">


    <center><p>
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Manage Orders', ['manage-order/index'], ['class' => 'btn btn-danger']) ?>
    </p><br>


    <h1><?= Html::encode($this->title) ?></h1>
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
            
           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p align="right">
                <?= Html::a('Back to Home', ['site/index'], ['class' => 'btn btn-primary']) ?>
            </p>
</div>
