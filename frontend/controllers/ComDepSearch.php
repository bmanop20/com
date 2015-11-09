<?php

namespace frontend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ComDep;
use yii\db\Query;

/**
 * ComDepSearch represents the model behind the search form about `frontend\models\ComDep`.
 */
class ComDepSearch extends ComDep
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'com_id', 'dep_id'], 'integer'],
            [['datein', 'dateout','code','name'], 'safe'],
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
        $query = ComDep::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);
        //print_r($params);
        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'com_id' => $this->com_id,
            'dep_id' => $this->dep_id,
            'datein' => $this->datein,
            'dateout' => $this->dateout,
            'name' => $this->name,
            
        ]);

        return $dataProvider;
    }
}
