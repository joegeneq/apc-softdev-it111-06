<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\manageOrder;

/**
 * manageOrderSearch represents the model behind the search form about `app\models\manageOrder`.
 */
class manageOrderSearch extends manageOrder
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'ItemQty', 'Customer_ID', 'Item_ID'], 'integer'],
            [['Date', 'Status'], 'safe'],
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
            'ID' => $this->ID,
            'Date' => $this->Date,
            'ItemQty' => $this->ItemQty,
            'Customer_ID' => $this->Customer_ID,
            'Item_ID' => $this->Item_ID,
        ]);

        $query->andFilterWhere(['like', 'Status', $this->Status]);

        return $dataProvider;
    }
}
