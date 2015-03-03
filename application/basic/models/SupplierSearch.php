<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\supplier;

/**
 * SupplierSearch represents the model behind the search form about `app\models\supplier`.
 */
class SupplierSearch extends supplier
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'ZipCode'], 'integer'],
            [['Name', 'ContactNo', 'ContactPerson', 'HouseNo', 'Street', 'Area', 'City', 'Country', 'Email', 'CreateDate', 'UpdateDate', 'CreatedBy', 'UpdatedBy'], 'safe'],
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
        $query = supplier::find();

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
            'ZipCode' => $this->ZipCode,
            'CreateDate' => $this->CreateDate,
            'UpdateDate' => $this->UpdateDate,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'ContactNo', $this->ContactNo])
            ->andFilterWhere(['like', 'ContactPerson', $this->ContactPerson])
            ->andFilterWhere(['like', 'HouseNo', $this->HouseNo])
            ->andFilterWhere(['like', 'Street', $this->Street])
            ->andFilterWhere(['like', 'Area', $this->Area])
            ->andFilterWhere(['like', 'City', $this->City])
            ->andFilterWhere(['like', 'Country', $this->Country])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'CreatedBy', $this->CreatedBy])
            ->andFilterWhere(['like', 'UpdatedBy', $this->UpdatedBy]);

        return $dataProvider;
    }
}
