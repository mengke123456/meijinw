<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Stafftbl;
use common\models\StafftblSearch;
/* @var $this yii\web\View */
/* @var $model common\models\Stafftbl */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stafftbl-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'department')->dropDownList(StafftblSearch::find()
                                        ->indexBy('department')
                                        ->column(),
                                        ['prompt'=>'请选择状态']); ?>

    <?= $form->field($model, 'position')->dropDownList(StafftblSearch::find()
                                        ->indexBy('id')
                                        ->column(),
                                        ['prompt'=>'请选择状态']); ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'QQ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emergency_contact_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emergency_contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'native_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'education')->textInput() ?>

    <?= $form->field($model, 'addr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'login_pwd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gmt_create')->textInput() ?>

    <?= $form->field($model, 'gmt_modified')->textInput() ?>

    <?= $form->field($model, 'bank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'acct_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hiredate')->textInput() ?>

    <?= $form->field($model, 'expiration')->textInput() ?>

    <?= $form->field($model, 'medical_examination')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pic_path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput() ?>

    <?= $form->field($model, 'examination')->textInput() ?>

    <?= $form->field($model, 'is_del')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
