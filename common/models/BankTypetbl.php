<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bank_typetbl".
 *
 * @property string $id
 * @property string $bank_type
 */
class BankTypetbl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bank_typetbl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bank_type'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bank_type' => 'Bank Type',
        ];
    }
}
