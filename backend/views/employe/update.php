<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Employe */

$this->title = 'Update Employe: ' . $model->employeId;
$this->params['breadcrumbs'][] = ['label' => 'Employes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->employeId, 'url' => ['view', 'id' => $model->employeId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="employe-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
