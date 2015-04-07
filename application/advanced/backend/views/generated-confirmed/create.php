<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\generatedConfirmed */

$this->title = 'Create Generated Confirmed';
$this->params['breadcrumbs'][] = ['label' => 'Generated Confirmeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="generated-confirmed-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
