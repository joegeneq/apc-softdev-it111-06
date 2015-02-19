<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Customer;

/**
 * CustomerSearch represents the model behind the search form about `app\models\Customer`.
 */
class CustomerSearch extends Customer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_customer', 'customer_contact', 'customer_zipCode', 'Company_id_company'], 'integer'],
            [['customer_firstName', 'customer_lastName', 'customer_address', 'customer_type', 'customer_country', 'customer_createDate', 'customer_updateDate'], 'safe'],
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
        $query = Customer::find();

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
            'id_customer' => $this->id_customer,
            'customer_contact' => $this->customer_contact,
            'customer_zipCode' => $this->customer_zipCode,
            'customer_createDate' => $this->customer_createDate,
            'customer_updateDate' => $this->customer_updateDate,
            'Company_id_company' => $this->Company_id_company,
        ]);

        $query->andFilterWhere(['like', 'customer_firstName', $this->customer_firstName])
            ->andFilterWhere(['like', 'customer_lastName', $this->customer_lastName])
            ->andFilterWhere(['like', 'customer_address', $this->customer_address])
            ->andFilterWhere(['like', 'customer_type', $this->customer_type])
            ->andFilterWhere(['like', 'customer_country', $this->customer_country]);

        return $dataProvider;
    }
}
