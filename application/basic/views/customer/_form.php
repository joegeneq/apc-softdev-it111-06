<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'ContactNo')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'HouseNo')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'Street')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'Area')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'City')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'ZipCode')->textInput() ?>

    <?= $form->field($model, 'Country')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'CreateDate')->textInput() ?>

    <?= $form->field($model, 'UpdateDate')->textInput() ?>

    <?= $form->field($model, 'CreatedBy')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'UpdatedBy')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
