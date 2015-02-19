<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Item;

/**
 * ItemSearch represents the model behind the search form about `app\models\Item`.
 */
class ItemSearch extends Item
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_item', 'item_qty', 'Sale_id_sale', 'Order_id_order', 'Supplier_id_supplier'], 'integer'],
            [['item_name', 'item_unit', 'item_serialNo', 'item_status', 'item_createDate', 'item_updateDate'], 'safe'],
            [['item_price'], 'number'],
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
        $query = Item::find();

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
            'id_item' => $this->id_item,
            'item_qty' => $this->item_qty,
            'item_price' => $this->item_price,
            'item_createDate' => $this->item_createDate,
            'item_updateDate' => $this->item_updateDate,
            'Sale_id_sale' => $this->Sale_id_sale,
            'Order_id_order' => $this->Order_id_order,
            'Supplier_id_supplier' => $this->Supplier_id_supplier,
        ]);

        $query->andFilterWhere(['like', 'item_name', $this->item_name])
            ->andFilterWhere(['like', 'item_unit', $this->item_unit])
            ->andFilterWhere(['like', 'item_serialNo', $this->item_serialNo])
            ->andFilterWhere(['like', 'item_status', $this->item_status]);

        return $dataProvider;
    }
}
