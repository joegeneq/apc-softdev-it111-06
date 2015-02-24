<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">

	<p align="center">
        <?= Html::a('Create Customer', ['create'], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Manage Customers', ['/manage-customer/index'], ['class' => 'btn btn-danger']) ?>
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
            'Address',
            'ContactNo',
            'Country',
            // 'ZipCode',
            // 'CreateDate',
            // 'UpdateDate',
            // 'Company_ID',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
