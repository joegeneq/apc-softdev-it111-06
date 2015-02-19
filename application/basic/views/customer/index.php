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

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

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
