<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SaleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List of Sales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sale-index">
	<p align="center">
        <?= Html::a('Create Sale', ['create'], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Manage Sales', ['manage-sale/index'], ['class' => 'btn btn-danger']) ?>
    </p>
	<br>
    <h1><center><?= Html::encode($this->title) ?></center></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_sale',
            'sale_date',
            'sale_orNo',
            'Customer_id_customer',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
