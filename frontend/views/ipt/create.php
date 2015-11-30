<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Ipt */

$this->title = 'Create Ipt';
$this->params['breadcrumbs'][] = ['label' => 'Ipts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ipt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
