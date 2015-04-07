<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\generatedConfirmed */

$this->title = 'Update Generated Confirmed: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Generated Confirmeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'productinventory_id' => $model->productinventory_id, 'customer_id' => $model->customer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="generated-confirmed-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
