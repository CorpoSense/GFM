<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employe */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employe-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'employeId')->textInput() ?>

    <?= $form->field($model, 'nomPersonel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emploi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'indice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'groupe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categorie')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
