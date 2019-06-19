<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EtatFrais */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="etat-frais-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'employeId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'etatId')->textInput() ?>

    <?= $form->field($model, 'bareme')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateCreation')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
