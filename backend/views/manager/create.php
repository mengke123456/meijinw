<?php

use yii\helpers\Html;
use common\models\Managertbl;
use common\models\ManagerSearch;
use common\models\EducationTypetbl;
use common\models\DepartmentTypetbl;
use common\models\PositionTypetbl;
use common\models\StateTypetbl;
use common\models\ExaminationTypetbl;
use common\models\AdoptTypetbl;
/* @var $this yii\web\View */
/* @var $model common\models\Managertbl */

$this->title = '新增主管';
$this->params['breadcrumbs'][] = ['label' => '主管', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="managertbl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
