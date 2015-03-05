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
        <?= Html::a('Manage Inventory', ['manage-product-inventory/index'], ['class' => 'btn btn-danger']) ?>   
    </p><br>

    <center><h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?></center>


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
           // 'description',
            'qoh',
            'serial_no',
             'price',
            // 'status',
            // 'create_date',
            // 'update_date',
            // 'created_by',
            // 'updated_by',
            

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p align="right">
        <?= Html::a('Back to Home', ['site/index'], ['class' => 'btn btn-primary']) ?>   
    </p>

</div>
