<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\generatedOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Generated Orders';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="generated-order-index">

    <h1 align="center">Generated Orders</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],
 [
            'attribute' => 'id',
            'format' => 'raw',
            'value'=>function ($data) {
           return Html::a(Html::encode($data->id), array('view', 'id'=>$data->id, 'productinventory_id'=>$data->productinventory_id));
        },
           ],
            [
            'attribute' => 'supplier_id',
            'value' => 'supplier.name',
            ],
            [
            'attribute' => 'productinventory_id',
            'value' => 'productinventory.name',
            ],

            //'id',
            'date',
            'qty',
            
           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
