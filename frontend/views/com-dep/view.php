<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ComDep */
//print_r($model);
$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Com Deps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="com-dep-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            [
                'attribute'=>'com_id',
                'value'=>$model->getComCode($model->com_id),
            ],
            [
                'attribute'=>'dep_id',
                'value'=>$model->getDepName($model->dep_id),
            ],
//            'datein',
//            'dateout',
        ],
    ]) ?>

</div>
