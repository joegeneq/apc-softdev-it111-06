<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\manageCustomercontact */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Manage Contact Person', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-customercontact-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'customer_id' => $model->customer_id], ['class' => 'btn btn-primary']) ?>
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
            'customer_id',
        ],
    ]) ?>
<?= Html::a('Back to Manage Contact Persons', ['/manage-customercontact/index'], ['class' => 'btn btn-primary']) ?>
</div>
