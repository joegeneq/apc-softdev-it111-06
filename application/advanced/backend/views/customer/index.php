<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Customers Page';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">
    <p><h3>Instructions:</h3></p>
    <p>Press Alt + A, to add a new customer<br></p>
    <p>Press Alt + V, to view Contact Persons<br></p>
    <p>Press Alt + M, to Manage Customers<br></p>
    <p>Press Alt + H, to return to Home Page<br></p>

    <p align="center">
        <?= Html::a('Add Customer', ['create'], ['class' => 'btn btn-success','accesskey' => 'a']) ?>
        <?= Html::a('View Contact Persons', ['/customercontact/index'], ['class' => 'btn btn-primary','accesskey' => 'v']) ?>
         <?= Html::a('Manage Customer', ['/manage-customer/index'], ['class' => 'btn btn-danger','accesskey' => 'm']) ?>
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
            //'house_no',
            //'street',
            // 'area',
             'city',
            // 'zip_code',
            // 'country',
             'email:email',
            // 'create_date',
             //'update_date',
            // 'created_by',
             //'updated_by',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<p align="right">
        <?= Html::a('Back to Home', ['/site/index'], ['class' => 'btn btn-primary','accesskey' => 'h']) ?>
</p>


</div>
