<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\manageItem */

$this->title = 'Create Manage Item';
$this->params['breadcrumbs'][] = ['label' => 'Manage Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
