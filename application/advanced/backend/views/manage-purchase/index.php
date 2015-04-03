<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\managePurchaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Purchases';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-purchase-index">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'date',
            'status',
            'num_items',
            'total_amount',
            // 'productinventory_id',
            // 'customer_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <p align="right">
        <?= Html::a('Back to Purchases', ['purchase/index'], ['class' => 'btn btn-primary']) ?>
    </p>
</div>
