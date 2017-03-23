<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
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

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '主管', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="managertbl-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

        <?=
        //点击通过按钮，找approve1方法 
        Html::a('通过', ['approve1', 'id' => $model->id], [
            'class' => 'btn btn-primary',
            'data' => [
                'confirm' => '您确定要通过吗?',
                'method' => 'post',
            ],
        ]) ?>

        <?= 
        //点击不通过按钮，找approve2方法 
        Html::a('不通过', ['approve2', 'id' => $model->id], [
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
