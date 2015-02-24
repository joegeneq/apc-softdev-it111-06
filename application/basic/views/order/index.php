<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

	<p align="center">
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Manage Orders', ['/manage-order/index'], ['class' => 'btn btn-danger']) ?>
    </p>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Date',
            'Status',
            'ItemQty',
            'Customer_ID',
            // 'Item_ID',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
