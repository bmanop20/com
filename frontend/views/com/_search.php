<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\controllers\ComSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="computer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'com_type_id') ?>

    <?= $form->field($model, 'cpu_type') ?>

    <?= $form->field($model, 'ram_type') ?>

    <?= $form->field($model, 'cpuspeed') ?>

    <?php // echo $form->field($model, 'ramspeed') ?>

    <?php // echo $form->field($model, 'os') ?>

    <?php // echo $form->field($model, 'arch_type_id') ?>

    <?php // echo $form->field($model, 'brand') ?>

    <?php // echo $form->field($model, 'code') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
