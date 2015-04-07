<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\generatedReplacement */

$this->title = 'Create Generated Replacement';
$this->params['breadcrumbs'][] = ['label' => 'Generated Replacements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="generated-replacement-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
