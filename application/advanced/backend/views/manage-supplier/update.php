<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\manageSupplier */

$this->title = 'Update Manage Supplier: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Manage Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="manage-supplier-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
