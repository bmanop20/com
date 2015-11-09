<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\controllers\ComSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Computers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Computer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'contentOptions'=>['class'=>'kartik-sheet-style'],
                'width' => '36px',
                'header'=> '',
                'headerOptions'=>['class'=>'kartik-sheet-style']
            ],

            'id',
            'com_type_id',
            'cpu_type',
            'ram_type',
            'cpuspeed',
            // 'ramspeed',
            // 'os',
            // 'arch_type_id',
            // 'brand',
             'code',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
