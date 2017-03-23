<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Managertbl;
use backend\models\ManagerSearch;
use backend\models\EducationTypetbl;
use backend\models\DepartmentTypetbl;
use backend\models\PositionTypetbl;
use backend\models\StateTypetbl;
use backend\models\ExaminationTypetbl;
use backend\models\AdoptTypetbl;
/* @var $this yii\web\View */
/* @var $model backend\models\Managertbl */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '主管', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="managertbl-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('通过', ['approve1', 'id' => $model->id], [
            'class' => 'btn btn-primary',
            'data' => [
                'confirm' => '您确定要通过吗?',
                'method' => 'post',
            ],
        ]) ?>



        <?= Html::a('不通过', ['approve2', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '您确定要不通过吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // ['attribute'=>'id',
            // ],
            ['attribute'=>'name',
            ],
            [
            //主表的字段
            'attribute'=>'departmenttypetbl.department_type',
             'label'=>'部门',
            ],

            [
            //主表的字段
            'attribute'=>'positiontypetbl.position_type',
            'label'=>'职位',
            ],
            'mobile',
            'QQ',
            'email:email',
            'emergency_contact_no',
            'emergency_contact',
            ['attribute'=>'id_no',
            //输出beginning方法
            //'value'=>'beginning',
            ],
            'native_place',
            //'education',
            ['attribute'=>'educationtypetbl.education_type',
             'label'=>'学历',
            ],
            'addr',
            //'Ukey_info',
            'login_pwd',
            ['attribute'=>'gmt_create',
             'format'=>['date','php:Y-m-d'],
            ],
            ['attribute'=>'gmt_modified',
             'format'=>['date','php:Y-m-d'],
            ],
            'bank',
            'acct_id',
            'hiredate',
            'expiration',
            'medical_examination',
            'other',
            'photo',
            //'pic_path',
            ['attribute'=>'statetypetbl.state_type',
             'label'=>'状态',
            ],
            ['attribute'=>'examinationtypetbl.examination_type',
             'label'=>'审核状态'
            ],
            ['attribute'=>'adopttypetbl.adopt_type',
             'label'=>'通过状态',
            ],
            // 'is_del',
        ],
    ])?>

</div>
