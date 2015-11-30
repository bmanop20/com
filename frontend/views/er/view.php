<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ErRegist */

$this->title = $model->vn;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Er Regists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="er-regist-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->vn], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->vn], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'vn',
            'vstdate',
            'er_period',
            'er_pt_type',
            'er_emergency_type',
            'er_dch_type',
            'er_doctor',
            'er_legal_action',
            'er_time_1',
            'er_time_2',
            'er_time_3',
            'dba',
            'er_list',
            'oper_note',
            'enter_er_time',
            'doctor_tx_time',
            'finish_time',
            'vn_guid',
            'observe',
            'hos_guid',
            'ems_command_list_id',
            'er_screen',
            'er_emergency_level_id',
            'update_datetime',
            'update_staff',
            'er_depcode',
        ],
    ]) ?>

</div>
