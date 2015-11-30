<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\ComType;
/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\ComSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$exportConfig = ([
            //GridView::CSV   => ['label' => 'Save as CSV'],
            //GridView::HTML => [// html settings],
            //GridView::PDF   => ['label' => 'Save as PDF'],
            GridView::EXCEL => ['label'=>'Save as Excel'],
            ]);

$this->title = 'Computers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(' เพิ่มรายการใหม่ ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
            'headerRowOptions'=>['class'=>'kartik-sheet-style'],
            'filterRowOptions'=>['class'=>'kartik-sheet-style'],
        'pjax'=>true,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'contentOptions'=>['class'=>'kartik-sheet-style'],
                //'width' => '36px',
                'header'=> '',
                'headerOptions'=>['class'=>'kartik-sheet-style'],
                'options'=>['style'=>'width:40px'],
            ],

            //'id',
            [
                'attribute'=>'code',
                //'value'=>$model->code,
                'filterType'=>GridView::FILTER_SELECT2,
                'filter'=>ArrayHelper::map(frontend\models\Computer::find()->groupBy('code')->asArray()->all(), 'code', 'code'),  
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                        ],
                        'filterInputOptions'=>['placeholder'=>'หมายเลขครุภัณฑ์'],
                        'format'=>'raw'       
                        ],
           
            //'com_type_id',
            [
                'attribute'=>'com_type_id',
                'value'=>function($model){ return $model->getType($model->com_type_id); },
                'filterType'=>GridView::FILTER_SELECT2,
                'filter'=>ArrayHelper::map(ComType::find()->orderBy('id')->asArray()->all(), 'id', 'name'),  
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                        ],
                        'filterInputOptions'=>['placeholder'=>'ชนิด'],
                        'format'=>'raw'       
                        ],           
            
            //'cpu_type',
            [
                'attribute'=>'cpu_type',
                //'value'=>$model-> },
                'filterType'=>GridView::FILTER_SELECT2,
                'filter'=>ArrayHelper::map(frontend\models\Computer::find()->groupBy('cpu_type')->asArray()->all(), 'cpu_type', 'cpu_type'),  
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                        ],
                        'filterInputOptions'=>['placeholder'=>'CPU'],
                        'format'=>'raw'       
                        ],   
            
            //'ram_type',
                               [
                'attribute'=>'ram_type',
                //'value'=>$model-> },
                'filterType'=>GridView::FILTER_SELECT2,
                'filter'=>ArrayHelper::map(frontend\models\Computer::find()->groupBy('ram_type')->asArray()->all(), 'ram_type', 'ram_type'),  
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                        ],
                        'filterInputOptions'=>['placeholder'=>'Ram'],
                        'format'=>'raw'       
                        ], 
            //'cpuspeed',
            [
                
                'class'=> 'kartik\grid\FormulaColumn',
                'attribute' => 'cpuspeed',
                'mergeHeader'=>true,
            ],
            // 'ramspeed',
            // 'os',
            // 'arch_type_id',
            // 'brand',
             //'code',

            [

                     'class' => '\kartik\grid\ActionColumn',
                     'updateOptions'=>['label'=>''],
                     'deleteOptions'=>['label'=>''],
                    
                 ],

        ],
             'bordered'=>true,
             'responsive'=>true,
             'hover'=>true,
             'exportConfig'=>$exportConfig,
             'condensed'=>true,
                        'panel'=>[
                'type'=>GridView::TYPE_PRIMARY,
                'heading'=>'สรุปรายการ',
            ],
    ]); 
    
    ?>

</div>
