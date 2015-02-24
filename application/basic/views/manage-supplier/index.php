<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\manageSupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Suppliers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-supplier-index">

	<p align="center">
        <?= Html::a('View Suppliers', ['supplier/index'], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Add Supplier', ['supplier/create'], ['class' => 'btn btn-primary']) ?>
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
