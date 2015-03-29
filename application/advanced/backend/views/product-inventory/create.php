<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Productinventory */

$this->title = 'Create Productinventory';
//$this->params['breadcrumbs'][] = ['label' => 'Productinventories', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productinventory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
