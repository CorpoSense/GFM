<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mission */

$this->title = 'Update Mission: ' . $model->missionId;
$this->params['breadcrumbs'][] = ['label' => 'Missions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->missionId, 'url' => ['view', 'id' => $model->missionId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mission-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
