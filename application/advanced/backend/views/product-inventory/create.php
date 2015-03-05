<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\productinventory */

$this->title = 'Add Product';
$this->params['breadcrumbs'][] = ['label' => 'Product Inventory', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productinventory-create">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


</div>
