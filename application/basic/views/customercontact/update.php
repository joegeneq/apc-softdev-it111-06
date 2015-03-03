<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Customercontact */

$this->title = 'Update Customercontact: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Customercontacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'ID' => $model->ID, 'Customer_ID' => $model->Customer_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customercontact-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
