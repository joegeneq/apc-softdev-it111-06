<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\productinventory */

$this->title = 'Update Productinventory: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Productinventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'ID' => $model->ID, 'Supplier_ID' => $model->Supplier_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="productinventory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
