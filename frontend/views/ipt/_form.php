<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ipt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ipt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'an')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admdoctor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dchdate')->textInput() ?>

    <?= $form->field($model, 'dchstts')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dchtime')->textInput() ?>

    <?= $form->field($model, 'dchtype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dthdiagdct')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ivstist')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ivstost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lockdx')->textInput() ?>

    <?= $form->field($model, 'prediag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pttype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'regdate')->textInput() ?>

    <?= $form->field($model, 'regtime')->textInput() ?>

    <?= $form->field($model, 'rfrics')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rfrilct')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rfrocs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rfrolct')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spclty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ward')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rcpt_disease')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dch_doctor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ipt_type')->textInput() ?>

    <?= $form->field($model, 'iref_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ipacc')->textInput() ?>

    <?= $form->field($model, 'act_money_limit')->textInput() ?>

    <?= $form->field($model, 'drg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mdc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rw')->textInput() ?>

    <?= $form->field($model, 'wtlos')->textInput() ?>

    <?= $form->field($model, 'ot')->textInput() ?>

    <?= $form->field($model, 'result')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gravidity')->textInput() ?>

    <?= $form->field($model, 'parity')->textInput() ?>

    <?= $form->field($model, 'living_children')->textInput() ?>

    <?= $form->field($model, 'rxdoctor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bw')->textInput() ?>

    <?= $form->field($model, 'first_ward')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_out_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'incharge_doctor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'an_guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'an_lock')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ergent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chart_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receive_chart_date_time')->textInput() ?>

    <?= $form->field($model, 'receive_chart_staff')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receive_chart_note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adjrw')->textInput() ?>

    <?= $form->field($model, 'ipt_spclty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'finance_lock')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_check_autoincome')->textInput() ?>

    <?= $form->field($model, 'admit_fee_guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'leave_home_day')->textInput() ?>

    <?= $form->field($model, 'operation_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'finance_summary_date')->textInput() ?>

    <?= $form->field($model, 'estimate_discharge_date')->textInput() ?>

    <?= $form->field($model, 'old_cause_revisit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'finance_transfer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provision_dx')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dw_hhc_list_id')->textInput() ?>

    <?= $form->field($model, 'hos_guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chart_stat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rcv_date')->textInput() ?>

    <?= $form->field($model, 'rcv_from')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hos_guid_ext')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body_height')->textInput() ?>

    <?= $form->field($model, 'update_datetime')->textInput() ?>

    <?= $form->field($model, 'cur_dep_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'finance_status_flag')->textInput() ?>

    <?= $form->field($model, 'ipt_admit_type_id')->textInput() ?>

    <?= $form->field($model, 'no_visit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_food')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'confirm_discharge')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lab_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'xray_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grouper_version')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grouper_err')->textInput() ?>

    <?= $form->field($model, 'grouper_warn')->textInput() ?>

    <?= $form->field($model, 'grouper_actlos')->textInput() ?>

    <?= $form->field($model, 'auto_charge_amount')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
