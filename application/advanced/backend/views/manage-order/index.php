<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\manageOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Orders';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-order-index">
        <center>
    <p>
        <?= Html::a('Add Order', ['order/create'], ['class' => 'btn btn-success','accesskey' => 'a']) ?>
    </p>

    <h1><?= Html::encode($this->title) ?></h1></center>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'date',
            'status',
            'num_items',
            'amount',
            // 'discount',
            // 'productinventory_id',
            // 'customer_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<p align="right">
        <?= Html::a('Back to Order', ['/order/index'], ['class' => 'btn btn-primary','accesskey' => 'b']) ?>
</p>
</div>
