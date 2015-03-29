<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Productinventory;

/**
 * ProductInventorySearch represents the model behind the search form about `backend\models\Productinventory`.
 */
class ProductInventorySearch extends Productinventory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'qoh', 'items_sold', 'supplier_id'], 'integer'],
            [['name', 'description', 'serial_no', 'status', 'create_date'], 'safe'],
            [['price'], 'number'],
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
        $query = Productinventory::find();

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
            'qoh' => $this->qoh,
            'items_sold' => $this->items_sold,
            'price' => $this->price,
            'create_date' => $this->create_date,
            'supplier_id' => $this->supplier_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'serial_no', $this->serial_no])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
