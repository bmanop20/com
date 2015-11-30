<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use kartik\daterange\DateRangePicker;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\DtmainSearchController */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'รายงานการมารับบริการ');
$this->params['breadcrumbs'][] = $this->title;

//$js = "$('#select_doctor').on('click',function(){
//        $.post(\"dtmain\",{
//            pk : $('#select_doctor').select2('value')
//        },function(){
//            $.pjax.reload({container:'#w0-container'});
//        }
//        )});";

$js = " $('#select_doctor').select2().on('change',function(){
        //alert($('#select_doctor').select2().val());
        $.post(\'doctor\');
        $.pjax.reload({container:'#w0-container'});
    });
        ";
//$this->registerJs($js,$this::POS_READY);
?>
<div class="dtmain-index">

<!--    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
-->
    <p>
        <?php 
            //Html::a(Yii::t('app', 'Create Dtmain'), ['create'], ['class' => 'btn btn-success']) 
        
            echo Select2::widget([
                'name'=>'doctor',
                'id'=>'select_doctor',
                'data'=>  ArrayHelper::map(frontend\models\Doctor::find()->where('position_id in (:d1,:d2,:d3)',[':d1'=>4,':d2'=>6,':d3'=>20,])->asArray()->all(),'code','name'),
                'options'=>[
                    'placeholder'=>'ผู้ให้บริการ',
                    //'multiple'=>true,
                    ],
                'pluginEvents'=>[
                    'change'=>'function(val){
                         $.post(\'?r=dtmain/doctor\',{doctor:val.val},function(){
                         $.pjax.reload({container:\'#gridview1\'});
                         });
                         
                    }',
                ],
                'pluginOptions'=>[
                  'allowClear'=>true,
                  'width'=>'250px',
                ],
            ]);
        ?>
    </p>

    <?php
        //print_r($doctor);
        echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax'=>true,
         'pjaxSettings' =>[
        'neverTimeout'=>true,
        'options'=>[
                'id'=>'gridview1',
            ]
        ],    
        'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
        'headerRowOptions'=>['class'=>'kartik-sheet-style'],
        'filterRowOptions'=>['class'=>'kartik-sheet-style'],
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],
            [
                'filterType' => GridView::FILTER_DATE_RANGE,
                'attribute' => 'vstdate',
                'label'=>'vstdate',
                'value'=>' ',
                'width'=>'10px',
            ],
            [
                'attribute'=>'fname',
                'width'=>'250px',
                'label'=>'ผู้ให้บริการ',
//                'value'=>function($model){
//                    return $model->fname;
//                },
             
                //'format'=>'raw',
                'group'=>true,
                'mergeHeader'=>true,
                
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'code',
                
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'name',
            ],
            
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'jan',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'feb',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'mar',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'apr',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'may',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'jun',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'jul',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'aug',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'sep',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'oct',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'nov',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'dece',
                'label'=>'dec',
            ],
           

            //['class' => 'yii\grid\ActionColumn'],
            
        ],'toolbar'=>[               
                 '{toggleData}',
                 '{export}',
             ],
             'export'=>[
                    'fontAwesome'=>true
                ],         
             'bordered'=>true,
             'responsive'=>true,
             'hover'=>true,
             'condensed'=>true,
             'persistResize'=>false,
             //'showPageSummary'=>true,
             'exportConfig'=>[GridView::EXCEL => ['label'=>'Save as Excel'],],
             'condensed'=>true,
                        'panel'=>[
                'type'=>GridView::TYPE_PRIMARY,
                'heading'=>'สรุปรายการ',
            ],
    ]); ?>

</div>
