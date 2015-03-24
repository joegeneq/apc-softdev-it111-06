<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Customers Page';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">
    <p hidden><h3 hidden>Instructions:</h3></p>
    <p hidden>Press Alt + A, to Add a new Customer<br></p>
    <p hidden>Press Alt + V, to View Contact Persons<br></p>
    <p hidden>Press Alt + M, to Manage Customers<br></p>
    <p hidden>Press Alt + H, to return to Home Page<br></p>


    
    <center><p> 
        <?= Html::a('Add Customer', ['create'], ['class' => 'btn btn-success','accesskey' => 'a']) ?>
      </p>
    <p>
        <?= Html::a('View Contact Persons', ['/customercontact/index'], ['class' => 'btn btn-primary','accesskey' => 'v', 'width'=>'20px', 'height'=>'20px']) ?>
      </p>
    <p>
         <?= Html::a('Manage Customer', ['/manage-customer/index'], ['class' => 'btn btn-danger','accesskey' => 'm', 'width'=>'20px', 'height'=>'20px']) ?>   
      </p></center>
    <br>


    <h1 align="center"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
          //  ['class' => 'yii\grid\SerialColumn'],

            //'id',
           [
            'attribute' => 'name',
            'format' => 'raw',
            'value'=>function ($data) {
            return Html::a(Html::encode($data->name), array('view', 'id'=>$data->id));
        },
           ],
            'contact_no',
            //'house_no',
            //'street',
            // 'area',
             'city',
            // 'zip_code',
            // 'country',
             'email:email',
            // 'create_date',
             //'update_date',
            // 'created_by',
             //'updated_by',

          //  ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<p align="right">
        <?= Html::a('Back to Home', ['/site/index'], ['class' => 'btn btn-primary','accesskey' => 'h']) ?>
</p>


</div>
