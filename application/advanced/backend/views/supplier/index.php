<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Suppliers Page';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplier-index">

     <p align="center">
        <?= Html::a('Add Supplier', ['create'], ['class' => 'btn btn-success','accesskey' => 'a']) ?>
        <?= Html::a('Manage Suppliers', ['manage-supplier/index'], ['class' => 'btn btn-danger','accesskey' => 'm']) ?>   
    </p><br>

    <center><h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?></center>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
        //    ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            [
            'attribute' => 'name',
            'format' => 'raw',
            'value'=>function ($data) {
            return Html::a(Html::encode($data->name), array('view', 'id'=>$data->id));
        },
           ],
            'contact_no',
            'contact_person',
            //'house_no',
            // 'street',
            'city',
            // 'zip_code',
            // 'country',
            // 'email:email',
            // 'create_date',

          //  ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p align="right">
        <?= Html::a('Back to Home', ['site/index'], ['class' => 'btn btn-primary','accesskey' => 'h']) ?>   
    </p>
    
</div>
