<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductInventorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Inventory Page';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="productinventory-index">
    <p><h3>Instructions:</h3></p>
    <p>Press Alt + A, to Add a new Product<br></p>
    <p>Press Alt + M, to Manage Inventory<br></p>
    <p>Press Alt + H, to return to Home Page<br></p>

    <p align="center">
        <?= Html::a('Add Product', ['create'], ['class' => 'btn btn-success','accesskey' => 'a']) ?>
        <?= Html::a('Manage Inventory', ['manage-product-inventory/index'], ['class' => 'btn btn-danger','accesskey' => 'm']) ?>   
    </p><br>

    <center><h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?></center>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        
       // 'filterModel' => $searchModel,
        'columns' => [
         //   ['class' => 'yii\grid\SerialColumn'],
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
           // 'id',
            //'name',
           
           // 'description',
            'qoh',
          //  'serial_no',
             'price',
             'status',
            // 'create_date',
            // 'update_date',
            // 'created_by',
            // 'updated_by',
            

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p align="right">
        <?= Html::a('Back to Home', ['site/index'], ['class' => 'btn btn-primary','accesskey' => 'h']) ?>   
    </p>

</div>
