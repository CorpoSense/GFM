<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchEtatFrais */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Etat Frais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etat-frais-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Etat Frais', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'employeId',
            'etatId',
            'bareme',
            'dateCreation',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
