<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\manageCustomercontactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Contact Person';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-customercontact-index">


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
            'email:email',
            //'create_date',
            // 'update_date',
            // 'created_by',
            // 'updated_by',
             [
              'attribute' => 'customer_id',
              'value' => 'customer.name',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<p align="right">
     <?= Html::a('Back to Contact Persons Page', ['/customercontact/index'], ['class' => 'btn btn-primary']) ?>
</p>

</div>
