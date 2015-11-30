<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\VnStat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vn-stat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pdx')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gr504')->textInput() ?>

    <?= $form->field($model, 'lastvisit')->textInput() ?>

    <?= $form->field($model, 'accident_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dx_doctor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dx0')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dx1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dx2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dx3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dx4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dx5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age_y')->textInput() ?>

    <?= $form->field($model, 'age_m')->textInput() ?>

    <?= $form->field($model, 'age_d')->textInput() ?>

    <?= $form->field($model, 'aid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'moopart')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'count_in_month')->textInput() ?>

    <?= $form->field($model, 'count_in_year')->textInput() ?>

    <?= $form->field($model, 'pttype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'income')->textInput() ?>

    <?= $form->field($model, 'paid_money')->textInput() ?>

    <?= $form->field($model, 'remain_money')->textInput() ?>

    <?= $form->field($model, 'uc_money')->textInput() ?>

    <?= $form->field($model, 'item_money')->textInput() ?>

    <?= $form->field($model, 'dba')->textInput() ?>

    <?= $form->field($model, 'spclty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vstdate')->textInput() ?>

    <?= $form->field($model, 'op0')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'op1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'op2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'op3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'op4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'op5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rcp_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'print_count')->textInput() ?>

    <?= $form->field($model, 'print_done')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pttype_in_region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pttype_in_chwpart')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inc01')->textInput() ?>

    <?= $form->field($model, 'inc02')->textInput() ?>

    <?= $form->field($model, 'inc03')->textInput() ?>

    <?= $form->field($model, 'inc04')->textInput() ?>

    <?= $form->field($model, 'inc05')->textInput() ?>

    <?= $form->field($model, 'inc06')->textInput() ?>

    <?= $form->field($model, 'inc07')->textInput() ?>

    <?= $form->field($model, 'inc08')->textInput() ?>

    <?= $form->field($model, 'inc09')->textInput() ?>

    <?= $form->field($model, 'inc10')->textInput() ?>

    <?= $form->field($model, 'inc11')->textInput() ?>

    <?= $form->field($model, 'inc12')->textInput() ?>

    <?= $form->field($model, 'inc13')->textInput() ?>

    <?= $form->field($model, 'inc14')->textInput() ?>

    <?= $form->field($model, 'inc15')->textInput() ?>

    <?= $form->field($model, 'inc16')->textInput() ?>

    <?= $form->field($model, 'hospmain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hospsub')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pttypeno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pttype_expire')->textInput() ?>

    <?= $form->field($model, 'cid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'main_pdx')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inc17')->textInput() ?>

    <?= $form->field($model, 'inc_drug')->textInput() ?>

    <?= $form->field($model, 'inc_nondrug')->textInput() ?>

    <?= $form->field($model, 'pt_subtype')->textInput() ?>

    <?= $form->field($model, 'rcpno_list')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ym')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'node_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ill_visit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'count_in_day')->textInput() ?>

    <?= $form->field($model, 'pttype_begin')->textInput() ?>

    <?= $form->field($model, 'lastvisit_hour')->textInput() ?>

    <?= $form->field($model, 'rcpt_money')->textInput() ?>

    <?= $form->field($model, 'discount_money')->textInput() ?>

    <?= $form->field($model, 'old_diagnosis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'debt_id_list')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vn_guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastvisit_vn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hos_guid')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
