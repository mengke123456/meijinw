<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "stafftbl".
 *
 * @property integer $id
 * @property string $name
 * @property integer $department
 * @property string $position
 * @property string $mobile
 * @property string $QQ
 * @property string $email
 * @property string $emergency_contact_no
 * @property string $emergency_contact
 * @property string $id_no
 * @property string $native_place
 * @property integer $education
 * @property string $addr
 * @property string $Ukey_info
 * @property string $login_pwd
 * @property integer $gmt_create
 * @property integer $gmt_modified
 * @property string $bank
 * @property string $acct_id
 * @property string $hiredate
 * @property string $expiration
 * @property string $medical_examination
 * @property string $other
 * @property string $photo
 * @property string $pic_path
 * @property integer $state
 * @property integer $examination
 * @property integer $is_del
 */
class Stafftbl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stafftbl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'department', 'position', 'mobile', 'QQ', 'email', 'emergency_contact_no', 'emergency_contact', 'id_no', 'native_place', 'education', 'addr', 'Ukey_info', 'login_pwd', 'bank', 'acct_id', 'hiredate', 'expiration', 'state', 'examination'], 'required'],
            [['department', 'education', 'gmt_create', 'gmt_modified', 'state', 'examination', 'is_del'], 'integer'],
            [['hiredate', 'expiration'], 'safe'],
            [['name'], 'string', 'max' => 30],
            [['position', 'QQ', 'emergency_contact', 'Ukey_info', 'login_pwd'], 'string', 'max' => 32],
            [['mobile', 'emergency_contact_no'], 'string', 'max' => 11],
            [['email', 'native_place', 'addr', 'bank', 'medical_examination', 'other', 'photo', 'pic_path'], 'string', 'max' => 128],
            [['id_no', 'acct_id'], 'string', 'max' => 18],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '姓名',
            'department' => '部门',
            'position' => '职位',
            'mobile' => '手机号',
            'QQ' => 'QQ',
            'email' => '邮箱',
            'emergency_contact_no' => '紧急联系人电话',
            'emergency_contact' => '紧急联系人',
            'id_no' => '身份证号',
            'native_place' => '籍贯',
            'education' => '学历',
            'addr' => '住址',
            'Ukey_info' => 'U盾',
            'login_pwd' => '员工密码',
            'gmt_create' => '创建时间',
            'gmt_modified' => '修改时间',
            'bank' => '开户行',
            'acct_id' => '员工银行卡号',
            'hiredate' => '入职时间',
            'expiration' => '合约到期',
            'medical_examination' => '体检报告',
            'other' => '其他信息',
            'photo' => '照片',
            'pic_path' => '图片存放路径',
            'state' => '状态',
            'examination' => '审核',
            'is_del' => '删除',
        ];
    }
    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert))
        {
            if($insert)
            {
                $this->gmt_create = time();
                $this->gmt_modified = time();
            }
            else 
            {
                $this->gmt_modified = time();
            }
            return true;
        }
        else 
        {
            return false;
        }
    } 
}
