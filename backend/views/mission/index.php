<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchMission */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Missions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mission-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mission', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'missionId',
            'reference',
            'bis',
            'residenceAdministrative',
            'parcours',
            //'motifDeplacement',
            //'direction',
            //'dateDepart',
            //'heureDepart',
            //'dateRetour',
            //'heureRetour',
            //'moyenTransport',
            //'fraisTransport',
            //'dateEtabli',
            //'lieuEtabli',
            //'observation',
            //'etatId',
            //'employeId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
