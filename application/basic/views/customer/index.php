<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customer Lists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">

    <p align="center">
        <?= Html::a('Add Customer', ['create'], ['class' => 'btn btn-success']) ?>
        
    </p>

    <h1 align="center"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID',
            'Name',
            'ContactNo',
            //'HouseNo',
            //'Street',
            // 'Area',
            // 'City',
            // 'ZipCode',
            // 'Country',
            // 'Email:email',
             //'CreateDate',
             'UpdateDate',
            // 'CreatedBy',
             'UpdatedBy',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
