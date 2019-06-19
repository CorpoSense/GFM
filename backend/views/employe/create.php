<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Employe */

$this->title = 'Create Employe';
$this->params['breadcrumbs'][] = ['label' => 'Employes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
