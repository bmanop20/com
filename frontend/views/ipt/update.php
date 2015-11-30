<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ipt */

$this->title = 'Update Ipt: ' . ' ' . $model->an;
$this->params['breadcrumbs'][] = ['label' => 'Ipts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->an, 'url' => ['view', 'id' => $model->an]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ipt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
