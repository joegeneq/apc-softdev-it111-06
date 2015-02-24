<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\manageCustomer;

/**
 * manageCustomerSearch represents the model behind the search form about `app\models\manageCustomer`.
 */
class manageCustomerSearch extends manageCustomer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'ZipCode', 'Company_ID'], 'integer'],
            [['Name', 'Address', 'ContactNo', 'Country', 'CreateDate', 'UpdateDate'], 'safe'],
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
        $query = manageCustomer::find();

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
            'Company_ID' => $this->Company_ID,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'ContactNo', $this->ContactNo])
            ->andFilterWhere(['like', 'Country', $this->Country]);

        return $dataProvider;
    }
}
