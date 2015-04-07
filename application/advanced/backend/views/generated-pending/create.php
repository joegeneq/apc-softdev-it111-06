<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\generatedPending */

$this->title = 'Create Generated Pending';
$this->params['breadcrumbs'][] = ['label' => 'Generated Pendings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="generated-pending-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
