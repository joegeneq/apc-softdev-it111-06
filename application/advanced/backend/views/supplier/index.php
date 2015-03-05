<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List of Suppliers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplier-index">

    <p align="center">
        <?= Html::a('Add Supplier', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Manage Suppliers', ['manage-supplier/index'], ['class' => 'btn btn-danger']) ?>   
    </p><br>

    <center><h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?></center>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'contact_no',
            'contact_person',
            'house_no',
            // 'street',
            // 'area',
            // 'city',
            // 'zip_code',
            // 'country',
            // 'email:email',
            // 'create_date',
            // 'update_date',
            // 'created_by',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p align="right">
        <?= Html::a('Back to Home', ['site/index'], ['class' => 'btn btn-primary']) ?>  
    </p>
</div>
