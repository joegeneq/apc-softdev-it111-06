<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\manageProductinventory */

$this->title = 'Update Manage Productinventory: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Manage Productinventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id, 'supplier_id' => $model->supplier_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="manage-productinventory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
