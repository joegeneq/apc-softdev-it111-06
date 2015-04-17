<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\supplier

/* @var $this yii\web\View */
/* @var $model backend\models\manageProductinventory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manage-productinventory-form">
   <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qoh')->textInput() ?>

    <?= $form->field($model, 'items_sold')->textInput() ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(
    array('Available'=>'Available','Out-of-stock'=>'Out-of-stock'), 
    ['prompt'=>'Select Product Status']); ?>

      <?= $form->field($model, 'supplier_id')->dropDownList(
          ArrayHelper:: map(supplier::find()->all(), 'id', 'name'),
          ['prompt'=>'Select Supplier'])
     ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <div>
    <?= Html::a('Back to Product Inventory', ['productinventory/index'], ['class' => 'btn btn-primary','accesskey'=>'b']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
