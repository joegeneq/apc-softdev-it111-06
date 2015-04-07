<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\generatedReplacement */

$this->title = 'Update Generated Replacement: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Generated Replacements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'productinventory_id' => $model->productinventory_id, 'customer_id' => $model->customer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="generated-replacement-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
