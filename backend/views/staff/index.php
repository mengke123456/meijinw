<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\StafftblSearch;
use common\models\ExaminationTypetbl;
use common\models\DepartmentTypetbl;
use common\models\PositionTypetbl;
use common\models\EducationTypetbl;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StafftblSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '职员管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stafftbl-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p><?= Html::a('新增职员', ['create'], ['class' => 'btn btn-success']) ?>
        <?=
        //增加删除按钮
        Html::a("批量删除", "javascript:void(0);", ["class" => "btn btn-success gridview"])
        ?></p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        //gridview设置options时增加一个id 这里我们命名grid 
        "options" => ["class" => "grid-view", "style" => "overflow:auto", "id" => "grid"],
        //2、columns增加选项复选框，批量删除必然不可少了复选框操作，这里我们的name值设定为id,方便对数据操作 
        'columns' => [
            [
                "class" => "yii\grid\CheckboxColumn",
                "name" => "id",
            ],
            //'id',
            ['attribute' => 'id',
                'contentOptions' => ['width' => '30px'],
            ],
            'mobile',
            //'name',
            ['attribute' => 'name',
                'contentOptions' => ['width' => '30px'],
            ],
            //'contentOptions'=>['width'=>'30px'],设置宽度      
            //部门下拉查询
            ['attribute' => 'department',
                'value' => 'departmenttypetbl.department_type',
                'filter' => DepartmentTypetbl::find()
                        ->select(['department_type', 'id'])
                        ->indexBy('id')
                        ->column(),
            ],
            //职位下拉查询
            //'position',
            ['attribute' => 'position',
                'value' => 'positiontypetbl.position_type',
                'filter' => PositionTypetbl::find()
                        ->select(['position_type', 'id'])
                        ->indexBy('id')
                        ->column(),
            ],
            //'QQ',
            ['attribute' => 'QQ',
                'contentOptions' => ['width' => '40px'],
            ],
            //'email:email',
            // 'emergency_contact_no',
            // 'emergency_contact',
            // 'addr',
            // 'login_pwd',
            // 'gmt_create',
            // 'gmt_modified',
            // 'is_del',
            // 'bank',
            // 'acct_id',
            // 'hiredate',
            //'expiration',
            //修改时间格式Y-m-d
            ['attribute' => 'expiration',
                'format' => ['date', 'php:Y-m-d'],
            ],
            // 'other',
            // 'photo',
            // 'pic_path',
            //审核下拉菜单
            //'examination',
            ['attribute' => 'examination',
                'value' => 'examinationtypetbl.examination_type',
                'filter' => ExaminationTypetbl::find()
                        ->select(['examination_type', 'id'])
                        ->indexBy('id')
                        ->column(),
                //判断审核状态，修改审核=1的颜色
                'contentOptions' =>
                function($model) {
                    return ($model->examination == 1) ? ['class' => 'bg-danger'] : [];
                }
            ],
            //学历下拉
            //'education',
            ['attribute' => 'education',
                'value' => 'educationtypetbl.education_type',
                'filter' => EducationTypetbl::find()
                        ->select(['education_type', 'id'])
                        ->indexBy('id')
                        ->column(),
            ],
            // 'native_place',
            //'state',
            //'id_no',
            ['attribute' => 'id_no',
                'contentOptions' => ['width' => '50px'],
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
  
