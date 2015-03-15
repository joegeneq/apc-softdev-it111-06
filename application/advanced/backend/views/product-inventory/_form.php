<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\supplier

/* @var $this yii\web\View */
/* @var $model app\models\productinventory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productinventory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'qoh')->textInput() ?>

    <?= $form->field($model, 'serial_no')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'create_date')->textInput() ?><p><b><i>* Date format: YYYY-MM-DD</b></i></p><br>

    <?= $form->field($model, 'update_date')->textInput() ?><p><b><i>* Date format: YYYY-MM-DD</b></i></p><br>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'supplier_id')->dropDownList(
          ArrayHelper:: map(supplier::find()->all(), 'id', 'name'),
          ['prompt'=>'Select Supplier'])
     ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
   
    
        <?= Html::a('Back to Product Inventory', ['product-inventory/index'], ['class' => 'btn btn-primary','accesskey'=>'b']) ?>
    

    </div>

    <?php ActiveForm::end(); ?>

</div>
