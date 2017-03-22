<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Managertbl */

$this->title = '新增主管';
$this->params['breadcrumbs'][] = ['label' => '主管', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="managertbl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
