<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Suppliers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplier-index">

	<p align="center">
        <?= Html::a('Add Supplier', ['create'], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Manage Suppliers', ['/manage-supplier/index'], ['class' => 'btn btn-danger']) ?>
    </p>

    <h1><?= Html::encode($this->title) ?></h1>
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
            'ContactPerson',
            // 'Email:email',
            // 'CreateDate',
            // 'UpdateDate',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
