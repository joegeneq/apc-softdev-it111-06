<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\manageOrder;

/**
 * manageOrderSearch represents the model behind the search form about `backend\models\manageOrder`.
 */
class manageOrderSearch extends manageOrder
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'qty', 'supplier_id', 'productinventory_id'], 'integer'],
            [['date'], 'safe'],
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
        $query = manageOrder::find();

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
            'qty' => $this->qty,
            'supplier_id' => $this->supplier_id,
            'productinventory_id' => $this->productinventory_id,
        ]);

        return $dataProvider;
    }
}
