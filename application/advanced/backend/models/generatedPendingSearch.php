<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\generatedPending;

/**
 * generatedPendingSearch represents the model behind the search form about `backend\models\generatedPending`.
 */
class generatedPendingSearch extends generatedPending
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'num_items', 'productinventory_id', 'customer_id'], 'integer'],
            [['date', 'status'], 'safe'],
            [['total_amount'], 'number'],
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
        $query = generatedPending::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
            'num_items' => $this->num_items,
            'total_amount' => $this->total_amount,
            'productinventory_id' => $this->productinventory_id,
            'customer_id' => $this->customer_id,
        ]);

        $query->andFilterWhere(['like', 'status', 'Pending']);

        return $dataProvider;
    }
}
