<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\manageItem */

$this->title = 'Update Manage Item: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Manage Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="manage-item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
