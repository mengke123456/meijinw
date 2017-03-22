<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "position_typetbl".
 *
 * @property integer $id
 * @property string $position_type
 * @property integer $is_del
 */
class PositionTypetbl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'position_typetbl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position_type'], 'required'],
            [['is_del'], 'integer'],
            [['position_type'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'position_type' => '职位类型',
            'is_del' => 'Is Del',
        ];
    }
}
