<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "department_typetbl".
 *
 * @property integer $id
 * @property string $department_type
 * @property integer $is_del
 */
class DepartmentTypetbl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'department_typetbl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['department_type'], 'required'],
            [['is_del'], 'integer'],
            [['department_type'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'department_type' => '部门类型',
            'is_del' => 'Is Del',
        ];
    }
}
