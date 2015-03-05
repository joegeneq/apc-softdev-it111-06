<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\manageCustomer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manage-customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'contact_no')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'house_no')->textInput(['maxlength' => 45]) ?>

<fieldset><legend>Address</legend>
    <?= $form->field($model, 'street')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'area')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'zip_code')->textInput() ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => 225]) ?>
       </fieldset><hr>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'create_date')->textInput() ?><p><b><i>* Date format: YYYY-MM-DD</b></i></p><br>

    <?= $form->field($model, 'update_date')->textInput() ?><p><b><i>* Date format: YYYY-MM-DD</b></i></p><br>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
        <?= Html::a('Back to Manage Customers', ['/manage-customer/index'], ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
