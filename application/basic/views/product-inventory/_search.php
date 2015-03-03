<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductInventorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productinventory-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'Description') ?>

    <?= $form->field($model, 'QoH') ?>

    <?= $form->field($model, 'SerialNo') ?>

    <?php // echo $form->field($model, 'Price') ?>

    <?php // echo $form->field($model, 'Status') ?>

    <?php // echo $form->field($model, 'CreateDate') ?>

    <?php // echo $form->field($model, 'UpdateDate') ?>

    <?php // echo $form->field($model, 'CreatedBy') ?>

    <?php // echo $form->field($model, 'UpdatedBy') ?>

    <?php // echo $form->field($model, 'Supplier_ID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
