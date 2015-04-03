<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\manageProductinventory */

$this->title = 'Create Manage Productinventory';
$this->params['breadcrumbs'][] = ['label' => 'Manage Productinventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-productinventory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
