<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Branch;

/**
 * BranchSearch represents the model behind the search form about `app\models\Branch`.
 */
class BranchSearch extends Branch
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['branch_name', 'Company_id','branch_description'], 'safe'],
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
        $query = Branch::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
		$query->joinWith('company');
		
        $query->andFilterWhere([
            'id' => $this->id,
            'Company_id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'branch_name', $this->branch_name])
            ->andFilterWhere(['like', 'branch_description', $this->branch_description])
			->andFilterWhere(['like', 'company.company_name', $this->Company_id]);

        return $dataProvider;
    }
}
