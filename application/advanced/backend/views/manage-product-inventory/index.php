<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\manageProductInventorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Product Inventories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-product-inventory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Manage Product Inventory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
            // 'supplier_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
