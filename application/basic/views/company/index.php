<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CompanySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List of Companies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-index">

    <p align="center">
        <?= Html::a('Add Company', ['create'], ['class' => 'btn btn-success']) ?>
         <?= Html::a('Manage Company', ['/manage-company/index'], ['class' => 'btn btn-danger']) ?>
    </p>

    <h1 align="center"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Name',
            'Address',
            'ContactNo',

            //  ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
