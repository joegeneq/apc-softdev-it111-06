<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\manageSupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Suppliers';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-supplier-index">
<center>


    <h1><?= Html::encode($this->title) ?></h1></center>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'contact_no',
            'contact_person',
            //'house_no',
            // 'street',
             'city',
            // 'zip_code',
             'country',
             'email:email',
            // 'create_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<p align="right">
        <?= Html::a('Back to Suppliers Page', ['/supplier/index'], ['class' => 'btn btn-primary','accesskey' => 'b']) ?>
</p>
</div>
