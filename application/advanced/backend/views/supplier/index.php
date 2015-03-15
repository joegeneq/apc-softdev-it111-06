<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Suppliers Page';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplier-index">
    <p><h3>Instructions:</h3></p>
    <p>Press Alt + A, to Add a new Supplier<br></p>
    <p>Press Alt + M, to Manage Suppliers<br></p>
    <p>Press Alt + H, to return to Home Page<br></p>

    <p align="center">
        <?= Html::a('Add Supplier', ['create'], ['class' => 'btn btn-success','accesskey' => 'a']) ?>
        <?= Html::a('Manage Suppliers', ['manage-supplier/index'], ['class' => 'btn btn-danger','accesskey' => 'm']) ?>   
    </p><br>

    <center><h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?></center>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
        //    ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'name',
            'contact_no',
            'contact_person',
          //  'house_no',
            // 'street',
            // 'area',
             'city',
            // 'zip_code',
            // 'country',
            // 'email:email',
            // 'create_date',
            // 'update_date',
            // 'created_by',
            // 'updated_by',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p align="right">
        <?= Html::a('Back to Home', ['site/index'], ['class' => 'btn btn-primary','accesskey' => 'h']) ?>  
    </p>
</div>
