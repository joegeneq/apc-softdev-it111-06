<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\manageSupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Suppliers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-supplier-index">

     <p align="center">
        <?= Html::a('Add Supplier', ['/supplier/create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('View Supplier', ['/supplier/index'], ['class' => 'btn btn-success']) ?>
    </p>

    <h1 align="center"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_supplier',
            'supplier_name',
            'supplier_address',
            'supplier_contact',
            'supplier_createDate',
            // 'supplier_updateDate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
