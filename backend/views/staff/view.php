<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Stafftbl */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '职员管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stafftbl-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除这条信息吗?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'department',
                'value' => $model->departmenttypetbl->department_type,
            ],
            //'position',显示关联字段信息
            [
                'attribute' => 'position',
                'value' => $model->positiontypetbl->position_type,
            ],
            'mobile',
            'QQ',
            'email:email',
            'emergency_contact_no',
            'emergency_contact',
            'id_no',
            'addr',
            'login_pwd',
            //'gmt_create',修改时间格式
            ['attribute' => 'gmt_create',
                'format' => ['date', 'php:Y-m-d H:i:s'],
            ],
            //'gmt_modified',修改时间格式
            ['attribute' => 'gmt_modified',
                'format' => ['date', 'php:Y-m-d H:i:s'],
            ],
            //'is_del',
            //'bank',
            [
                'attribute' => 'bank',
                'value' => $model->banktypetbl->bank_type,
            ],
            'acct_id',
            'hiredate',
            'expiration',
            'other',
            'photo',
            'pic_path',
            'name',
            //'department',
            //'education',显示关联字段信息
            [
                'attribute' => 'education',
                'value' => $model->educationtypetbl->education_type,
            ],
            'native_place',
            //'state',显示关联字段信息
            [
                'attribute' => 'state',
                'value' => $model->statetypetbl->state_type,
            ],
            //'examination',显示关联字段信息
            [
                'attribute' => 'examination',
                'value' => $model->examinationtypetbl->examination_type,
            ],
        ],
    ])
    ?>

</div>
