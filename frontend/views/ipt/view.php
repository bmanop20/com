<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ipt */

$this->title = $model->an;
$this->params['breadcrumbs'][] = ['label' => 'Ipts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipt-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->an], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->an], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'an',
            'admdoctor',
            'dchdate',
            'dchstts',
            'dchtime',
            'dchtype',
            'dthdiagdct',
            'hn',
            'ivstist',
            'ivstost',
            'lockdx',
            'prediag',
            'pttype',
            'regdate',
            'regtime',
            'rfrics',
            'rfrilct',
            'rfrocs',
            'rfrolct',
            'spclty',
            'vn',
            'ward',
            'rcpt_disease',
            'dch_doctor',
            'ipt_type',
            'iref_type',
            'ipacc',
            'act_money_limit',
            'drg',
            'mdc',
            'rw',
            'wtlos',
            'ot',
            'result',
            'gravidity',
            'parity',
            'living_children',
            'rxdoctor',
            'staff',
            'bw',
            'first_ward',
            'refer_out_number',
            'incharge_doctor',
            'an_guid',
            'an_lock',
            'ergent',
            'chart_state',
            'receive_chart_date_time',
            'receive_chart_staff',
            'receive_chart_note',
            'adjrw',
            'ipt_spclty',
            'finance_lock',
            'last_check_autoincome',
            'admit_fee_guid',
            'leave_home_day',
            'operation_status',
            'finance_summary_date',
            'estimate_discharge_date',
            'old_cause_revisit',
            'finance_transfer',
            'provision_dx',
            'dw_hhc_list_id',
            'hos_guid',
            'chart_stat',
            'rcv_date',
            'rcv_from',
            'hos_guid_ext',
            'body_height',
            'update_datetime',
            'cur_dep_code',
            'finance_status_flag',
            'ipt_admit_type_id',
            'no_visit',
            'no_food',
            'confirm_discharge',
            'lab_status',
            'xray_status',
            'grouper_version',
            'grouper_err',
            'grouper_warn',
            'grouper_actlos',
            'auto_charge_amount',
        ],
    ]) ?>

</div>
