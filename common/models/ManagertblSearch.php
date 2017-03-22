<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Managertbl;

/**
 * ManagertblSearch represents the model behind the search form about `common\models\Managertbl`.
 */
class ManagertblSearch extends Managertbl {

    //新增表中字段
    public function attributes() {
        return array_merge(parent::attributes(), ['department_type']);
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id', 'department', 'education', 'gmt_create', 'gmt_modified', 'state', 'examination', 'is_del'], 'integer'],
            [['name', 'position', 'mobile', 'QQ', 'email', 'emergency_contact_no', 'emergency_contact', 'id_no', 'native_place', 'addr', 'Ukey_info', 'login_pwd', 'bank', 'acct_id', 'hiredate', 'expiration', 'medical_examination', 'other', 'photo', 'pic_path',
            //新增表字段
            'department_type', 'education_type', 'position_type', 'state_type', 'examination_type'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params) {
        $query = Managertbl::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'department' => $this->department,
            'education' => $this->education,
            'gmt_create' => $this->gmt_create,
            'gmt_modified' => $this->gmt_modified,
            'hiredate' => $this->hiredate,
            'expiration' => $this->expiration,
            'state' => $this->state,
            'examination' => $this->examination,
            'is_del' => $this->is_del,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
                ->andFilterWhere(['like', 'position', $this->position])
                ->andFilterWhere(['like', 'mobile', $this->mobile])
                ->andFilterWhere(['like', 'QQ', $this->QQ])
                ->andFilterWhere(['like', 'email', $this->email])
                ->andFilterWhere(['like', 'emergency_contact_no', $this->emergency_contact_no])
                ->andFilterWhere(['like', 'emergency_contact', $this->emergency_contact])
                ->andFilterWhere(['like', 'id_no', $this->id_no])
                ->andFilterWhere(['like', 'native_place', $this->native_place])
                ->andFilterWhere(['like', 'addr', $this->addr])
                ->andFilterWhere(['like', 'Ukey_info', $this->Ukey_info])
                ->andFilterWhere(['like', 'login_pwd', $this->login_pwd])
                ->andFilterWhere(['like', 'bank', $this->bank])
                ->andFilterWhere(['like', 'acct_id', $this->acct_id])
                ->andFilterWhere(['like', 'medical_examination', $this->medical_examination])
                ->andFilterWhere(['like', 'other', $this->other])
                ->andFilterWhere(['like', 'photo', $this->photo])
                ->andFilterWhere(['like', 'pic_path', $this->pic_path]);

//设置默认排序为：未审核优先
        $dataProvider->sort->defaultOrder = [
            'examination' => SORT_ASC,
            'id' => SORT_DESC,
        ];

        return $dataProvider;
    }

}
