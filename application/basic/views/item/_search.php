<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_item') ?>

    <?= $form->field($model, 'item_name') ?>

    <?= $form->field($model, 'item_qty') ?>

    <?= $form->field($model, 'item_unit') ?>

    <?= $form->field($model, 'item_price') ?>

    <?php // echo $form->field($model, 'item_serialNo') ?>

    <?php // echo $form->field($model, 'item_status') ?>

    <?php // echo $form->field($model, 'item_createDate') ?>

    <?php // echo $form->field($model, 'item_updateDate') ?>

    <?php // echo $form->field($model, 'Sale_id_sale') ?>

    <?php // echo $form->field($model, 'Order_id_order') ?>

    <?php // echo $form->field($model, 'Supplier_id_supplier') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
