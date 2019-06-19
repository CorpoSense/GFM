<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EtatFrais */

$this->title = 'Create Etat Frais';
$this->params['breadcrumbs'][] = ['label' => 'Etat Frais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etat-frais-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
