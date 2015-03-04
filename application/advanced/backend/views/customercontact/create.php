<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Customercontact */

$this->title = 'Add Contact';
$this->params['breadcrumbs'][] = ['label' => 'Customercontacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customercontact-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>