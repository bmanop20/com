<?php

namespace frontend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ErRegist;

/**
 * ErSearchController represents the model behind the search form about `frontend\models\ErRegist`.
 */
class ErSearchController extends ErRegist
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vn', 'vstdate', 'er_doctor', 'er_legal_action', 'er_time_1', 'er_time_2', 'er_time_3', 'dba', 'er_list', 'oper_note', 'enter_er_time', 'doctor_tx_time', 'finish_time', 'vn_guid', 'observe', 'hos_guid', 'er_screen', 'update_datetime', 'update_staff', 'er_depcode'], 'safe'],
            [['er_period', 'er_pt_type', 'er_emergency_type', 'er_dch_type', 'ems_command_list_id', 'er_emergency_level_id'], 'integer'],
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
        
        $this->load($params);
        
        $sql_s = "select ";
        $select = " l.er_emergency_level_name,d.`name`,sum(if(month(e.vstdate) = 1,1,0)) as jan,
                    sum(if(month(e.vstdate) = 2,1,0)) as feb,
                    sum(if(month(e.vstdate) = 3,1,0)) as mar,
                    sum(if(month(e.vstdate) = 4,1,0)) as apr,
                    sum(if(month(e.vstdate) = 5,1,0)) as may,
                    sum(if(month(e.vstdate) = 6,1,0)) as jun,
                    sum(if(month(e.vstdate) = 7,1,0)) as jul,
                    sum(if(month(e.vstdate) = 8,1,0)) as aug,
                    sum(if(month(e.vstdate) = 9,1,0)) as sep,
                    sum(if(month(e.vstdate) = 10,1,0)) as oct,
                    sum(if(month(e.vstdate) = 11,1,0)) as nov,
                    sum(if(month(e.vstdate) = 12,1,0)) as dece";
        $from = " from er_regist e ";
        $join = " INNER JOIN doctor d ON d. CODE = e.er_doctor ";
        $join .= " inner JOIN er_emergency_level l on l.er_emergency_level_id=  e.er_emergency_level_id ";
        $where = " where ";
        $groupby = " group by d.`name`,l.er_emergency_level_id ";
        
        if ( !is_null($this->vstdate) && strpos($this->vstdate, ' - ') !== false ) {
                list($start_date, $end_date) = explode(' - ', $this->vstdate);
                //$query->andFilterWhere(['between', 'vstdate', $start_date, $end_date]);
                //echo "asdfasfasdf";
                //$this->vstdate = null;
                //print_r($query);
                $where .= "  e.vstdate between '" .$start_date. "' and '". $end_date."'";
        }else{
            $where .= "  e.vstdate = CURDATE() ";
        }
        
        $query = ErRegist::find();
        $sql    = $sql_s.$select.$from.$join.$where.$groupby;
        
        $count  = Yii::$app->db2->createCommand($sql)->execute();
        
        
        
