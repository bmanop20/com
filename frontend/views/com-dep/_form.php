<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Computer;
use yii\helpers\ArrayHelper;
use app\models\Department;
use kartik\datecontrol\DateControl;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model frontend\models\ComDep */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="box box-info">
    <div class="box-header with-border">
        
            <?php $form = ActiveForm::begin(); ?>

            <?php 

               
                $dataCategory = ArrayHelper::map(Computer::find()->select(['id','concat("COMID: ",id, " หมายเลข: " ,code) as name'])->asArray()->all(), 'id', 'name');
       
                echo $form->field($model,'com_id')->widget(Select2::classname(),
                        [
                            'data'=>$dataCategory,
                            'options'=>['placeholder'=>'----- อุปกรณ์คอมพิวเตอร์ -------']
                            
                        ]);
            ?>

            <?php 
              
                $dataCategory = ArrayHelper::map(Department::find()->asArray()->all(), 'id', 'name');
                
                echo $form->field($model,'dep_id')->widget(Select2::classname(),
                        [
                            'data'=>$dataCategory,
                            'options'=>['placeholder'=>'----- เลือกฝ่าย -------']
                            
                        ]);
            ?>


            <?php 
                
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
