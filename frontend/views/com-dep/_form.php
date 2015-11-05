<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Computer;
use yii\helpers\ArrayHelper;
use yii\db\Expression;
use app\models\Department;
use kartik\datetime\DateTimePicker;
use kartik\datecontrol\DateControl;
/* @var $this yii\web\View */
/* @var $model frontend\models\ComDep */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="box box-info">
    <div class="box-header with-border">
        
            <?php $form = ActiveForm::begin(); ?>

            <?php 

                //$form->field($model, 'com_id')->textInput() 
                $dataCategory = ArrayHelper::map(Computer::find()->select(['id','concat("COMID: ",id, " หมายเลข: " ,code) as name'])->asArray()->all(), 'id', 'name');
                echo $form->field($model, 'com_id')->dropDownList($dataCategory,['prompt'=>'--------']);
            ?>

            <?php 
                //$form->field($model, 'dep_id')->textInput() 
                $dataCategory = ArrayHelper::map(Department::find()->asArray()->all(), 'id', 'name');
                echo $form->field($model, 'dep_id')->dropDownList($dataCategory,['prompt'=>'--------']); 
            ?>


            <?php 
                //echo $form->field($model, 'datein')->textInput() ;
//               $form->field($model, 'datein')->widget(DateTimePicker::className(), [
//                'language' => 'es',
//                'size' => 'ms',
//                'template' => '{input}',
//                'pickButtonIcon' => 'glyphicon glyphicon-time',
//                'inline' => true,
//                'clientOptions' => [
//                    'startView' => 1,
//                    'minView' => 0,
//                    'maxView' => 1,
//                    'autoclose' => true,
//                    'linkFormat' => 'HH:ii P', // if inline = true
//                    // 'format' => 'HH:ii P', // if inline = false
//                    'todayBtn' => true
//                ]]);
//                echo $form->field($model, 'datein')->widget(DateTimePicker::className(),[
//                    //'model'=>$model,
//                    'value'=>$model->datein,
//                    'attribute'=>'datein',
//                    'convertFormat' => true,
//                    'pluginOptions' => [
//                        'format' => 'dd-mm-yyyy',
//                        //'startDate' => '01-Mar-2014 12:00 AM',
//                        'todayHighlight' => true,
//                        //'dateFormat'=>'php:Y-m-d',
//                        ]
//                    ]);  
            //echo $model->datein;
            echo $form->field($model,'datein')->widget(DateControl::classname(),
                    [
                        'type'=>DateControl::FORMAT_DATE,
                        //'displayFormat'=> 'php: d-m-yy',
                        
                        
                    ]
             );
            ?>

            <?php 
                echo $form->field($model, 'dateout')->widget(DateControl::classname(),
                    [   
                        'value'=>'20-11-2015',
                        //'attribute'=>'datein',
                        'type'=>DateControl::FORMAT_DATE,
                        'displayFormat'=> 'php: d-m-yy',
                    ]
             );      
            ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
    </div>
</div>
