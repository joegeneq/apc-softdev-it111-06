<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomercontactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contact Persons Page';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customercontact-index">
    <p><h3>Instructions:</h3></p>
    <p>Press Alt + A, to add a new Contact Person<br></p>
    <p>Press Alt + M, to Manage Contact Persons<br></p>
    <p>Press Alt + B, to return to Customers Page<br></p>
    <p>Press Alt + H, to return to Home Page<br></p>

    <p align="center">
        <?= Html::a('Add Contact Person', ['create'], ['class' => 'btn btn-success' ,'accesskey' => 'a']) ?>
        <?= Html::a('Manage Contact Person', ['/manage-customercontact/index'], ['class' => 'btn btn-danger','accesskey' => 'm']) ?>
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
        <?= Html::a('Back to Customers Page', ['customer/index'], ['class' => 'btn btn-primary','accesskey' => 'b']) ?>
        <?= Html::a('Back to Home Page', ['site/index'], ['class' => 'btn btn-primary','accesskey' => 'h']) ?>
</p>

</div>
