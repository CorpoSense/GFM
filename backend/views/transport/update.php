<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Transport */

$this->title = 'Update Transport: ' . $model->transportId;
$this->params['breadcrumbs'][] = ['label' => 'Transports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->transportId, 'url' => ['view', 'id' => $model->transportId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transport-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
