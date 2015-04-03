<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\manageCustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Customers';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-customer-index">
    <h1 align="center"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'name',
            'type',
            'contact_no',
           // 'house_no',
            // 'street',
             'city',
            // 'zip_code',
             'country',
             'email:email',
             'contact_person',
            // 'create_date',
            // 'update_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
   <p align="right">
        <?= Html::a('Back to Customer', ['/customer/index'], ['class' => 'btn btn-primary']) ?>
    </p>
</div>
