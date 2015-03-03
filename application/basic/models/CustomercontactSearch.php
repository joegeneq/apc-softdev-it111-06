<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Customercontact;

/**
 * CustomercontactSearch represents the model behind the search form about `app\models\Customercontact`.
 */
class CustomercontactSearch extends Customercontact
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Customer_ID'], 'integer'],
            [['Name', 'ContactNo', 'Email', 'CreateDate', 'UpdateDate', 'CreatedBy', 'UpdatedBy'], 'safe'],
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
        $query = Customercontact::find();

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
            'CreateDate' => $this->CreateDate,
            'UpdateDate' => $this->UpdateDate,
            'Customer_ID' => $this->Customer_ID,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'ContactNo', $this->ContactNo])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'CreatedBy', $this->CreatedBy])
            ->andFilterWhere(['like', 'UpdatedBy', $this->UpdatedBy]);

        return $dataProvider;
    }
}
