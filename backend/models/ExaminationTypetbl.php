<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "examination_typetbl".
 *
 * @property integer $id
 * @property string $examination_type
 * @property integer $is_del
 */
class ExaminationTypetbl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'examination_typetbl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['examination_type', 'is_del'], 'required'],
            [['is_del'], 'integer'],
            [['examination_type'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'examination_type' => '审核状态',
            'is_del' => 'Is Del',
        ];
    }
}
