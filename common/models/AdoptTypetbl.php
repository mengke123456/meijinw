<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "adopt_typetbl".
 *
 * @property integer $id
 * @property string $adopt_type
 */
class AdoptTypetbl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adopt_typetbl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adopt_type'], 'required'],
            [['adopt_type'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'adopt_type' => 'Adopt Type',
        ];
    }
}
