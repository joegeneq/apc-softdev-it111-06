<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\manageSaleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Sales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-sale-index">

	<p align="center">
        <?= Html::a('View Sales', ['sale/index'], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Create Sale', ['sale/create'], ['class' => 'btn btn-primary']) ?>
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
            'ReceiptNo',
            'ItemQty',
            'Customer_ID',
            // 'Item_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
