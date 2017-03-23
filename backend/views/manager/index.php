<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Managertbl;
use common\models\ManagerSearch;
use common\models\EducationTypetbl;
use common\models\DepartmentTypetbl;
use common\models\PositionTypetbl;
use common\models\StateTypetbl;
use common\models\ExaminationTypetbl;
use common\models\AdoptTypetbl;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ManagerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '主管';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="managertbl-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新增主管', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('重置搜索', ['index'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['attribute'=>'id',
            //  'contentOptions'=>['width'=>'60px',],
            // ],
            ['attribute'=>'name',
             'contentOptions'=>['width'=>'60px',],
            ],
            [
            //主表的字段
            'attribute'=>'department',
             'label'=>'部门',
            //附表的字段
             'value'=>'departmenttypetbl.department_type',
             'filter'=>DepartmentTypetbl::find()
                    ->select(['department_type','id'])
                    ->indexBy('id')
                    ->column(),
             'contentOptions'=>['width'=>'60px',],
            ],

            [
            //主表的字段
            'attribute'=>'position',
            'label'=>'职位',
            //附表的字段
            'value'=>'positiontypetbl.position_type',
            'filter'=>PositionTypetbl::find()
                    ->select(['position_type','id'])
                    ->indexBy('id')
                    ->column(),
            'contentOptions'=>['width'=>'87px',],
            ],
            'mobile',
            // 'QQ',
            // 'email:email',
            // 'emergency_contact_no',
            // 'emergency_contact',
            //'id_no',
            ['attribute'=>'id_no',
            //输出beginning方法
            //'value'=>'beginning',
            ],
            // 'native_place',
            //'education',
            ['attribute'=>'education',
             'label'=>'学历',
             'value'=>'educationtypetbl.education_type',
             'filter'=>EducationTypetbl::find()
                    ->select(['education_type','id'])
                    ->indexBy('id')
                    ->column(),
             'contentOptions'=>['width'=>'60px',],
            ],
            // 'addr',
            // 'Ukey_info',
            // 'login_pwd',
            // ['attribute'=>'gmt_create',
            //  'format'=>['date','php:Y-m-d'],
            // ],
             //$model->time = datepicker('Y-m-d H:i:s');
            // ['attribute'=>'gmt_modified',
            //  'format'=>['date','php:Y-m-d'],
            //   'contentOptions'=>['width'=>'90px',],
            // ],
            // 'bank',
            // 'acct_id',
            // 'hiredate',
            // 'expiration',
            // 'medical_examination',
            // 'other',
            // 'photo',
            // 'pic_path',
            ['attribute'=>'state',
             'label'=>'状态',
             'value'=>'statetypetbl.state_type',
             'filter'=>StateTypetbl::find()
                    ->select(['state_type','id'])
                    ->indexBy('id')
                    ->column(),
             'contentOptions'=>['width'=>'78px',],
            ],
            ['attribute'=>'examination',
             'label'=>'审核',
             'value'=>'examinationtypetbl.examination_type',
             'filter'=>ExaminationTypetbl::find()
                    ->select(['examination_type','id'])
                    ->indexBy('id')
                    ->column(),
             
             'contentOptions'=>
             function($model)
             {
                return ($model->examination==1)?[
                'class'=>'bg-danger','width'=>'74px']:[];
             }
            ],

            ['attribute'=>'adopt',
             'label'=>'通过状态',
             'value'=>'adopttypetbl.adopt_type',
             'filter'=>AdoptTypetbl::find()
                    ->select(['adopt_type','id'])
                    ->indexBy('id')
                    ->column(),
            'contentOptions'=>
             function($model)
             {
                return ($model->adopt==1)?[
                'class'=>'bg-primary','width'=>'78px']:[];
             }
            ],

            // 'is_del',
            [
            'class' => 'yii\grid\ActionColumn',
            'contentOptions'=>['width'=>'85px',],
            'template'=>'{view} {update} {approve}',
            'buttons'=>
                [
                'approve'=>function($url,$model,$key)
                        {
                            $options=[
                                'title'=>Yii::t('yii', '审核'),
                                'aria-label'=>Yii::t('yii','审核'),
                                'data-confirm'=>Yii::t('yii','你确定审核通过这条评论吗？'),
                                'data-method'=>'post',
                                'data-pjax'=>'0',
                                    ];
                            return Html::a('<span class="glyphicon glyphicon-check"></span>',$url,$options);
                            
                        },
                ],   
            ],

        ],
    ]); ?>
</div>
