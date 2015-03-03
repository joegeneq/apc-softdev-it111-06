<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SupplierSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplier-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'ContactNo') ?>

    <?= $form->field($model, 'ContactPerson') ?>

    <?= $form->field($model, 'HouseNo') ?>

    <?php // echo $form->field($model, 'Street') ?>

    <?php // echo $form->field($model, 'Area') ?>

    <?php // echo $form->field($model, 'City') ?>

    <?php // echo $form->field($model, 'ZipCode') ?>

    <?php // echo $form->field($model, 'Country') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'CreateDate') ?>

    <?php // echo $form->field($model, 'UpdateDate') ?>

    <?php // echo $form->field($model, 'CreatedBy') ?>

    <?php // echo $form->field($model, 'UpdatedBy') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
