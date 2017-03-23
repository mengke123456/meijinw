<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Stafftbl;
use common\models\StafftblSearch;
/* @var $this yii\web\View */
/* @var $searchModel common\models\StafftblSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '在职员工';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stafftbl-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新增在职员工', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            
            'id',
            'name',
            ['attribute'=>'department',
            'filter'=>StafftblSearch::find()
                    ->indexBy('id')
                    ->column(),],
            ['attribute'=>'position',
            'filter'=>StafftblSearch::find()
                    ->indexBy('id')
                    ->column(),],
            'mobile',
            // 'QQ',
            // 'email:email',
            // 'emergency_contact_no',
            // 'emergency_contact',
            // 'id_no',
            // 'native_place',
            // 'education',
            // 'addr',
            // 'Ukey_info',
            // 'login_pwd',
            ['attribute'=>'gmt_create',
             'format'=>['date','php:Y-m-d H:i:s'],
            ],
            ['attribute'=>'gmt_modified',
             'format'=>['date','php:Y-m-d H:i:s'],
            ],
            // 'bank',
            // 'acct_id',
            // 'hiredate',
            // 'expiration',
            // 'medical_examination',
            // 'other',
            // 'photo',
            // 'pic_path',
             'state',
             'examination',
            // 'is_del',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
