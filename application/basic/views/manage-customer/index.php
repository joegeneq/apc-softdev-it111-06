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
        <?= Html::a('Add Customer', ['/customer/create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('View Customer', ['/customer/index'], ['class' => 'btn btn-success']) ?>
    </p>

    <h1 align="center"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_customer',
            'customer_firstName',
            'customer_lastName',
            'customer_address',
            'customer_contact',
            // 'customer_type',
            // 'customer_country',
            // 'customer_zipCode',
            // 'customer_createDate',
            // 'customer_updateDate',
            // 'Company_id_company',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
