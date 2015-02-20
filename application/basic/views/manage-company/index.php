
<div class="manage-company-index">
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\manageCompanySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage Companies';
$this->params['breadcrumbs'][] = $this->title;
?>
    <p align="center">
        <?= Html::a('Add Company', ['/company/create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('View Company', ['/company/index'], ['class' => 'btn btn-success']) ?>
    </p>
    <h1 align="center"><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_company',
            'company_name',
            'company_address',
            'company_contact',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
