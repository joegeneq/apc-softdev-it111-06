<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\manageProductinventorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Productinventories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-productinventory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Manage Productinventory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description',
            'qoh',
            'items_sold',
            // 'serial_no',
            // 'price',
            // 'status',
            // 'create_date',
            // 'supplier_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
