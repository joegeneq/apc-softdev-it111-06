<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\generatedPendingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Generated Pendings';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="generated-pending-index">

    <h1 align="center">Generated Purchases</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],
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

           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
