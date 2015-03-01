<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\manageCustomer */

$this->title = 'Update Manage Customer: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Manage Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="manage-customer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>