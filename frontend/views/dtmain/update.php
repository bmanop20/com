<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dtmain */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Dtmain',
]) . ' ' . $model->dtmain_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dtmains'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dtmain_id, 'url' => ['view', 'id' => $model->dtmain_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="dtmain-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
