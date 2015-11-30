<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use frontend\models\Pttype;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\IptSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รายการเรียกเก็บผู้ป่วยใน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipt-index">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
        <?= Html::a('Create Ipt', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax'=>true,
        'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
        'headerRowOptions'=>['class'=>'kartik-sheet-style'],
        'filterRowOptions'=>['class'=>'kartik-sheet-style'],
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn',
                'contentOptions'=>['class'=>'kartik-sheet-style'], ],

            
            [
                'attribute'=>'an',
                'label'=>'AN',
                'width'=>'60px',
            ],
            [
               'attribute' => 'admdoctor',
               'label'=> 'Admin Doctor',
               'width'=>'200px',
               'value'=>function($model) use ($doctor){
                    
                    return $doctor->getDName($model->admdoctor);
               },
            ],
            //'dchdate',
            [
             'filterType' => GridView::FILTER_DATE_RANGE,
             'attribute'=>'regdate',
             'label'=>'Admit Date',
             'width'=>'150px',
            ],
            [
             'filterType' => GridView::FILTER_DATE_RANGE,
             'attribute'=>'dchdate',
             'label'=>'Dch Date',
             'width'=>'150px',
            ],
            [
                'class'=> 'kartik\grid\FormulaColumn',
                'mergeHeader'=>true,
                'label'=>'Name',
                'width'=>'260px',
                'value'=>  function($model) use($patient){
                    return $patient->getPName($model->hn);
                },
            ],
            [
                'label'=>'สิทธิการรักษา',
                'attribute'=>'pttype',
                'pageSummary'=>'Total',
                'value'=> function($data){ 
                                   
                                  //$a = $pttype->getPttype();
                                  return Pttype::getPttype($data['pttype']);                      
                },
                'filterType'=>GridView::FILTER_SELECT2,
                'width'=>'290px',
                'filter'=>ArrayHelper::map(frontend\models\Pttype::find()->orderBy('pttype')->asArray()->all(), 'pttype', 'name'),  
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                        ],
                        'filterInputOptions'=>['placeholder'=>'สิทธิการรักษา'],
                        'format'=>'raw' 
            ],            
            [
                'label'=>'เรียกเก็บ',
                'value'=>function($model){
                    return $model->getSummery($model->an);
                },
            ],            
            [
                'label'=>'ชำระแล้ว',
            ],            
            [
                'label'=>'ค้างชำระ',
            ],
                        
                       
            //'dchstts',
            // 'dchtype',
            // 'dthdiagdct',
            // 'hn',
            // 'ivstist',
            // 'ivstost',
            // 'lockdx',
            // 'prediag',
            // 'pttype',
            // 'regdate',
            // 'regtime',
            // 'rfrics',
            // 'rfrilct',
            // 'rfrocs',
            // 'rfrolct',
            // 'spclty',
            // 'vn',
            // 'ward',
            // 'rcpt_disease',
            // 'dch_doctor',
            // 'ipt_type',
            // 'iref_type',
            // 'ipacc',
            // 'act_money_limit',
            // 'drg',
            // 'mdc',
            // 'rw',
            // 'wtlos',
            // 'ot',
            // 'result',
            // 'gravidity',
            // 'parity',
            // 'living_children',
            // 'rxdoctor',
            // 'staff',
            // 'bw',
            // 'first_ward',
            // 'refer_out_number',
            // 'incharge_doctor',
            // 'an_guid',
            // 'an_lock',
            // 'ergent',
            // 'chart_state',
            // 'receive_chart_date_time',
            // 'receive_chart_staff',
            // 'receive_chart_note',
            // 'adjrw',
            // 'ipt_spclty',
            // 'finance_lock',
            // 'last_check_autoincome',
            // 'admit_fee_guid',
            // 'leave_home_day',
            // 'operation_status',
            // 'finance_summary_date',
            // 'estimate_discharge_date',
            // 'old_cause_revisit',
            // 'finance_transfer',
            // 'provision_dx',
            // 'dw_hhc_list_id',
            // 'hos_guid',
            // 'chart_stat',
            // 'rcv_date',
            // 'rcv_from',
            // 'hos_guid_ext',
            // 'body_height',
            // 'update_datetime',
            // 'cur_dep_code',
            // 'finance_status_flag',
            // 'ipt_admit_type_id',
            // 'no_visit',
            // 'no_food',
            // 'confirm_discharge',
            // 'lab_status',
            // 'xray_status',
            // 'grouper_version',
            // 'grouper_err',
            // 'grouper_warn',
            // 'grouper_actlos',
            // 'auto_charge_amount',

            //['class' => 'yii\grid\ActionColumn'],
        ],
        'toolbar'=>[               
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
