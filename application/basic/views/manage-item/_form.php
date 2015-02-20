<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\manageItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manage-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_name')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'item_qty')->textInput() ?>

    <?= $form->field($model, 'item_unit')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'item_price')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'item_serialNo')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'item_status')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'item_createDate')->textInput() ?>

    <?= $form->field($model, 'item_updateDate')->textInput() ?>

    <?= $form->field($model, 'Sale_id_sale')->textInput() ?>

    <?= $form->field($model, 'Order_id_order')->textInput() ?>

    <?= $form->field($model, 'Supplier_id_supplier')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
