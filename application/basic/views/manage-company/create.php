<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\manageCompany */

$this->title = 'Create Manage Company';
$this->params['breadcrumbs'][] = ['label' => 'Manage Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manage-company-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
