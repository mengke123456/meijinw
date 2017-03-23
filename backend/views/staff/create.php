<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Stafftbl */

$this->title = '新增职员';
$this->params['breadcrumbs'][] = ['label' => '职员管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stafftbl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
