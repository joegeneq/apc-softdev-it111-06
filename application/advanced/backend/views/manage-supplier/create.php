<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\managesupplier */

$this->title = 'Create Managesupplier';
$this->params['breadcrumbs'][] = ['label' => 'Managesuppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="managesupplier-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
