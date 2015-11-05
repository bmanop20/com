<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ComDep */

$this->title = 'Update Com Dep: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Com Deps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="com-dep-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
