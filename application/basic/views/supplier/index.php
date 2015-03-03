<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Suppliers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplier-index">

	<p align="center">
        <?= Html::a('Create Supplier', ['create'], ['class' => 'btn btn-success']) ?>
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
            'ContactNo',
            'ContactPerson',
            'HouseNo',
            // 'Street',
            // 'Area',
            // 'City',
            // 'ZipCode',
            // 'Country',
            // 'Email:email',
            // 'CreateDate',
            // 'UpdateDate',
            // 'CreatedBy',
            // 'UpdatedBy',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
