<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomercontactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List of Contact Persons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customercontact-index">
    <p align="center">
        <?= Html::a('Add Contact Person', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Manage Contact Person', ['/manage-customercontact/index'], ['class' => 'btn btn-danger']) ?>
    </p><br>
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
             //'update_date',
            // 'created_by',
             //'updated_by',
            [
              'attribute' => 'customer_id',
              'value' => 'customer.name',
            ],

           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<p align="right">
        <?= Html::a('Back to Home', ['/site/index'], ['class' => 'btn btn-primary']) ?>
</p>

</div>
