<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\controllers\IptSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ipt-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'an') ?>

    <?= $form->field($model, 'admdoctor') ?>

    <?= $form->field($model, 'dchdate') ?>

    <?= $form->field($model, 'dchstts') ?>

    <?= $form->field($model, 'dchtime') ?>

    <?php // echo $form->field($model, 'dchtype') ?>

    <?php // echo $form->field($model, 'dthdiagdct') ?>

    <?php // echo $form->field($model, 'hn') ?>

    <?php // echo $form->field($model, 'ivstist') ?>

    <?php // echo $form->field($model, 'ivstost') ?>

    <?php // echo $form->field($model, 'lockdx') ?>

    <?php // echo $form->field($model, 'prediag') ?>

    <?php // echo $form->field($model, 'pttype') ?>

    <?php // echo $form->field($model, 'regdate') ?>

    <?php // echo $form->field($model, 'regtime') ?>

    <?php // echo $form->field($model, 'rfrics') ?>

    <?php // echo $form->field($model, 'rfrilct') ?>

    <?php // echo $form->field($model, 'rfrocs') ?>

    <?php // echo $form->field($model, 'rfrolct') ?>

    <?php // echo $form->field($model, 'spclty') ?>

    <?php // echo $form->field($model, 'vn') ?>

    <?php // echo $form->field($model, 'ward') ?>

    <?php // echo $form->field($model, 'rcpt_disease') ?>

    <?php // echo $form->field($model, 'dch_doctor') ?>

    <?php // echo $form->field($model, 'ipt_type') ?>

    <?php // echo $form->field($model, 'iref_type') ?>

    <?php // echo $form->field($model, 'ipacc') ?>

    <?php // echo $form->field($model, 'act_money_limit') ?>

    <?php // echo $form->field($model, 'drg') ?>

    <?php // echo $form->field($model, 'mdc') ?>

    <?php // echo $form->field($model, 'rw') ?>

    <?php // echo $form->field($model, 'wtlos') ?>

    <?php // echo $form->field($model, 'ot') ?>

    <?php // echo $form->field($model, 'result') ?>

    <?php // echo $form->field($model, 'gravidity') ?>

    <?php // echo $form->field($model, 'parity') ?>

    <?php // echo $form->field($model, 'living_children') ?>

    <?php // echo $form->field($model, 'rxdoctor') ?>

    <?php // echo $form->field($model, 'staff') ?>

    <?php // echo $form->field($model, 'bw') ?>

    <?php // echo $form->field($model, 'first_ward') ?>

    <?php // echo $form->field($model, 'refer_out_number') ?>

    <?php // echo $form->field($model, 'incharge_doctor') ?>

    <?php // echo $form->field($model, 'an_guid') ?>

    <?php // echo $form->field($model, 'an_lock') ?>

    <?php // echo $form->field($model, 'ergent') ?>

    <?php // echo $form->field($model, 'chart_state') ?>

    <?php // echo $form->field($model, 'receive_chart_date_time') ?>

    <?php // echo $form->field($model, 'receive_chart_staff') ?>

    <?php // echo $form->field($model, 'receive_chart_note') ?>

    <?php // echo $form->field($model, 'adjrw') ?>

    <?php // echo $form->field($model, 'ipt_spclty') ?>

    <?php // echo $form->field($model, 'finance_lock') ?>

    <?php // echo $form->field($model, 'last_check_autoincome') ?>

    <?php // echo $form->field($model, 'admit_fee_guid') ?>

    <?php // echo $form->field($model, 'leave_home_day') ?>

    <?php // echo $form->field($model, 'operation_status') ?>

    <?php // echo $form->field($model, 'finance_summary_date') ?>

    <?php // echo $form->field($model, 'estimate_discharge_date') ?>

    <?php // echo $form->field($model, 'old_cause_revisit') ?>

    <?php // echo $form->field($model, 'finance_transfer') ?>

    <?php // echo $form->field($model, 'provision_dx') ?>

    <?php // echo $form->field($model, 'dw_hhc_list_id') ?>

    <?php // echo $form->field($model, 'hos_guid') ?>

    <?php // echo $form->field($model, 'chart_stat') ?>

    <?php // echo $form->field($model, 'rcv_date') ?>

    <?php // echo $form->field($model, 'rcv_from') ?>

    <?php // echo $form->field($model, 'hos_guid_ext') ?>

    <?php // echo $form->field($model, 'body_height') ?>

    <?php // echo $form->field($model, 'update_datetime') ?>

    <?php // echo $form->field($model, 'cur_dep_code') ?>

    <?php // echo $form->field($model, 'finance_status_flag') ?>

    <?php // echo $form->field($model, 'ipt_admit_type_id') ?>

    <?php // echo $form->field($model, 'no_visit') ?>

    <?php // echo $form->field($model, 'no_food') ?>

    <?php // echo $form->field($model, 'confirm_discharge') ?>

    <?php // echo $form->field($model, 'lab_status') ?>

    <?php // echo $form->field($model, 'xray_status') ?>

    <?php // echo $form->field($model, 'grouper_version') ?>

    <?php // echo $form->field($model, 'grouper_err') ?>

    <?php // echo $form->field($model, 'grouper_warn') ?>

    <?php // echo $form->field($model, 'grouper_actlos') ?>

    <?php // echo $form->field($model, 'auto_charge_amount') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
