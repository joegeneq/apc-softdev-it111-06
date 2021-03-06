<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\customer;
use backend\models\productinventory

/* @var $this yii\web\View */
/* @var $model backend\models\managePurchase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manage-purchase-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer_id')->dropdownList(
        ArrayHelper::map(customer::find()->all(), 'id', 'name'),
        ['prompt'=>'Select Customer Name']
    ) ?>

    <?= $form->field($model, 'productinventory_id')->dropdownList(
        ArrayHelper::map(productinventory::find()->all(), 'id', 'name'),
        ['prompt'=>'Select Product Name']
    ) ?>

     <?= $form->field($model, 'num_items')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList(
    array('Pending'=>'Pending','Confirmed'=>'Confirmed', 'Cancelled'=>'Cancelled', 'For Replacement'=>'For Replacement'), 
    ['prompt'=>'Select Purchase Status']); ?>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <div>
     <?= Html::a('Back to Purchases Page', ['purchase/index'], ['class' => 'btn btn-primary', 'accesskey'=>'b']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
