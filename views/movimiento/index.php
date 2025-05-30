<?php

use app\models\Movimiento;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\MovimientoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Movimiento';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movimiento-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Movimiento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'mov_id',
            'mov_fkusuario',
            'mov_fktmov',
            'mov_cantidad',
            'mov_fecha',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Movimiento $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'mov_id' => $model->mov_id]);
                 }
            ],
        ],
    ]); ?>


</div>
