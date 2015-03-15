<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\controllers\GeneratedOrderController;


/* @var $this yii\web\View */
/* @var $searchModel app\models\generatedOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Generated Orders';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="generated-order-index">

    <h1>Transactions List</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            [
            'attribute' => 'customer_id',
            'value' => 'customer.name',
            ],

            [
            'attribute' => 'productinventory_id',
            'value' => 'productinventory.name',
            ],
           // 'id',
            'date',
            'status',
            'num_items',
            'amount',
            'discount',
           

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
