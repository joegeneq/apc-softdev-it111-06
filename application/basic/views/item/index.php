<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List of Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-index">


    <p align="center">
        <?= Html::a('Add Item', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Manage Items', ['view'], ['class' => 'btn btn-danger']) ?>
    </p><br>
    <center><h1><?= Html::encode($this->title) ?></h1></center>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_item',
            'item_name',
           // 'item_qty',
           // 'item_unit',
            'item_price',
             'item_serialNo',
             'item_status',
            // 'item_createDate',
            // 'item_updateDate',
            // 'Sale_id_sale',
            // 'Order_id_order',
            // 'Supplier_id_supplier',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
