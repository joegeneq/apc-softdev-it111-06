<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\manageSale;

/**
 * manageSaleSearch represents the model behind the search form about `app\models\manageSale`.
 */
class manageSaleSearch extends manageSale
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'ItemQty', 'Customer_ID', 'Item_ID'], 'integer'],
            [['Date', 'ReceiptNo'], 'safe'],
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
        $query = manageSale::find();

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

        $query->andFilterWhere(['like', 'ReceiptNo', $this->ReceiptNo]);

        return $dataProvider;
    }
}