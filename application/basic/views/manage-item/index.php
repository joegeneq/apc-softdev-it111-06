<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\manageItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Manage Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Name',
            'Qty',
            'Unit',
            'Price',
            // 'SerialNo',
            // 'Status',
            // 'CreateDate',
            // 'UpdateDate',
            // 'Supplier_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
