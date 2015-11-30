<?php

use yii\helpers\Html;
//use yii\grid\GridView;
//use yii\widgets\ListView;
use kartik\grid\GridView;
use frontend\controllers\ComDepController;
use frontend\models\Department;
use yii\helpers\ArrayHelper;
use frontend\models\Computer;
$exportConfig = ([
            //GridView::CSV   => ['label' => 'Save as CSV'],
            //GridView::HTML => [// html settings],
            //GridView::PDF   => ['label' => 'Save as PDF'],
            GridView::EXCEL => ['label'=>'Save as Excel'],
            ]);

/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\ComDepSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รายการ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box">


    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php 
        //Html::a('Create Com Dep', ['create'], ['class' => 'btn btn-success']); 
        ?>
    </p>
    <div class="box-body">
        <?php    
//        GridView::widget([
//            'dataProvider' => $dataProvider,
//            //'filterModel' => $searchModel,
//            'columns' => [
//                //['class' => 'yii\grid\SerialColumn'],
//                //'id',
//                'code',
//                'name',
//                'datein',
//                //'dateout',
//
//                ['class' => 'yii\grid\ActionColumn'],
//            ],
//        ]); 
        
         echo GridView::widget([
             'dataProvider'=>$dataProvider,
             'filterModel'=>$searchModel,
             'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
            'headerRowOptions'=>['class'=>'kartik-sheet-style'],
            'filterRowOptions'=>['class'=>'kartik-sheet-style'],
            'pjax'=>true, // pjax is set to always true for this demo
             'columns'=>[
                    [
                   'class' => 'yii\grid\SerialColumn',
                   'contentOptions'=>['class'=>'kartik-sheet-style'],
                   //'width' => '36px',
                   //'vAlign'=>'middle',
                   //'hAlign'=>'center',
                   'header'=> '',
                   'headerOptions'=>['class'=>'kartik-sheet-style'],
                   'options'=>['style'=>'width:40px'],
                    
               ],
                 //'id',
               
                [
                    'attribute'=>'com_id',
                    //'header' =>'แผนก',
                    'width'=>'350px',
                    //'hAlign'=>'center',
                    'value' => function($model){ return $model->getComCode($model->com_id); },
                    'filterType'=>GridView::FILTER_SELECT2,
                    'filter'=>ArrayHelper::map(Computer::find()->orderBy('id')->asArray()->all(), 'id', 'code'),    
                    'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                        ],
                        'filterInputOptions'=>['placeholder'=>'หมายเลข'],
                        'format'=>'raw'       
                        ],        
               
                [
                    'attribute'=>'dep_id',
                    //'header' =>'แผนก',
                    'width'=>'250px',
                    //'hAlign'=>'center',
                    'value' => function($model){ return $model->getDepName($model->dep_id); },
                    'filterType'=>GridView::FILTER_SELECT2,
                    'filter'=>ArrayHelper::map(Department::find()->orderBy('id')->asArray()->all(), 'id', 'name'),    
                    'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                        ],
                        'filterInputOptions'=>['placeholder'=>'แผนก'],
                        'format'=>'raw'       
                        ],
                //'datein',
                [
                    'class'=> 'kartik\grid\FormulaColumn',
                    'attribute' => 'datein',
                    'hAlign'=>'center',
                    'mergeHeader'=>true,
                    'width'=>'150px',
                ],
                 [

                     'class' => '\kartik\grid\ActionColumn',
                     'updateOptions'=>['label'=>''],
                     'deleteOptions'=>['label'=>''],
                    
                 ],
                 
                ],
             'toolbar'=>[
                 [
                     'content'=> 
                     //Html::button('<i class="glyphicon glyphicon-plus"></i>',['type'=>'button','class'=>'btn btn-success']),
                     Html::a('<i class="glyphicon glyphicon-plus"></i>', ['create'], ['data-pjax'=>0, 'class'=>'btn btn-default','title'=>'เพิ่มรายการใหม่'])
                     ],
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
             'exportConfig'=>$exportConfig,
             'persistResize'=>false,
             //'showPageSummary'=>true,
             'panel'=>[
                'type'=>GridView::TYPE_PRIMARY,
                'heading'=>'รายการคอมพิวเตอร์แยกฝ่าย',
            ],
         ]);
        ?>
    </div>
</div>
