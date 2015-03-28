<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\supplier */

$this->title = $model->name;
//$this->params['breadcrumbs'][] = ['label' => 'List of Suppliers', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplier-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary','accesskey'=> 'u']) ?>
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
            'contact_no',
            'contact_person',
            'house_no',
            'street',
            'area',
            'city',
            'zip_code',
            'country',
            'email:email',
            'create_date',
            'update_date',
            'created_by',
            'updated_by',
        ],
    ]) ?>

    <p align="left">
    <?= Html::a('Back to Suppliers Page', ['supplier/index'], ['class' => 'btn btn-primary','accesskey'=>'b']) ?>
    </p> 
</div>
