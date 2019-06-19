<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Region */

$this->title = 'Update Region: ' . $model->codeRegion;
$this->params['breadcrumbs'][] = ['label' => 'Regions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codeRegion, 'url' => ['view', 'id' => $model->codeRegion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="region-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
