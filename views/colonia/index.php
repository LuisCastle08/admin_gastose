<?php

use app\models\Colonia;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ColoniaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Colonia';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="colonia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Colonia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'col_id',
            'col_nombre',
            'col_fkmunicipio',
            'col_asentamiento',
            'col_codigo_postal',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Colonia $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'col_id' => $model->col_id]);
                 }
            ],
        ],
    ]); ?>


</div>
