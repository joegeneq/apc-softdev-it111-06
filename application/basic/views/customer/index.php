<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List of Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="display:none">
	<audio autoplay>
	<source src="audio/CustomersAudio.mp3" type="audio/mpeg">
	Your browser does not support the audio element.
	</audio>
</div>
<div class="customer-index">
        <p align="center">
        <?= Html::a('Add Customer', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Manage Customers', ['/manage-customer/index'], ['class' => 'btn btn-danger']) ?>
    </p><br>
    <h1><center><?= Html::encode($this->title) ?></center></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_customer',
            'customer_firstName',
            'customer_lastName',
          //  'customer_address',
            'customer_contact',
             'customer_type',
             'customer_country',
            // 'customer_zipCode',
            // 'customer_createDate',
            // 'customer_updateDate',
            // 'Company_id_company',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
