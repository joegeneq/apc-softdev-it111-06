<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\manageOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Orders';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-order-index">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'date',
            'qty',
            'supplier_id',
            'productinventory_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<p align="right">
        <?= Html::a('Back to Order', ['/order/index'], ['class' => 'btn btn-primary']) ?>
    </p>
</div>
