<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\manageCustomercontactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Customercontacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-customercontact-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Manage Customercontact', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'contact_no',
            'email:email',
            'create_date',
            // 'update_date',
            // 'created_by',
            // 'updated_by',
            // 'customer_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
