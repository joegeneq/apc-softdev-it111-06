<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PurchaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Purchases Page';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchase-index">

    <center><p>
        <?= Html::a('Add Purchase Record', ['create'], ['class' => 'btn btn-success','accesskey' => 'a']) ?>
        <?= Html::a('Manage Purchases', ['manage-order/index'], ['class' => 'btn btn-danger','accesskey' => 'm']) ?>
    </p><br>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    </center>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
             [
            'attribute' => 'id',
            'format' => 'raw',
            'value'=>function ($data) {
           return Html::a(Html::encode($data->id), array('view', 'id'=>$data->id, 'customer_id'=>$data->customer_id, 'productinventory_id'=>$data->productinventory_id));
        },
           ],
            [
            'attribute' => 'customer_id',
            'value' => 'customer.name',
            ],
            [
            'attribute' => 'productinventory_id',
            'value' => 'productinventory.name',
            ],
            //'id',
            'date',
            'status',
            'num_items',
            'total_amount',
            // 'productinventory_id',
            // 'customer_id',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p align="right">
        <?= Html::a('Generate Report', ['generated-purchase/index'], ['class' => 'btn btn-success','accesskey' => 'h']) ?>
        <?= Html::a('Back to Home', ['site/index'], ['class' => 'btn btn-primary','accesskey' => 'h']) ?>
    </p>
</div>
