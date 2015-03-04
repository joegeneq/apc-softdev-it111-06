<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\manageCustomercontact */

$this->title = 'Create Manage Customercontact';
$this->params['breadcrumbs'][] = ['label' => 'Manage Customercontacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-customercontact-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
