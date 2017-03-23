<?php

namespace common\models;

use Yii;
use common\models\Stafftbl;

/**
 * This is the model class for table "stafftbl".
 *
 * @property integer $id
 * @property integer $position
 * @property string $mobile
 * @property string $QQ
 * @property string $email
 * @property string $emergency_contact_no
 * @property string $emergency_contact
 * @property string $id_no
 * @property string $addr
 * @property string $login_pwd
 * @property integer $gmt_create
 * @property integer $gmt_modified
 * @property integer $is_del
 * @property string $bank
 * @property string $acct_id
 * @property string $hiredate
 * @property string $expiration
 * @property string $medical_examination
 * @property string $other
 * @property string $photo
 * @property string $pic_path
 * @property string $name
 * @property integer $department
 * @property string $education
 * @property string $native_place
 * @property integer $state
 * @property integer $examination
 */
class Stafftbl extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'stafftbl';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['position', 'mobile', 'QQ', 'email', 'emergency_contact_no', 'emergency_contact', 'id_no', 'addr', 'login_pwd', 'bank', 'acct_id', 'hiredate', 'expiration', 'name', 'education', 'native_place'], 'required'],
            [['position', 'gmt_create', 'gmt_modified', 'is_del', 'department', 'state', 'examination'], 'integer'],
            [['hiredate', 'expiration'], 'safe'],
            [['mobile', 'emergency_contact_no'], 'string', 'max' => 11],
            [['QQ', 'emergency_contact', 'login_pwd'], 'string', 'max' => 32],
            [['email', 'addr', 'bank', 'medical_examination', 'other', 'photo', 'pic_path', 'native_place'], 'string', 'max' => 128],
            [['id_no', 'acct_id'], 'string', 'max' => 18],
            [['name', 'education'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'position' => '职位',
            'mobile' => '手机号',
            'QQ' => 'QQ',
            'email' => 'Email',
            'emergency_contact_no' => '紧急联系人电话',
            'emergency_contact' => '紧急联系人',
            'id_no' => '身份证号',
            'addr' => '住址',
            'login_pwd' => '员工密码',
            'gmt_create' => '创建时间',
            'gmt_modified' => '修改时间',
            'is_del' => 'Is Del',
            'bank' => '开户行',
            'acct_id' => '银行卡号',
            'hiredate' => '入职时间',
            'expiration' => '合约到期',
            'medical_examination' => '体检报告',
            'other' => '其他信息',
            'photo' => '照片',
            'pic_path' => '图片存放路径',
            'name' => '姓名',
            'department' => '部门',
            'education' => '学历',
            'native_place' => '籍贯',
            'state' => '状态',
            'examination' => '审核',
        ];
    }

//各种表之间的关联
    public function getExaminationtypetbl() {
        return $this->hasOne(ExaminationTypetbl::className(), ['id' => 'examination']);
    }

    public function getDepartmenttypetbl() {
        return $this->hasOne(DepartmentTypetbl::className(), ['id' => 'department']);
    }

    public function getPositiontypetbl() {
        return $this->hasOne(PositionTypetbl::className(), ['id' => 'position']);
    }

    public function getStatetypetbl() {
        return $this->hasOne(StateTypetbl::className(), ['id' => 'state']);
    }

    public function getBanktypetbl() {
        return $this->hasOne(BankTypetbl::className(), ['id' => 'bank']);
    }

    public function getEducationtypetbl() {
        return $this->hasOne(EducationTypetbl::className(), ['id' => 'education']);
    }

//提醒边框
    public static function getPengdingCommentCount() {
        return Stafftbl::find()->where(['examination' => 1])->count();
    }

//自动修改时间

    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            if ($insert) {
                $this->gmt_create = time();
                $this->gmt_modified = time();
            } else {
                $this->gmt_modified = time();
            }

            return true;
        } else {
            return false;
        }
    }

}
