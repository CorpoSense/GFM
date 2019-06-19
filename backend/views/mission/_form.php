<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mission */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mission-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'missionId')->textInput() ?>

    <?= $form->field($model, 'reference')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'residenceAdministrative')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parcours')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'motifDeplacement')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateDepart')->textInput() ?>

    <?= $form->field($model, 'heureDepart')->textInput() ?>

    <?= $form->field($model, 'dateRetour')->textInput() ?>

    <?= $form->field($model, 'heureRetour')->textInput() ?>

    <?= $form->field($model, 'moyenTransport')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fraisTransport')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateEtabli')->textInput() ?>

    <?= $form->field($model, 'lieuEtabli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'etatId')->textInput() ?>

    <?= $form->field($model, 'employeId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
