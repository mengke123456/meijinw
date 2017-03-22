<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ManagertblSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="managertbl-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'department') ?>

    <?= $form->field($model, 'position') ?>

    <?= $form->field($model, 'mobile') ?>

    <?php // echo $form->field($model, 'QQ') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'emergency_contact_no') ?>

    <?php // echo $form->field($model, 'emergency_contact') ?>

    <?php // echo $form->field($model, 'id_no') ?>

    <?php // echo $form->field($model, 'native_place') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'addr') ?>

    <?php // echo $form->field($model, 'Ukey_info') ?>

    <?php // echo $form->field($model, 'login_pwd') ?>

    <?php // echo $form->field($model, 'gmt_create') ?>

    <?php // echo $form->field($model, 'gmt_modified') ?>

    <?php // echo $form->field($model, 'bank') ?>

    <?php // echo $form->field($model, 'acct_id') ?>

    <?php // echo $form->field($model, 'hiredate') ?>

    <?php // echo $form->field($model, 'expiration') ?>

    <?php // echo $form->field($model, 'medical_examination') ?>

    <?php // echo $form->field($model, 'other') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'pic_path') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'examination') ?>

    <?php // echo $form->field($model, 'is_del') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
