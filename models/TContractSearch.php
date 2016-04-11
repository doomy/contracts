<?php

namespace app\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\Models\TContract;

/**
 * TContractSearch represents the model behind the search form about `app\Models\TContract`.
 */
class TContractSearch extends TContract
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'contract_type_id', 'contract_status_id', 'contract_value'], 'integer'],
            [['company_name', 'contract_subject', 'created_at', 'active_from', 'active_to'], 'safe'],
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
        $query = TContract::find();

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
            'contract_type_id' => $this->contract_type_id,
            'contract_status_id' => $this->contract_status_id,
            'contract_value' => $this->contract_value,
            'created_at' => $this->created_at,
            'active_from' => $this->active_from,
            'active_to' => $this->active_to,
        ]);

        $query->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'contract_subject', $this->contract_subject]);

        return $dataProvider;
    }
}
