<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dtmain */

$this->title = $model->dtmain_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dtmains'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dtmain-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->dtmain_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->dtmain_id], [
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
            'dtmain_id',
            'dn',
            'doctor',
            'fee',
            'hn',
            'icd',
            'note:ntext',
            'scount',
            'tcount',
            'tmcode',
            'ttcode',
            'vn',
            'vstage',
            'vstdate',
            'vsttime',
            'tm_no',
            'doctor_helper',
            'rcount',
            'icd9',
            'qty_count',
            'opi_guid',
            'begin_time',
            'end_time',
            'dtmain_guid',
            'staff',
            'pregnancy',
            'post_labour',
            'report_update',
            'pregnancy_caries_count',
            'pregnancy_gingivitis',
            'pregnancy_calculus',
            'pregnancy_checkup',
            'hos_guid',
            'update_datetime',
            'dx_guid',
            'dental_plan_detail_id',
            'department',
            'an',
        ],
    ]) ?>

</div>
