<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\manageCompany;

/**
 * manageCompanySearch represents the model behind the search form about `app\models\manageCompany`.
 */
class manageCompanySearch extends manageCompany
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_company', 'company_contact'], 'integer'],
            [['company_name', 'company_address'], 'safe'],
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
        $query = manageCompany::find();

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
            'id_company' => $this->id_company,
            'company_contact' => $this->company_contact,
        ]);

        $query->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'company_address', $this->company_address]);

        return $dataProvider;
    }
}
