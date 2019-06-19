<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchEmploye */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employe-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'employeId') ?>

    <?= $form->field($model, 'nomPersonel') ?>

    <?= $form->field($model, 'grade') ?>

    <?= $form->field($model, 'emploi') ?>

    <?= $form->field($model, 'indice') ?>

    <?php // echo $form->field($model, 'groupe') ?>

    <?php // echo $form->field($model, 'categorie') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
