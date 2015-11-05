<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\ComType;
use yii\helpers\ArrayHelper;
use app\models\ArchType;
use app\models\OsType;
/* @var $this yii\web\View */
/* @var $model frontend\models\Computer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="box box-warning" style="width:75%">
    <div class="box-body">
    <?php $form = ActiveForm::begin(['options'=>['class'=>'',],]); ?>

    <?php 
    
    
        //$form->field($model, 'com_type_id')->textInput();
       //echo  Html::activeDropDownList($model, 'com_type_id',  yii\helpers\ArrayHelper::map(ComType::find()->all(), 'id', 'name'));
    
    $dataCategory = ArrayHelper::map(ComType::find()->asArray()->all(), 'id', 'name');
    echo $form->field($model, 'com_type_id')->dropDownList($dataCategory,['prompt'=>'--------']);
    ?>

    <?= $form->field($model, 'cpu_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ram_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cpuspeed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ramspeed')->textInput(['maxlength' => true]) ?>

    <?php 
        //$form->field($model, 'os')->textInput(['maxlength' => true]) 
        $dataCategory = ArrayHelper::map(OsType::find()->asArray()->all(), 'id', 'name');
        echo $form->field($model, 'os')->label('ระบบปฏิบัติการ')->dropDownList($dataCategory,['prompt'=>'--------']);
    ?>

    <?php 
        //$form->field($model, 'arch_type_id')->textInput()
        $dataCategory = ArrayHelper::map(ArchType::find()->asArray()->all(), 'id', 'name');
        echo $form->field($model, 'arch_type_id')->dropDownList($dataCategory,['prompt'=>'--------']);
    ?>

    <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>
