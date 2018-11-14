<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Firm;

/**
 * FirmSearch represents the model behind the search form of `app\models\Firm`.
 */
class FirmSearch extends Firm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'firm_mobile', 'proprietor_mobile'], 'integer'],
            [['firm_name', 'proprietor_firstname', 'proprietor_middlename', 'proprietor_lastname', 'proprietor_dob', 'proprietor_marriage_anniversary', 'proprietor_email', 'drug_lisence_no', 'gst_no', 'food_lisence_registration_no', 'added_on', 'modified_on'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Firm::find();

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
            'firm_mobile' => $this->firm_mobile,
            'proprietor_mobile' => $this->proprietor_mobile,
            'proprietor_dob' => $this->proprietor_dob,
            'proprietor_marriage_anniversary' => $this->proprietor_marriage_anniversary,
            'added_on' => $this->added_on,
            'modified_on' => $this->modified_on,
        ]);

        $query->andFilterWhere(['like', 'firm_name', $this->firm_name])
            ->andFilterWhere(['like', 'proprietor_firstname', $this->proprietor_firstname])
            ->andFilterWhere(['like', 'proprietor_middlename', $this->proprietor_middlename])
            ->andFilterWhere(['like', 'proprietor_lastname', $this->proprietor_lastname])
            ->andFilterWhere(['like', 'proprietor_email', $this->proprietor_email])
            ->andFilterWhere(['like', 'drug_lisence_no', $this->drug_lisence_no])
            ->andFilterWhere(['like', 'gst_no', $this->gst_no])
            ->andFilterWhere(['like', 'food_lisence_registration_no', $this->food_lisence_registration_no]);

        return $dataProvider;
    }
}
