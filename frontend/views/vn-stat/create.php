<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\VnStat */

$this->title = 'Create Vn Stat';
$this->params['breadcrumbs'][] = ['label' => 'Vn Stats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vn-stat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
