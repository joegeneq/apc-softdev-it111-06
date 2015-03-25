<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\supplier */

$this->title = 'Add Supplier';
//$this->params['breadcrumbs'][] = ['label' => 'Suppliers Page', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplier-create">
	<p hidden><h3 hidden>Instructions:</h3></p>
	<p hidden>Press Down Arrow key, to read the given fields</p>
	<p hidden>Press Enter, to edit given fields</p>
    <p hidden>Press Alt + B, to return to Suppliers Page<br></p>
    
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
