<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List of Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="display:none">
	<audio autoplay>
	<source src="audio/OrdersAudio.mp3" type="audio/mpeg">
	Your browser does not support the audio element.
	</audio>
</div>
<div class="order-index">
	<p align="center">
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Manage Orders', ['/manage-order/index'], ['class' => 'btn btn-danger']) ?>
    </p>
	<br>
    <h1><center><?= Html::encode($this->title) ?></center></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_order',
            'order_date',
            'order_status',
            'Customer_id_customer',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
