<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\controllers\ComDepSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="com-dep-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'com_id') ?>

    <?= $form->field($model, 'dep_id') ?>

    <?= $form->field($model, 'datein') ?>

    <?= $form->field($model, 'dateout') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
