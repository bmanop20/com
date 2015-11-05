<?php

namespace frontend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Computer;

/**
 * ComSearch represents the model behind the search form about `frontend\models\Computer`.
 */
class ComSearch extends Computer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'com_type_id', 'arch_type_id'], 'integer'],
            [['cpu_type', 'ram_type', 'cpuspeed', 'ramspeed', 'os', 'brand', 'code'], 'safe'],
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
        $query = Computer::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'com_type_id' => $this->com_type_id,
            'arch_type_id' => $this->arch_type_id,
        ]);

        $query->andFilterWhere(['like', 'cpu_type', $this->cpu_type])
            ->andFilterWhere(['like', 'ram_type', $this->ram_type])
            ->andFilterWhere(['like', 'cpuspeed', $this->cpuspeed])
            ->andFilterWhere(['like', 'ramspeed', $this->ramspeed])
            ->andFilterWhere(['like', 'os', $this->os])
            ->andFilterWhere(['like', 'brand', $this->brand])
            ->andFilterWhere(['like', 'code', $this->code]);

        return $dataProvider;
    }
}
