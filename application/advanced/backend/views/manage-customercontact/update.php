<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\manageCustomercontact */

$this->title = 'Update Manage Customercontact: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Manage Customercontacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id, 'customer_id' => $model->customer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="manage-customercontact-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
