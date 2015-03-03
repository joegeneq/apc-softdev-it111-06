<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomercontactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customercontacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customercontact-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customercontact', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Name',
            'ContactNo',
            'Email:email',
            'CreateDate',
            // 'UpdateDate',
            // 'CreatedBy',
            // 'UpdatedBy',
            // 'Customer_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
