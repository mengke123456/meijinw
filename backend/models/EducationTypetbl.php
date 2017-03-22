<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "education_typetbl".
 *
 * @property integer $id
 * @property string $education_type
 * @property integer $is_del
 */
class EducationTypetbl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'education_typetbl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['education_type'], 'required'],
            [['is_del'], 'integer'],
            [['education_type'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'education_type' => '学历类型',
            'is_del' => 'Is Del',
        ];
    }
}
