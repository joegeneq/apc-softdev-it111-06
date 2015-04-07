<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\manageProductinventorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Inventory Page';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-productinventory-index">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],
    [
                'attribute'=>'supplier_id',
                'value'=>'supplier.name',
            ],
           // 'id',
            'name',
         //   'description',
            'qoh',
            'items_sold',
          //   'items_remaining',
           //  'price',
          //   'status',
            // 'create_date',
            // 'update_date',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p align="right">
        <?= Html::a('Back to Inventory', ['/productinventory/index'], ['class' => 'btn btn-primary','accesskey' => 'b']) ?>
    </p>
</div>
