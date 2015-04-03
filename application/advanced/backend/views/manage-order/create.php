<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\manageOrder */

$this->title = 'Create Manage Order';
$this->params['breadcrumbs'][] = ['label' => 'Manage Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-order-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
