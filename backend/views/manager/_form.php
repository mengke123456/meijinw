<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
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
/* @var $form yii\widgets\ActiveForm */
?>

<div class="managertbl-form">

   <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department')->dropDownList(DepartmentTypetbl::find()
                                        ->select(['department_type','id'])
                                        ->indexBy('id')
                                        ->column(),
                                        ['prompt'=>'请选择状态']); ?>

    <?= $form->field($model, 'position')->dropDownList(PositionTypetbl::find()
                                        ->select(['position_type','id'])
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

    <?= $form->field($model, 'education')->dropDownList(EducationTypetbl::find()
                                        ->select(['education_type','id'])
                                        ->indexBy('id')
                                        ->column(),
                                        ['prompt'=>'请选择状态']); ?>

    <?= $form->field($model, 'addr')->textInput(['maxlength' => true]) ?>

   


    <?= $form->field($model, 'bank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'acct_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hiredate')->textInput() ?>

    <?= $form->field($model, 'expiration')->textInput() ?>

    <?= $form->field($model, 'medical_examination')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pic_path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->dropDownList(StateTypetbl::find()
                                        ->select(['state_type','id'])
                                        ->indexBy('id')
                                        ->column(),
                                        ['prompt'=>'请选择状态']); ?>



    <?= $form->field($model, 'examination')->dropDownList(ExaminationTypetbl::find()
                                        ->select(['examination_type','id'])
                                        ->indexBy('id')
                                        ->column(),
                                        ['prompt'=>'请选择状态']); ?>

                                        
    <?= $form->field($model, 'adopt')->dropDownList(AdoptTypetbl::find()
                                        ->select(['adopt_type','id'])
                                        ->indexBy('id')
                                        ->column(),
                                        ['prompt'=>'请选择状态']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
