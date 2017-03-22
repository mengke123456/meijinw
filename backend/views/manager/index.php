<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\DepartmentTypetbl;
use app\models\EducationTypetbl;
use app\models\PositionTypetbl;
use app\models\StateTypetbl;
use app\models\ExaminationTypetbl;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ManagertblSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '人事主管';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="managertbl-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);   ?>

    <p>
        <?= Html::a('新增主管', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //id
            ['attribute' => 'id',
                'contentOptions' => ['width' => '60px',],
            ],
            //name
            ['attribute' => 'name',
                'contentOptions' => ['width' => '600px',],
            ],
            //department
            [
                //主表的字段
                'attribute' => 'department',
                'label' => '部门',
                //副表的字段
                'value' => 'departmenttypetbl.department_type',
                'filter' => DepartmentTypetbl::find()
                        ->select(['department_type', 'id'])
                        ->indexBy('id')
                        ->column(),
                'contentOptions' => ['width' => '60px',],
            ],
            //position
            ['attribute' => 'position',
                'label' => '职位',
                'value' => 'positiontypetbl.position_type',
                'filter' => PositionTypetbl::find()
                        ->select(['position_type', 'id'])
                        ->indexBy('id')
                        ->column(),
                'contentOptions' => ['width' => '87px',],
            ],
            'mobile',
            'id_no',
            //education
            ['attribute' => 'education',
                'label' => '学历',
                'value' => 'educationtypetbl.education_type',
                'filter' => EducationTypetbl::find()
                        ->select(['education_type', 'id'])
                        ->indexBy('id')
                        ->column(),
                'contentOptions' => ['width' => '60px',],
            ],
            //gmt_modified
            ['attribute' => 'gmt_modified',
                'format' => ['date', 'php:Y-m-d'],
                'contentOptions' => ['width' => '90px',],
            ],
            //state
            ['attribute' => 'state',
//                'label' => '在职状态',
                'value' => 'statetypetbl.state_type',
                'filter' => StateTypetbl::find()
                        ->select(['state_type', 'id'])
                        ->indexBy('id')
                        ->column(),
                'contentOptions' => ['width' => '78px',],
            ],
            //examination
            ['attribute' => 'examination',
                'label' => '审核',
                'value' => 'examinationtypetbl.examination_type',
                'filter' => ExaminationTypetbl::find()
                        ->select(['examination_type', 'id'])
                        ->indexBy('id')
                        ->column(),
                'contentOptions' => function($model) {
                    return ($model->examination == 1) ? [
                        'class' => 'bg-danger', 'width' => '60px'] : [];
                }
            ],
            ['class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['width' => '85px',],
                'template' => '{view} {update} {delete} {approve}',
                'buttons' =>
                [
                    'approve' => function($url, $model, $key) {
                        $options = [
                            'title' => Yii::t('yii', '审核'),
                            'aria-label' => Yii::t('yii', '审核'),
                            'data-confirm' => Yii::t('yii', '你确定通过这条评论吗？'),
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ];
                        return Html::a('<span class="glyphicon glyphicon-check"></span>', $url, $options);
                    },
                ],
            ],
        ],
    ]);
    ?>
</div>
