<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\manageProductInventorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Product Inventories';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-product-inventory-index">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'description',
            'qoh',
            'items_sold',
             'serial_no',
             'price',
             'status',
            // 'create_date',
            // 'supplier_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<p align="right">
        <?= Html::a('Back to PRoduct Inventory', ['/product-inventory/index'], ['class' => 'btn btn-primary','accesskey' => 'b']) ?>
</p>
</div>
