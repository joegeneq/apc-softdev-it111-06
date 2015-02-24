<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\manageItem;

/**
 * manageItemSearch represents the model behind the search form about `app\models\manageItem`.
 */
class manageItemSearch extends manageItem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Qty', 'Supplier_ID'], 'integer'],
            [['Name', 'Unit', 'SerialNo', 'Status', 'CreateDate', 'UpdateDate'], 'safe'],
            [['Price'], 'number'],
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
        $query = manageItem::find();

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
            'Qty' => $this->Qty,
            'Price' => $this->Price,
            'CreateDate' => $this->CreateDate,
            'UpdateDate' => $this->UpdateDate,
            'Supplier_ID' => $this->Supplier_ID,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Unit', $this->Unit])
            ->andFilterWhere(['like', 'SerialNo', $this->SerialNo])
            ->andFilterWhere(['like', 'Status', $this->Status]);

        return $dataProvider;
    }
}
