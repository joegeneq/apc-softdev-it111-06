<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\manageSale */

$this->title = 'Update Manage Sale: ' . ' ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Manage Sales', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="manage-sale-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
