<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\manageProductInventory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manage-product-inventory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'qoh')->textInput() ?>

    <?= $form->field($model, 'serial_no')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?><p><b><i>* Date format: YYYY-MM-DD</b></i></p><br>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'supplier_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
        <?= Html::a('Back to Manage Inventory', ['/manage-product-inventory/index'], ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
