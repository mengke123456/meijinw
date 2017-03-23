<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "state_typetbl".
 *
 * @property string $id
 * @property string $state_type
 */
class StateTypetbl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'state_typetbl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state_type'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'state_type' => 'State Type',
        ];
    }
}
