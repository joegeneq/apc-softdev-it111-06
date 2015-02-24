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
        <?= Html::a('View Orders', ['order/index'], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Create Order', ['order/create'], ['class' => 'btn btn-primary']) ?>
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
