<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\productinventory;

/**
 * ProductInventorySearch represents the model behind the search form about `app\models\productinventory`.
 */
class ProductInventorySearch extends productinventory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'qoh'], 'integer'],
            [['name', 'description', 'supplier_id', 'serial_no', 'status', 'create_date', 'update_date', 'created_by', 'updated_by'], 'safe'],
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
        $query = productinventory::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('supplier');

        $query->andFilterWhere([
            'id' => $this->id,
            'qoh' => $this->qoh,
            'price' => $this->price,
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
            'supplier_id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'serial_no', $this->serial_no])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'updated_by', $this->updated_by])
            ->andFilterWhere(['like', 'supplier.name', $this->supplier_id]);

        return $dataProvider;
    }
}
