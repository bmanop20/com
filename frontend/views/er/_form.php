<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ErRegist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="er-regist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vstdate')->textInput() ?>

    <?= $form->field($model, 'er_period')->textInput() ?>

    <?= $form->field($model, 'er_pt_type')->textInput() ?>

    <?= $form->field($model, 'er_emergency_type')->textInput() ?>

    <?= $form->field($model, 'er_dch_type')->textInput() ?>

    <?= $form->field($model, 'er_doctor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'er_legal_action')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'er_time_1')->textInput() ?>

    <?= $form->field($model, 'er_time_2')->textInput() ?>

    <?= $form->field($model, 'er_time_3')->textInput() ?>

    <?= $form->field($model, 'dba')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'er_list')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oper_note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enter_er_time')->textInput() ?>

    <?= $form->field($model, 'doctor_tx_time')->textInput() ?>

    <?= $form->field($model, 'finish_time')->textInput() ?>

    <?= $form->field($model, 'vn_guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hos_guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ems_command_list_id')->textInput() ?>

    <?= $form->field($model, 'er_screen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'er_emergency_level_id')->textInput() ?>

    <?= $form->field($model, 'update_datetime')->textInput() ?>

    <?= $form->field($model, 'update_staff')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'er_depcode')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
