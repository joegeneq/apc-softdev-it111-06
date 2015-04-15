<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <center><p>
        <?= Html::a('Add Order', ['create'], ['class' => 'btn btn-success','accesskey' => 'a']) ?>
        <?= Html::a('Manage Orders', ['manage-order/index'], ['class' => 'btn btn-danger','accesskey' => 'm']) ?>
    </p><br>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    </center>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
           //['class' => 'yii\grid\SerialColumn'],
             [
            'attribute' => 'id',
            'format' => 'raw',
            'value'=>function ($data) {
           return Html::a(Html::encode($data->id), array('view', 'id'=>$data->id, 'supplier_id'=>$data->supplier_id, 'productinventory_id'=>$data->productinventory_id));
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
            //price
        

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p align="right">
        <?= Html::a('Generate Report', ['generated-order/index'], ['class' => 'btn btn-success','accesskey' => 'g']) ?>
        <?= Html::a('Back to Home', ['site/index'], ['class' => 'btn btn-primary','accesskey' => 'h']) ?>
    </p>
</div>
