<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\ErSearchController */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'กลุ่มงานแพทย์ฉุกเฉิน P4P การทำหัตถการ');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="er-regist-index">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        
    </p>

    <?php 
        echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax'=>true,
         'pjaxSettings' =>[
        'neverTimeout'=>true,
        'options'=>[
                'id'=>'w0',
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
                'attribute'=>'doctor',
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
                'attribute'=>'n1',
                'label'=>'รายการหัตถการ',
            ],
            
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'jan',
                'vAlign'=>'middle',
                'hAlign'=>'right',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'feb',
                'vAlign'=>'middle',
                'hAlign'=>'right',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'mar',
                'vAlign'=>'middle',
                'hAlign'=>'right',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'apr',
                'vAlign'=>'middle',
                'hAlign'=>'right',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'may',
                'vAlign'=>'middle',
                'hAlign'=>'right',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'jun',
                'vAlign'=>'middle',
                'hAlign'=>'right',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'jul',
                'vAlign'=>'middle',
                'hAlign'=>'right',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'aug',
                'vAlign'=>'middle',
                'hAlign'=>'right',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'sep',
                'vAlign'=>'middle',
                'hAlign'=>'right',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'oct',
                'vAlign'=>'middle',
                'hAlign'=>'right',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'nov',
                'vAlign'=>'middle',
                'hAlign'=>'right',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'dece',
                'label'=>'dec',
                'vAlign'=>'middle',
                'hAlign'=>'right',
            ],
                        [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute'=>'c',
                'label'=>'Total',
                'vAlign'=>'middle',
                'hAlign'=>'right',
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
