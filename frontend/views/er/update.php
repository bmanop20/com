<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ErRegist */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Er Regist',
]) . ' ' . $model->vn;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Er Regists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->vn, 'url' => ['view', 'id' => $model->vn]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="er-regist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
