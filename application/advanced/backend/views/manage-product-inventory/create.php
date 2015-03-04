<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\manageProductInventory */

$this->title = 'Create Manage Product Inventory';
$this->params['breadcrumbs'][] = ['label' => 'Manage Product Inventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-product-inventory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
