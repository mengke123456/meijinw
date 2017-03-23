<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "position_typetbl".
 *
 * @property string $id
 * @property string $position_type
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
            [['position_type'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'position_type' => 'Position Type',
        ];
    }
}
