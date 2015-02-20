<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\manageOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-order-index">
  <p align="center">
        <?= Html::a('Add Order', ['order/create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Add Order', ['order/index'], ['class' => 'btn btn-success']) ?>
    </p>
    <h1 align="center"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_order',
            'order_date',
            'order_status',
            'Customer_id_customer',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
