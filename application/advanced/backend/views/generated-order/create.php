<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\generatedOrder */

$this->title = 'Create Generated Order';
$this->params['breadcrumbs'][] = ['label' => 'Generated Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="generated-order-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
