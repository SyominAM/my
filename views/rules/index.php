<?php

use app\models\Rules;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rules-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rules', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'country_id',
            'browser_id',
            'url:url',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Rules $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
