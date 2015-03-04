<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Order;

/**
 * OrderSearch represents the model behind the search form about `app\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'num_items', ], 'integer'],
            [['date', 'customer_id', 'productinventory_id', 'status'], 'safe'],
            [['amount', 'discount'], 'number'],
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
        $query = Order::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('customer');
        $query->joinWith('productinventory');

        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
            'num_items' => $this->num_items,
            'amount' => $this->amount,
            'discount' => $this->discount,
            'customer_id' => $this->id,
            'productinventory_id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status]);
        $query->andFilterWhere(['like', 'customer.name', $this->customer_id]);
        $query->andFilterWhere(['like', 'productinventory.name', $this->productinventory_id]);

        return $dataProvider;
    }
}
