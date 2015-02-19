<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer_firstName')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'customer_lastName')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'customer_address')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'customer_contact')->textInput() ?>

    <?= $form->field($model, 'customer_type')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'customer_country')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'customer_zipCode')->textInput() ?>

    <?= $form->field($model, 'customer_createDate')->textInput() ?>

    <?= $form->field($model, 'customer_updateDate')->textInput() ?>

    <?= $form->field($model, 'Company_id_company')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
