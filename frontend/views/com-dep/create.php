<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ComDep */

$this->title = 'Create Com Dep';
$this->params['breadcrumbs'][] = ['label' => 'Com Deps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="com-dep-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
