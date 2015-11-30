<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\VnStat */

$this->title = 'Update Vn Stat: ' . ' ' . $model->vn;
$this->params['breadcrumbs'][] = ['label' => 'Vn Stats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->vn, 'url' => ['view', 'id' => $model->vn]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vn-stat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
