<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-index">

	<p align="center">
        <?= Html::a('Add Item', ['create'], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Manage Items', ['/manage-item/index'], ['class' => 'btn btn-danger']) ?>
    </p>

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Name',
            'QoH',
            'Unit',
            'Price',
            // 'SerialNo',
            // 'Status',
            // 'CreateDate',
            // 'UpdateDate',
            // 'Supplier_ID',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
