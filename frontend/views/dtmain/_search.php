<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\controllers\DtmainSearchController */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dtmain-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'dtmain_id') ?>

    <?= $form->field($model, 'dn') ?>

    <?= $form->field($model, 'doctor') ?>

    <?= $form->field($model, 'fee') ?>

    <?= $form->field($model, 'hn') ?>

    <?php // echo $form->field($model, 'icd') ?>

    <?php // echo $form->field($model, 'note') ?>

    <?php // echo $form->field($model, 'scount') ?>

    <?php // echo $form->field($model, 'tcount') ?>

    <?php // echo $form->field($model, 'tmcode') ?>

    <?php // echo $form->field($model, 'ttcode') ?>

    <?php // echo $form->field($model, 'vn') ?>

    <?php // echo $form->field($model, 'vstage') ?>

    <?php // echo $form->field($model, 'vstdate') ?>

    <?php // echo $form->field($model, 'vsttime') ?>

    <?php // echo $form->field($model, 'tm_no') ?>

    <?php // echo $form->field($model, 'doctor_helper') ?>

    <?php // echo $form->field($model, 'rcount') ?>

    <?php // echo $form->field($model, 'icd9') ?>

    <?php // echo $form->field($model, 'qty_count') ?>

    <?php // echo $form->field($model, 'opi_guid') ?>

    <?php // echo $form->field($model, 'begin_time') ?>

    <?php // echo $form->field($model, 'end_time') ?>

    <?php // echo $form->field($model, 'dtmain_guid') ?>

    <?php // echo $form->field($model, 'staff') ?>

    <?php // echo $form->field($model, 'pregnancy') ?>

    <?php // echo $form->field($model, 'post_labour') ?>

    <?php // echo $form->field($model, 'report_update') ?>

    <?php // echo $form->field($model, 'pregnancy_caries_count') ?>

    <?php // echo $form->field($model, 'pregnancy_gingivitis') ?>

    <?php // echo $form->field($model, 'pregnancy_calculus') ?>

    <?php // echo $form->field($model, 'pregnancy_checkup') ?>

    <?php // echo $form->field($model, 'hos_guid') ?>

    <?php // echo $form->field($model, 'update_datetime') ?>

    <?php // echo $form->field($model, 'dx_guid') ?>

    <?php // echo $form->field($model, 'dental_plan_detail_id') ?>

    <?php // echo $form->field($model, 'department') ?>

    <?php // echo $form->field($model, 'an') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
