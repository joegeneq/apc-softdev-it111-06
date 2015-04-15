<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\manageOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Orders Page';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-order-index">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            'id',
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
            // 'price',
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <p align="right">
        <?= Html::a('Back to Orders Page', ['/order/index'], ['class' => 'btn btn-primary','accesskey' => 'b']) ?>
    </p>
</div>
