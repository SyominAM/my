<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Browsers $model */

$this->title = 'Create Browsers';
$this->params['breadcrumbs'][] = ['label' => 'Browsers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="browsers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
