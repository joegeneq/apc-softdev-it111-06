<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers Page';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">

   
    <center><p> 
        <?= Html::a('Add Customer', ['create'], ['class' => 'btn btn-success','accesskey' => 'a']) ?>
         <?= Html::a('Manage Customer', ['/manage-customer/index'], ['class' => 'btn btn-danger','accesskey' => 'm']) ?>   
      </p></center>
    <br>

  <h1 align="center"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
             'city',
            // 'zip_code',
            // 'country',
             'email:email',
            // 'contact_person',
            // 'create_date',
            // 'type',

          //  ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<p align="right">
        <?= Html::a('Back to Home', ['/site/index'], ['class' => 'btn btn-primary','accesskey' => 'h']) ?>
</p>

</div>
