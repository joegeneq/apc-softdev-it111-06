<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Productinventory */

$this->title = 'Update Product: ' . ' ' . $model->name;
//$this->params['breadcrumbs'][] = ['label' => 'Productinventories', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id, 'supplier_id' => $model->supplier_id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="productinventory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