//        $dataProvider = new ActiveDataProvider([
//            'query' => $query,
//        ]);
        
        $dataProvider = new \yii\data\SqlDataProvider([
            'db'=>'db2',
            'sql'=>$sql,
            'pagination'=> ['pageSize'=>100],
            'totalCount'=>$count,
            'sort'=>[
                    'attributes'=>[
                        'name' => [
                            'asc'   =>  ['doctor'=> SORT_ASC],
                            'desc'  =>  ['doctor'=> SORT_DESC],
                            'default' => SORT_DESC,
                            //'label'   => 'Vist Date'
                        ],
//                        'fname' => [
//                            'asc'   =>  ['fname'=> SORT_ASC],
//                            'desc'  =>  ['fname'=> SORT_DESC],
//                            'default' => SORT_DESC,
//                        ],
                        ],],
            
        ]);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'vstdate' => $this->vstdate,
            'er_period' => $this->er_period,
            'er_pt_type' => $this->er_pt_type,
            'er_emergency_type' => $this->er_emergency_type,
            'er_dch_type' => $this->er_dch_type,
            'er_time_1' => $this->er_time_1,
            'er_time_2' => $this->er_time_2,
            'er_time_3' => $this->er_time_3,
            'enter_er_time' => $this->enter_er_time,
            'doctor_tx_time' => $this->doctor_tx_time,
            'finish_time' => $this->finish_time,
            'ems_command_list_id' => $this->ems_command_list_id,
            'er_emergency_level_id' => $this->er_emergency_level_id,
            'update_datetime' => $this->update_datetime,
        ]);

        $query->andFilterWhere(['like', 'vn', $this->vn])
            ->andFilterWhere(['like', 'er_doctor', $this->er_doctor])
            ->andFilterWhere(['like', 'er_legal_action', $this->er_legal_action])
            ->andFilterWhere(['like', 'dba', $this->dba])
            ->andFilterWhere(['like', 'er_list', $this->er_list])
            ->andFilterWhere(['like', 'oper_note', $this->oper_note])
            ->andFilterWhere(['like', 'vn_guid', $this->vn_guid])
            ->andFilterWhere(['like', 'observe', $this->observe])
            ->andFilterWhere(['like', 'hos_guid', $this->hos_guid])
            ->andFilterWhere(['like', 'er_screen', $this->er_screen])
            ->andFilterWhere(['like', 'update_staff', $this->update_staff])
            ->andFilterWhere(['like', 'er_depcode', $this->er_depcode]);

        return $dataProvider;
    }
     public function search2($params)
    {
        
        $this->load($params);
        
        $sql_s = "select ";
        $select = " c.`name` as n1 ,d.`name` as doctor,
                    sum(if(month(r.vstdate) = 1,1,0)) as jan,
                    sum(if(month(r.vstdate) = 2,1,0)) as feb,
                    sum(if(month(r.vstdate) = 3,1,0)) as mar,
                    sum(if(month(r.vstdate) = 4,1,0)) as apr,
                    sum(if(month(r.vstdate) = 5,1,0)) as may,
                    sum(if(month(r.vstdate) = 6,1,0)) as jun,
                    sum(if(month(r.vstdate) = 7,1,0)) as jul,
                    sum(if(month(r.vstdate) = 8,1,0)) as aug,
                    sum(if(month(r.vstdate) = 9,1,0)) as sep,
                    sum(if(month(r.vstdate) = 10,1,0)) as oct,
                    sum(if(month(r.vstdate) = 11,1,0)) as nov,
                    sum(if(month(r.vstdate) = 12,1,0)) as dece,
                    count(e.er_oper_code) as c";
        $from = " from er_regist_oper e ";
        $join = " inner JOIN er_regist r on r.vn = e.vn
                  INNER JOIN er_oper_code c ON c.er_oper_code = e.er_oper_code
                  inner JOIN doctor d on d.code = e.doctor ";
        $where = " where ";
        $groupby = " group by e.er_oper_code order by d.name ";
        
        if ( !is_null($this->vstdate) && strpos($this->vstdate, ' - ') !== false ) {
                list($start_date, $end_date) = explode(' - ', $this->vstdate);
                //$query->andFilterWhere(['between', 'vstdate', $start_date, $end_date]);
                //echo "asdfasfasdf";
                //$this->vstdate = null;
                //print_r($query);
                $where .= "  r.vstdate between '" .$start_date. "' and '". $end_date."'";
        }else{
            $where .= "  r.vstdate = CURDATE() ";
        }
        
        $query = ErRegist::find();
        $sql    = $sql_s.$select.$from.$join.$where.$groupby;
        
        $count  = Yii::$app->db2->createCommand($sql)->execute();
        
        
        
//        $dataProvider = new ActiveDataProvider([
//            'query' => $query,
//        ]);
        
        $dataProvider = new \yii\data\SqlDataProvider([
            'db'=>'db2',
            'sql'=>$sql,
            'pagination'=> ['pageSize'=>100],
            'totalCount'=>$count,
            'sort'=>[
                    'attributes'=>[
                        'name' => [
                            'asc'   =>  ['doctor'=> SORT_ASC],
                            'desc'  =>  ['doctor'=> SORT_DESC],
                            'default' => SORT_DESC,
                            //'label'   => 'Vist Date'
                        ],
//                        'fname' => [
//                            'asc'   =>  ['fname'=> SORT_ASC],
//                            'desc'  =>  ['fname'=> SORT_DESC],
//                            'default' => SORT_DESC,
//                        ],
                        ],],
            
        ]);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'vstdate' => $this->vstdate,
            'er_period' => $this->er_period,
            'er_pt_type' => $this->er_pt_type,
            'er_emergency_type' => $this->er_emergency_type,
            'er_dch_type' => $this->er_dch_type,
            'er_time_1' => $this->er_time_1,
            'er_time_2' => $this->er_time_2,
            'er_time_3' => $this->er_time_3,
            'enter_er_time' => $this->enter_er_time,
            'doctor_tx_time' => $this->doctor_tx_time,
            'finish_time' => $this->finish_time,
            'ems_command_list_id' => $this->ems_command_list_id,
            'er_emergency_level_id' => $this->er_emergency_level_id,
            'update_datetime' => $this->update_datetime,
        ]);

        $query->andFilterWhere(['like', 'vn', $this->vn])
            ->andFilterWhere(['like', 'er_doctor', $this->er_doctor])
            ->andFilterWhere(['like', 'er_legal_action', $this->er_legal_action])
            ->andFilterWhere(['like', 'dba', $this->dba])
            ->andFilterWhere(['like', 'er_list', $this->er_list])
            ->andFilterWhere(['like', 'oper_note', $this->oper_note])
            ->andFilterWhere(['like', 'vn_guid', $this->vn_guid])
            ->andFilterWhere(['like', 'observe', $this->observe])
            ->andFilterWhere(['like', 'hos_guid', $this->hos_guid])
            ->andFilterWhere(['like', 'er_screen', $this->er_screen])
            ->andFilterWhere(['like', 'update_staff', $this->update_staff])
            ->andFilterWhere(['like', 'er_depcode', $this->er_depcode]);

        return $dataProvider;
    }
}
