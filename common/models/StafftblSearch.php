<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Stafftbl;

/**
 * StafftblSearch represents the model behind the search form about `common\models\Stafftbl`.
 */
class StafftblSearch extends Stafftbl
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'position', 'gmt_create', 'gmt_modified', 'is_del', 'bank', 'department', 'state', 'examination'], 'integer'],
            [['mobile', 'QQ', 'email', 'emergency_contact_no', 'emergency_contact', 'id_no', 'addr', 'login_pwd', 'acct_id', 'hiredate', 'expiration', 'medical_examination', 'other', 'photo', 'pic_path', 'name', 'education', 'native_place'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
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
    public function search($params)
    {
        $query = Stafftbl::find();

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
            'position' => $this->position,
            'gmt_create' => $this->gmt_create,
            'gmt_modified' => $this->gmt_modified,
            'is_del' => $this->is_del,
            'bank' => $this->bank,
            'hiredate' => $this->hiredate,
            'expiration' => $this->expiration,
            'department' => $this->department,
            'state' => $this->state,
            'examination' => $this->examination,
        ]);

        $query->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'QQ', $this->QQ])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'emergency_contact_no', $this->emergency_contact_no])
            ->andFilterWhere(['like', 'emergency_contact', $this->emergency_contact])
            ->andFilterWhere(['like', 'id_no', $this->id_no])
            ->andFilterWhere(['like', 'addr', $this->addr])
            ->andFilterWhere(['like', 'login_pwd', $this->login_pwd])
            ->andFilterWhere(['like', 'acct_id', $this->acct_id])
            ->andFilterWhere(['like', 'medical_examination', $this->medical_examination])
            ->andFilterWhere(['like', 'other', $this->other])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'pic_path', $this->pic_path])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'native_place', $this->native_place]);

        return $dataProvider;
    }
}
