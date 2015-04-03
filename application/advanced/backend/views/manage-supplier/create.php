<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\manageSupplier */

$this->title = 'Create Manage Supplier';
$this->params['breadcrumbs'][] = ['label' => 'Manage Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-supplier-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
