<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Countries $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="countries-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'country_id')->textInput() ?>

    <?= $form->field($model, 'browser_id')->textInput() ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
