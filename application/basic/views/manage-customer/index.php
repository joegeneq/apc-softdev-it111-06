<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\manageCustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-customer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Manage Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Name',
            'Address',
            'ContactNo',
            'Country',
            // 'ZipCode',
            // 'CreateDate',
            // 'UpdateDate',
            // 'Company_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
