<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Customercontact */

$this->title = $model->name;
//$this->params['breadcrumbs'][] = ['label' => 'List of Contact Persons', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customercontact-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'customer_id' => $model->customer_id], ['class' => 'btn btn-primary','accesskey'=>'u']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'customer_id' => $model->customer_id], [
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
            'email:email',
            'create_date',
            'update_date',
            'created_by',
            'updated_by',
            'customer.name',
        ],
    ]) ?>

    <p>
    <?= Html::a('Back to List of Contact Persons', ['/customercontact/index'], ['class' => 'btn btn-primary','accesskey'=>'b']) ?>
</p>
</div>
