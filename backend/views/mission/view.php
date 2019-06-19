<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mission */

$this->title = $model->missionId;
$this->params['breadcrumbs'][] = ['label' => 'Missions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mission-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->missionId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->missionId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'missionId',
            'reference',
            'bis',
            'residenceAdministrative',
            'parcours',
            'motifDeplacement',
            'direction',
            'dateDepart',
            'heureDepart',
            'dateRetour',
            'heureRetour',
            'moyenTransport',
            'fraisTransport',
            'dateEtabli',
            'lieuEtabli',
            'observation',
            'etatId',
            'employeId',
        ],
    ]) ?>

</div>
