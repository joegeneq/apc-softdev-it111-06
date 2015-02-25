<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\manageSale */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manage-sale-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Date')->textInput() ?>

    <?= $form->field($model, 'ReceiptNo')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'ItemQty')->textInput() ?>

    <?= $form->field($model, 'Customer_ID')->textInput() ?>

    <?= $form->field($model, 'Item_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
