<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\manageProductInventorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Inventory';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-product-inventory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'supplier_id',
                'value'=>'supplier.name',
            ],
            'id',
            'name',
            //'description',
            'qoh',
            'serial_no',
             'price',
            // 'status',
            // 'create_date',
            // 'update_date',
            // 'created_by',
            // 'updated_by',
            // 'supplier_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p align="right">
        <?= Html::a('Back to Product Inventory', ['product-inventory/index'], ['class' => 'btn btn-primary']) ?>
    </p>
</div>
