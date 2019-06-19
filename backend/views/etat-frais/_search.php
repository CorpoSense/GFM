<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchEtatFrais */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="etat-frais-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'employeId') ?>

    <?= $form->field($model, 'etatId') ?>

    <?= $form->field($model, 'bareme') ?>

    <?= $form->field($model, 'dateCreation') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
