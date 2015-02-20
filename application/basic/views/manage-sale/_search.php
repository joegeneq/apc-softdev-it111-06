<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\manageSaleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manage-sale-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_sale') ?>

    <?= $form->field($model, 'sale_date') ?>

    <?= $form->field($model, 'sale_orNo') ?>

    <?= $form->field($model, 'Customer_id_customer') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
