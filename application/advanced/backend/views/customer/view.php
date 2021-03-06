<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Customer */

$this->title = $model->name;
//$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary','accesskey'=>'u']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'type',
            'contact_no',
            'house_no',
            'street',
            'city',
            'zip_code',
            'country',
            'email:email',
            'contact_person',
            'create_date',
            'update_date',
        ],
    ]) ?>
    
    <p align="left">
    <?= Html::a('Back to Customers Page', ['/customer/index'], ['class' => 'btn btn-primary', 'accesskey'=>'b']) ?>
    </p> 
</div>
