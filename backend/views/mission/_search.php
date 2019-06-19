<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchMission */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mission-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'missionId') ?>

    <?= $form->field($model, 'reference') ?>

    <?= $form->field($model, 'bis') ?>

    <?= $form->field($model, 'residenceAdministrative') ?>

    <?= $form->field($model, 'parcours') ?>

    <?php // echo $form->field($model, 'motifDeplacement') ?>

    <?php // echo $form->field($model, 'direction') ?>

    <?php // echo $form->field($model, 'dateDepart') ?>

    <?php // echo $form->field($model, 'heureDepart') ?>

    <?php // echo $form->field($model, 'dateRetour') ?>

    <?php // echo $form->field($model, 'heureRetour') ?>

    <?php // echo $form->field($model, 'moyenTransport') ?>

    <?php // echo $form->field($model, 'fraisTransport') ?>

    <?php // echo $form->field($model, 'dateEtabli') ?>

    <?php // echo $form->field($model, 'lieuEtabli') ?>

    <?php // echo $form->field($model, 'observation') ?>

    <?php // echo $form->field($model, 'etatId') ?>

    <?php // echo $form->field($model, 'employeId') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
