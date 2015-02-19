<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Supplier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'supplier_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'supplier_address')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'supplier_contact')->textInput() ?>

    <?= $form->field($model, 'supplier_createDate')->textInput() ?>

    <?= $form->field($model, 'supplier_updateDate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
