<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\customer;
use backend\models\productinventory

/* @var $this yii\web\View */
/* @var $model backend\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList(array('Pending'=>'Pending','Confirmed'=>'Confirmed','Cancelled'=>'Cancelled','For Replacement'=>'For Replacement'), array('options' => array('Pending'=>array('selected'=>true)))); ?>

    <?= $form->field($model, 'num_items')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'productinventory_id')->dropdownList(
        ArrayHelper::map(productinventory::find()->all(), 'id', 'name'),
        ['prompt'=>'Select Product Name']
    ) ?>

    <?= $form->field($model, 'customer_id')->dropdownList(
        ArrayHelper::map(customer::find()->all(), 'id', 'name'),
        ['prompt'=>'Select Customer Name']
    ) ?>

    


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    
        <?= Html::a('Back to Orders Page', ['order/index'], ['class' => 'btn btn-primary', 'accesskey'=>'b']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
