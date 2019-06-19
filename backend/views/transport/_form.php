<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Transport */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transport-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'transportId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'typeTransport')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valeur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'missionId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
