<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\manageSupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Suppliers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="managesupplier-index">

    <center><h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?></center>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'contact_no',
            'contact_person',
            'house_no',
            // 'street',
            // 'area',
            // 'city',
            // 'zip_code',
            // 'country',
            // 'email:email',
            // 'create_date',
            // 'update_date',
            // 'created_by',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p align="right">
        <?= Html::a('Back to Suppliers', ['supplier/index'], ['class' => 'btn btn-primary']) ?>
    </p>
</div>
