<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CompanySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List of Companies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="display:none">
	<audio autoplay>
	<source src="audio/CompaniesAudio.mp3" type="audio/mpeg">
	Your browser does not support the audio element.
	</audio>
</div>
<div class="company-index">
    <p align="center">
        <?= Html::a('Add Company', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Manage Companies', ['/manage-company/index'], ['class' => 'btn btn-danger']) ?>
    </p><br>
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

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
