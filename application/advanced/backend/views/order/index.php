<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Orders Page';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">
    <p><h3>Instructions:</h3></p>
    <p>Press Alt + A, to Add a new Order<br></p>
    <p>Press Alt + M, to Manage Orders<br></p>
    <p>Press Alt + H, to return to Home Page<br></p>

    <center><p>
        <?= Html::a('Add Order', ['create'], ['class' => 'btn btn-success','accesskey' => 'a']) ?>
        <?= Html::a('Manage Orders', ['manage-order/index'], ['class' => 'btn btn-danger','accesskey' => 'm']) ?>
    </p><br>


    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?></center>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
     //   'filterModel' => $searchModel,
        'columns' => [
         //   ['class' => 'yii\grid\SerialColumn'],
            
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
            // 'discount',
            
           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p align="right">
        <?= Html::a('Generate Orders', ['generated-order/index'], ['class' => 'btn btn-success','accesskey' => 'h']) ?>
        <?= Html::a('Back to Home', ['site/index'], ['class' => 'btn btn-primary','accesskey' => 'h']) ?>
    </p>
</div>
