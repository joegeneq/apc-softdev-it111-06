<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\supplier;
use backend\models\productinventory

/* @var $this yii\web\View */
/* @var $model backend\models\manageOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manage-order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'qty')->textInput() ?>

     <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'supplier_id')->dropDownList(
          ArrayHelper:: map(supplier::find()->all(), 'id', 'name'),
          ['prompt'=>'Select Supplier'])
     ?>

    <?= $form->field($model, 'productinventory_id')->dropdownList(
        ArrayHelper::map(productinventory::find()->all(), 'id', 'name'),
        ['prompt'=>'Select Product Name']
    ) ?>
   
 <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <div>
         <?= Html::a('Back to Orders', ['order/index'], ['class' => 'btn btn-primary', 'accesskey'=>'b']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>