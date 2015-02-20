<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List of Suppliers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="display:none">
	<audio autoplay>
	<source src="audio/SuppliersAudio.mp3" type="audio/mpeg">
	Your browser does not support the audio element.
	</audio>
</div>
<div class="supplier-index">
<p align="center">
        <?= Html::a('Add Supplier', ['create'], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Manage Suppliers', ['/manage-supplier/index'], ['class' => 'btn btn-danger']) ?>
    </p>
	<br>
    <h1><center><?= Html::encode($this->title) ?></center></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_supplier',
            'supplier_name',
            'supplier_address',
            'supplier_contact',
            'supplier_createDate',
            // 'supplier_updateDate',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
