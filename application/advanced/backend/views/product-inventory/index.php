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
            [
                'attribute'=>'supplier_id',
                'value'=>'supplier.name',
            ],
            'id',
            'name',
            'description',
            'qoh',
            'serial_no',
            // 'price',
            // 'status',
            // 'create_date',
            // 'update_date',
            // 'created_by',
            // 'updated_by',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
