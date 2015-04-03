<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\manageSupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Suppliers';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-supplier-index">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'contact_no',
            'contact_person',
           // 'house_no',
            // 'street',
             'city',
            // 'zip_code',
             'country',
             'email:email',
            // 'create_date',
            // 'update_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p align="right">
        <?= Html::a('Back to Suppliers', ['supplier/index'], ['class' => 'btn btn-primary']) ?>
    </p>
</div>
