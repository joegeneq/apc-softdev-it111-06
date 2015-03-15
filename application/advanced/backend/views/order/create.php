<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Order */

$this->title = 'Add Order';
//$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-create">
	<p><h3>Instructions:</h3></p>
	<p>Press Down Arrow key, to read the given fields</p>
	<p>Press Enter, to edit given fields</p>
    <p>Press Alt + B, to return to Orders Page<br></p>

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
