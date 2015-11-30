<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\VnStat */

$this->title = $model->vn;
$this->params['breadcrumbs'][] = ['label' => 'Vn Stats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vn-stat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->vn], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->vn], [
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
            'vn',
            'hn',
            'pdx',
            'gr504',
            'lastvisit',
            'accident_code',
            'dx_doctor',
            'dx0',
            'dx1',
            'dx2',
            'dx3',
            'dx4',
            'dx5',
            'sex',
            'age_y',
            'age_m',
            'age_d',
            'aid',
            'moopart',
            'count_in_month',
            'count_in_year',
            'pttype',
            'income',
            'paid_money',
            'remain_money',
            'uc_money',
            'item_money',
            'dba',
            'spclty',
            'vstdate',
            'op0',
            'op1',
            'op2',
            'op3',
            'op4',
            'op5',
            'rcp_no',
            'print_count',
            'print_done',
            'pttype_in_region',
            'pttype_in_chwpart',
            'pcode',
            'hcode',
            'inc01',
            'inc02',
            'inc03',
            'inc04',
            'inc05',
            'inc06',
            'inc07',
            'inc08',
            'inc09',
            'inc10',
            'inc11',
            'inc12',
            'inc13',
            'inc14',
            'inc15',
            'inc16',
            'hospmain',
            'hospsub',
            'pttypeno',
            'pttype_expire',
            'cid',
            'main_pdx',
            'inc17',
            'inc_drug',
            'inc_nondrug',
            'pt_subtype',
            'rcpno_list',
            'ym',
            'node_id',
            'ill_visit',
            'count_in_day',
            'pttype_begin',
            'lastvisit_hour',
            'rcpt_money',
            'discount_money',
            'old_diagnosis',
            'debt_id_list',
            'vn_guid',
            'lastvisit_vn',
            'hos_guid',
        ],
    ]) ?>

</div>
