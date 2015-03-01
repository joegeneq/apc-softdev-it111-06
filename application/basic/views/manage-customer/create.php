<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\manageCustomer */

$this->title = 'Create Manage Customer';
$this->params['breadcrumbs'][] = ['label' => 'Manage Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-customer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
