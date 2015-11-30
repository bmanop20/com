<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Dtmain */

$this->title = Yii::t('app', 'Create Dtmain');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dtmains'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dtmain-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
