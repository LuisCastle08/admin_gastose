<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Servicio $model */

$this->title = 'Crear Servicio';
$this->params['breadcrumbs'][] = ['label' => 'Servicio', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servicio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
