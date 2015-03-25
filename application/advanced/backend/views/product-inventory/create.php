<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\productinventory */

$this->title = 'Add Product';
//$this->params['breadcrumbs'][] = ['label' => 'Product Inventory Page', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productinventory-create">
	<p hidden><h3 hidden>Instructions:</h3></p>
	<p hidden>Press Down Arrow key, to read the given fields</p>
	<p hidden>Press Enter, to edit given fields</p>
    <p hidden>Press Alt + B, to return to Product Inventory Page<br></p>

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


</div>
