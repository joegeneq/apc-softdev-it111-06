<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\generatedOrder */

$this->title = 'Update Generated Order: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Generated Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'supplier_id' => $model->supplier_id, 'productinventory_id' => $model->productinventory_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="generated-order-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
