<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "state_typetbl".
 *
 * @property integer $id
 * @property string $state_type
 * @property integer $is_del
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
            [['state_type'], 'required'],
            [['is_del'], 'integer'],
            [['state_type'], 'string', 'max' => 32],
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
            'is_del' => 'Is Del',
        ];
    }
}
