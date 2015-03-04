<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List of Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">

    <p align="center">
        <?= Html::a('Add Customer', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Add Contact Person', ['/customercontact/create'], ['class' => 'btn btn-success']) ?>
         <?= Html::a('Manage Customer', ['/manage-customer/index'], ['class' => 'btn btn-danger']) ?>
    </p>

    <h1 align="center"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'contact_no',
            //'house_no',
            //'street',
            // 'area',
             'city',
            // 'zip_code',
            // 'country',
             'email:email',
            // 'create_date',
             //'update_date',
            // 'created_by',
             //'updated_by',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<p align="right">
        <?= Html::a('Back to Inventory', ['/site/index'], ['class' => 'btn btn-primary']) ?>
</p>


</div>
