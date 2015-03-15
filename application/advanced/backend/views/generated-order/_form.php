<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\customer;
use app\models\productinventory

/* @var $this yii\web\View */
/* @var $model app\models\generatedOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="generated-order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'num_items')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'discount')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'customer_id')->dropdownList(
        ArrayHelper::map(customer::find()->all(), 'id', 'name'),
        ['prompt'=>'Select Customer Name']
    ) ?>

    <?= $form->field($model, 'productinventory_id')->dropdownList(
        ArrayHelper::map(productinventory::find()->all(), 'id', 'name'),
        ['prompt'=>'Select Product Name']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
