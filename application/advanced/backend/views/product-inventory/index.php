<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductInventorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Inventory Page';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productinventory-index">

    <p align="center">
        <?= Html::a('Add Product', ['create'], ['class' => 'btn btn-success','accesskey' => 'a']) ?>
        <?= Html::a('Manage Inventory', ['manage-product-inventory/index'], ['class' => 'btn btn-danger','accesskey' => 'm']) ?>   
    </p><br>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],
        [
          'attribute' => 'name',
           'format' => 'raw',
           'value'=>function ($data) {
           return Html::a(Html::encode($data->name), array('view', 'id'=>$data->id, 'supplier_id'=>$data->supplier_id));

         },
               ],
            [
                'attribute'=>'supplier_id',
                'value'=>'supplier.name',
            ],
            //'id',
            //'name',
           // 'description',
            'qoh',
            'items_sold',
            // 'serial_no',
            // 'price',
            'status',
            // 'create_date',
            // 'supplier_id',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p align="right">
        <?= Html::a('Back to Home', ['site/index'], ['class' => 'btn btn-primary','accesskey' => 'h']) ?>   
    </p>
    
</div>
