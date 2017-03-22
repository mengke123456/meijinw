<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Managertbl */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Managertbls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="managertbl-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '您确定要删除吗？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'department',
            'position',
            'mobile',
            'QQ',
            'email:email',
            'emergency_contact_no',
            'emergency_contact',
            'id_no',
            'native_place',
            'education',
            'addr',
            //'Ukey_info',
            //'login_pwd',
            'gmt_create',
            'gmt_modified',
            'bank',
            'acct_id',
            'hiredate',
            'expiration',
            'medical_examination',
            'other',
            'photo',
            'pic_path',
            'state',
            'examination',
            'is_del',
        ],
    ]) ?>

</div>
