<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "department_typetbl".
 *
 * @property string $id
 * @property string $department_type
 */
class DepartmentTypetbl extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'department_typetbl';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['department_type'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'department_type' => '部门',
        ];
    }

}
