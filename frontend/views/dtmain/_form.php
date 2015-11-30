<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dtmain */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dtmain-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dtmain_id')->textInput() ?>

    <?= $form->field($model, 'dn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doctor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fee')->textInput() ?>

    <?= $form->field($model, 'hn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'scount')->textInput() ?>

    <?= $form->field($model, 'tcount')->textInput() ?>

    <?= $form->field($model, 'tmcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ttcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vstage')->textInput() ?>

    <?= $form->field($model, 'vstdate')->textInput() ?>

    <?= $form->field($model, 'vsttime')->textInput() ?>

    <?= $form->field($model, 'tm_no')->textInput() ?>

    <?= $form->field($model, 'doctor_helper')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rcount')->textInput() ?>

    <?= $form->field($model, 'icd9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qty_count')->textInput() ?>

    <?= $form->field($model, 'opi_guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'begin_time')->textInput() ?>

    <?= $form->field($model, 'end_time')->textInput() ?>

    <?= $form->field($model, 'dtmain_guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pregnancy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_labour')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'report_update')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pregnancy_caries_count')->textInput() ?>

    <?= $form->field($model, 'pregnancy_gingivitis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pregnancy_calculus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pregnancy_checkup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hos_guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'update_datetime')->textInput() ?>

    <?= $form->field($model, 'dx_guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dental_plan_detail_id')->textInput() ?>

    <?= $form->field($model, 'department')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'an')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
