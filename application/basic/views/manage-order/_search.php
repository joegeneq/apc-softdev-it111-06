<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\manageOrderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manage-order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Date') ?>

    <?= $form->field($model, 'Status') ?>

    <?= $form->field($model, 'ItemQty') ?>

    <?= $form->field($model, 'Customer_ID') ?>

    <?php // echo $form->field($model, 'Item_ID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
