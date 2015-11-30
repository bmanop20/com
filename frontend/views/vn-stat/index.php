<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
//use frontend\models\VnStat;
use frontend\models\Pttype;
//use app\components\GetValue;
/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\VnStatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รายการเรียกเก็บผู้ป่วยนอก';
$this->params['breadcrumbs'][] = $this->title;
//print_r($pttype);


?>
<div class="vn-stat-index">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
        <?= Html::a('Create Vn Stat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        
        'pjax'=>true,
        'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
        'headerRowOptions'=>['class'=>'kartik-sheet-style'],
        'filterRowOptions'=>['class'=>'kartik-sheet-style'],
        'columns' => [
            [   'class' => 'kartik\grid\SerialColumn',
                'contentOptions'=>['class'=>'kartik-sheet-style'], 
            ],
             
            //'vn',
            //'vstdate',
            [
                //'class'=> 'kartik\daterange\DateRangePicker',
                'filterType' => GridView::FILTER_DATE_RANGE,
                'attribute'=>'vstdate', 
                'label'=>'Vist Date',
                'width'=>'150px',
                //'language'=>'th',
           
                
            ],
            [
                'attribute'=>'cid',
                'label'=>'หมายเลขบัตรประชาชน',
                'width'=>'150px',
            ],
            [
                'attribute'=>'hn',
                'label'=>'HN',
                'width'=>'80px',
                ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                //'label'=>'Name',
                'attribute'=>'fullname',
                'label'=> 'ชื่อ - สกุล',
                //'value'=>function($model){return $model->getName($model->hn);}
            ],
            [
                //'label'=>'Birthday',
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'attribute' => 'birthday',
                'width'=>'90px',
                //'value'=>function($model){return $model->getBirthday($model->hn);}
            ],        
            [
                'attribute'=>'pttype',
                'label'=>'สิทธิการรักษา',
                'value'=> function($data){ 
                                   
                                  //$a = $pttype->getPttype();
                                  return Pttype::getPttype($data['pttype']);                      
                },
                'filterType'=>GridView::FILTER_SELECT2,
                'width'=>'290px',
                'pageSummary'=>'Total',
                //'footer'=>true,
                'filter'=>ArrayHelper::map(frontend\models\Pttype::find()->orderBy('pttype')->asArray()->all(), 'pttype', 'name'),  
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                        ],
                        'filterInputOptions'=>['placeholder'=>'สิทธิการรักษา'],
                        'format'=>'raw'       
                        
            ],        
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'vAlign'=>'middle',
                'hAlign'=>'right',
                'label'=> 'เรียกเก็บ',
                'attribute'=>'amount',
                //'value'=> function($model){return $model->getAmount($model->vn);},
                'format'=>['decimal', 2],
                'pageSummary'=>true,
                'footer'=>true
                
                
            ],
//            [
//                'label'=>'paid_money',
//                //'value'=>function($model){return $model->getPay($model->vn) ;},
//                'vAlign'=>'middle',
//                'hAlign'=>'right',
//                'attribute'=>'paid_money',
//                'format'=>['decimal', 2],
//                'mergeHeader'=>true,
//                //'visible'=>true,
//                //'hidden'=>true,
//            ],
//            [
//                'label'=>'remain_money',
//                //'value'=>function($model){return $model->getPay($model->vn) ;},
//                'vAlign'=>'middle',
//                'hAlign'=>'right',
//                'attribute'=>'remain_money',
//                'format'=>['decimal', 2],
//                'mergeHeader'=>true,
//                //'visible'=>true,
//                //'hidden'=>true,
//            ], 
            [
                'label'=>'ชำระแล้ว',
                //'value'=>function($model){return $model->getPay($model->vn) ;},
                'vAlign'=>'middle',
                'hAlign'=>'right',
                'attribute'=>'rcpt_money',
                'format'=>['decimal', 2],
                'mergeHeader'=>true,
                'pageSummary'=>true,
                'footer'=>true
                //'visible'=>true,
                //'hidden'=>true,
            ], 
//            [
//                'label'=>'ค้างชำระ',
//                //'value'=>function($data){return $data['paid_money'] - $data['rcpt_money'];},
//                'vAlign'=>'middle',
//                'hAlign'=>'right',
//                'attribute'=>'rcpt_money',
//                'format'=>['decimal', 2],
//                'mergeHeader'=>true,
//                //'visible'=>true,
//                //'hidden'=>true,
//            ],
             [
                'label'=>'ค้างชำระ',
                'value'=>function($data){return $data['paid_money'] - $data['rcpt_money'];},
                'vAlign'=>'middle',
                'hAlign'=>'right',
                'attribute'=>'total',
                'format'=>['decimal', 2],
                'mergeHeader'=>true,
                'pageSummary'=>true,
                'footer'=>true
                //'visible'=>true,
                //'hidden'=>true,
            ],
             
                        
            //'lastvisit',
            // 'accident_code',
            // 'dx_doctor',
            // 'dx0',
            // 'dx1',
            // 'dx2',
            // 'dx3',
            // 'dx4',
            // 'dx5',
            // 'sex',
            // 'age_y',
            // 'age_m',
            // 'age_d',
            // 'aid',
            // 'moopart',
            // 'count_in_month',
            // 'count_in_year',
            // 'pttype',
            // 'income',
            // 'paid_money',
            // 'remain_money',
            // 'uc_money',
            // 'item_money',
            // 'dba',
            // 'spclty',
            // 'vstdate',
            // 'op0',
            // 'op1',
            // 'op2',
            // 'op3',
            // 'op4',
            // 'op5',
            // 'rcp_no',
            // 'print_count',
            // 'print_done',
            // 'pttype_in_region',
            // 'pttype_in_chwpart',
            // 'pcode',
            // 'hcode',
            // 'inc01',
            // 'inc02',
            // 'inc03',
            // 'inc04',
            // 'inc05',
            // 'inc06',
            // 'inc07',
            // 'inc08',
            // 'inc09',
            // 'inc10',
            // 'inc11',
            // 'inc12',
            // 'inc13',
            // 'inc14',
            // 'inc15',
            // 'inc16',
            // 'hospmain',
            // 'hospsub',
            // 'pttypeno',
            // 'pttype_expire',
            // 'cid',
            // 'main_pdx',
            // 'inc17',
            // 'inc_drug',
            // 'inc_nondrug',
            // 'pt_subtype',
            // 'rcpno_list',
            // 'ym',
            // 'node_id',
            // 'ill_visit',
            // 'count_in_day',
            // 'pttype_begin',
            // 'lastvisit_hour',
            // 'rcpt_money',
            // 'discount_money',
            // 'old_diagnosis',
            // 'debt_id_list',
            // 'vn_guid',
            // 'lastvisit_vn',
            // 'hos_guid',

            //['class' => 'yii\grid\ActionColumn'],
//  
             
        ],    'toolbar'=>[               
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
             'showPageSummary'=>true,
             'exportConfig'=>[GridView::EXCEL => ['label'=>'Save as Excel'],],
             'condensed'=>true,
                        'panel'=>[
                'type'=>GridView::TYPE_PRIMARY,
                'heading'=>'สรุปรายการ',
            ],
    ]); ?>

</div>
