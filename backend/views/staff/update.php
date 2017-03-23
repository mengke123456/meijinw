<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Stafftbl */

$this->title = '修改职员信息: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '职员管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="stafftbl-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
