<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductInventorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productinventories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productinventory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Productinventory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Name',
            'Description',
            'QoH',
            'SerialNo',
            // 'Price',
            // 'Status',
            // 'CreateDate',
            // 'UpdateDate',
            // 'CreatedBy',
            // 'UpdatedBy',
            // 'Supplier_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
