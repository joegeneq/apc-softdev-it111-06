<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\manageItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manage-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'Qty')->textInput() ?>

    <?= $form->field($model, 'Unit')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'Price')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'SerialNo')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'Status')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'CreateDate')->textInput() ?>

    <?= $form->field($model, 'UpdateDate')->textInput() ?>

    <?= $form->field($model, 'Supplier_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
