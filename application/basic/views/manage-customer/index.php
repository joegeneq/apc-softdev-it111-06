<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\manageCustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-customer-index">

	<p align="center">
        <?= Html::a('View Customers', ['customer/index'], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Create Customer', ['customer/create'], ['class' => 'btn btn-primary']) ?>
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
