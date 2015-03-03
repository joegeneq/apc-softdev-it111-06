<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductInventorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Inventory';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productinventory-index">

	<p align="center">
        <?= Html::a('Add Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Name',
            'Description',
            'QoH',
            'SerialNo',
            // 'Price',
            // 'Status',
            // 'CreateDate',
            // 'UpdateDate',
            // 'CreatedBy',
            // 'UpdatedBy',
            // 'Supplier_ID',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
