<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\controllers\ErSearchController */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="er-regist-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'vn') ?>

    <?= $form->field($model, 'vstdate') ?>

    <?= $form->field($model, 'er_period') ?>

    <?= $form->field($model, 'er_pt_type') ?>

    <?= $form->field($model, 'er_emergency_type') ?>

    <?php // echo $form->field($model, 'er_dch_type') ?>

    <?php // echo $form->field($model, 'er_doctor') ?>

    <?php // echo $form->field($model, 'er_legal_action') ?>

    <?php // echo $form->field($model, 'er_time_1') ?>

    <?php // echo $form->field($model, 'er_time_2') ?>

    <?php // echo $form->field($model, 'er_time_3') ?>

    <?php // echo $form->field($model, 'dba') ?>

    <?php // echo $form->field($model, 'er_list') ?>

    <?php // echo $form->field($model, 'oper_note') ?>

    <?php // echo $form->field($model, 'enter_er_time') ?>

    <?php // echo $form->field($model, 'doctor_tx_time') ?>

    <?php // echo $form->field($model, 'finish_time') ?>

    <?php // echo $form->field($model, 'vn_guid') ?>

    <?php // echo $form->field($model, 'observe') ?>

    <?php // echo $form->field($model, 'hos_guid') ?>

    <?php // echo $form->field($model, 'ems_command_list_id') ?>

    <?php // echo $form->field($model, 'er_screen') ?>

    <?php // echo $form->field($model, 'er_emergency_level_id') ?>

    <?php // echo $form->field($model, 'update_datetime') ?>

    <?php // echo $form->field($model, 'update_staff') ?>

    <?php // echo $form->field($model, 'er_depcode') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
