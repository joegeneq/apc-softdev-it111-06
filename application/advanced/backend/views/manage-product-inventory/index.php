<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\manageProductinventorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Productinventories';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-productinventory-index">
  <center>
    <p>
        <?= Html::a('Add Product Inventory', ['product-inventory/create'], ['class' => 'btn btn-success','accesskey' => 'a']) ?>
    </p>

    <h1><?= Html::encode($this->title) ?></h1></center>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           //['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'name',
            'description',
            'qoh',
            'items_sold',
         'serial_no',
            // 'price',
            // 'status',
            // 'create_date',
            // 'supplier_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<p align="right">
        <?= Html::a('Back to Product Inventory', ['/product-inventory/index'], ['class' => 'btn btn-primary','accesskey' => 'b']) ?>
</p>
</div>
