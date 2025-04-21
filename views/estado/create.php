<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Estado $model */

$this->title = 'Crear Estado';
$this->params['breadcrumbs'][] = ['label' => 'Estado', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
