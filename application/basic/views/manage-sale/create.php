<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\manageSale */

$this->title = 'Create Manage Sale';
$this->params['breadcrumbs'][] = ['label' => 'Manage Sales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-sale-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
