<?php

use yii\helpers\Html;
use common\models\Stafftbl;
use common\models\StafftblSearch;

/* @var $this yii\web\View */
/* @var $model common\models\Stafftbl */

$this->title = '在职员工';
$this->params['breadcrumbs'][] = ['label' => '在职员工', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stafftbl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
