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

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Manage Sale', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

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