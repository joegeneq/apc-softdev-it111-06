<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CustomerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_customer') ?>

    <?= $form->field($model, 'customer_firstName') ?>

    <?= $form->field($model, 'customer_lastName') ?>

    <?= $form->field($model, 'customer_address') ?>

    <?= $form->field($model, 'customer_contact') ?>

    <?php // echo $form->field($model, 'customer_type') ?>

    <?php // echo $form->field($model, 'customer_country') ?>

    <?php // echo $form->field($model, 'customer_zipCode') ?>

    <?php // echo $form->field($model, 'customer_createDate') ?>

    <?php // echo $form->field($model, 'customer_updateDate') ?>

    <?php // echo $form->field($model, 'Company_id_company') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
