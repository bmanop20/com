<?php

namespace frontend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Dtmain;

/**
 * DtmainSearchController represents the model behind the search form about `frontend\models\Dtmain`.
 */
class DtmainSearchController extends Dtmain
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dtmain_id', 'scount', 'tcount', 'vstage', 'tm_no', 'rcount', 'qty_count', 'pregnancy_caries_count', 'dental_plan_detail_id'], 'integer'],
            [['dn', 'doctor', 'hn', 'icd', 'note', 'tmcode', 'ttcode', 'vn', 'vstdate', 'vsttime', 'doctor_helper', 'icd9', 'opi_guid', 'begin_time', 'end_time', 'dtmain_guid', 'staff', 'pregnancy', 'post_labour', 'report_update', 'pregnancy_gingivitis', 'pregnancy_calculus', 'pregnancy_checkup', 'hos_guid', 'update_datetime', 'dx_guid', 'department', 'an'], 'safe'],
            [['fee'], 'number'],
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
        $select = " d. code,
                    d. name,
                    t.name as fname,
                    sum(if(month(dm.vstdate) = 1,1,0)) as jan,
                    sum(if(month(dm.vstdate) = 2,1,0)) as feb,
                    sum(if(month(dm.vstdate) = 3,1,0)) as mar,
                    sum(if(month(dm.vstdate) = 4,1,0)) as apr,
                    sum(if(month(dm.vstdate) = 5,1,0)) as may,
                    sum(if(month(dm.vstdate) = 6,1,0)) as jun,
                    sum(if(month(dm.vstdate) = 7,1,0)) as jul,
                    sum(if(month(dm.vstdate) = 8,1,0)) as aug,
                    sum(if(month(dm.vstdate) = 9,1,0)) as sep,
                    sum(if(month(dm.vstdate) = 10,1,0)) as oct,
                    sum(if(month(dm.vstdate) = 11,1,0)) as nov,
                    sum(if(month(dm.vstdate) = 12,1,0)) as dece";
        $from = " from dtmain dm ";
        $join = " inner join dttm d on d.code = dm.tmcode ";
        $join .= " inner join doctor t on t.code = dm.doctor ";
        $where = " where ";
        $groupby = " group by d.code,dm.doctor  order by dm.doctor";
        
        if ( !is_null($this->vstdate) && strpos($this->vstdate, ' - ') !== false ) {
                list($start_date, $end_date) = explode(' - ', $this->vstdate);
                //$query->andFilterWhere(['between', 'vstdate', $start_date, $end_date]);
                //echo "asdfasfasdf";
                //$this->vstdate = null;
                //print_r($query);
                $where .= "  dm.vstdate between '" .$start_date. "' and '". $end_date."'";
        }else{
            $where .= "  dm.vstdate = CURDATE() ";
        }
        
        if($this->doctor != ""){
            $where .= " and dm.doctor = '".$this->doctor."'";
        }
        
       $sql    = $sql_s.$select.$from.$join.$where.$groupby;
        
        $count  = Yii::$app->db2->createCommand($sql)->execute();
        
        $dataProvider = new \yii\data\SqlDataProvider([
            'db'=>'db2',
            'sql'=>$sql,
            'pagination'=> ['pageSize'=>100],
            'totalCount'=>$count,
            'sort'=>[
                    'attributes'=>[
                        'doctor' => [
                            'asc'   =>  ['doctor'=> SORT_ASC],
                            'desc'  =>  ['doctor'=> SORT_DESC],
                            'default' => SORT_DESC,
                            //'label'   => 'Vist Date'
                        ],
                        'fname' => [
                            'asc'   =>  ['fname'=> SORT_ASC],
                            'desc'  =>  ['fname'=> SORT_DESC],
                            'default' => SORT_DESC,
                        ],
                        ],],
            
        ]);
        
//        $query = Dtmain::find();

//        $dataProvider = new ActiveDataProvider([
//            'query' => $query,
//        ]);

       

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
//
//        $query->andFilterWhere([
//            'dtmain_id' => $this->dtmain_id,
//            'fee' => $this->fee,
//            'scount' => $this->scount,
//            'tcount' => $this->tcount,
//            'vstage' => $this->vstage,
//            'vstdate' => $this->vstdate,
//            'vsttime' => $this->vsttime,
//            'tm_no' => $this->tm_no,
//            'rcount' => $this->rcount,
//            'qty_count' => $this->qty_count,
//            'begin_time' => $this->begin_time,
//            'end_time' => $this->end_time,
//            'pregnancy_caries_count' => $this->pregnancy_caries_count,
//            'update_datetime' => $this->update_datetime,
//            'dental_plan_detail_id' => $this->dental_plan_detail_id,
//        ]);

//        $query->andFilterWhere(['like', 'dn', $this->dn])
//            ->andFilterWhere(['like', 'doctor', $this->doctor])
//            ->andFilterWhere(['like', 'hn', $this->hn])
//            ->andFilterWhere(['like', 'icd', $this->icd])
//            ->andFilterWhere(['like', 'note', $this->note])
//            ->andFilterWhere(['like', 'tmcode', $this->tmcode])
//            ->andFilterWhere(['like', 'ttcode', $this->ttcode])
//            ->andFilterWhere(['like', 'vn', $this->vn])
//            ->andFilterWhere(['like', 'doctor_helper', $this->doctor_helper])
//            ->andFilterWhere(['like', 'icd9', $this->icd9])
//            ->andFilterWhere(['like', 'opi_guid', $this->opi_guid])
//            ->andFilterWhere(['like', 'dtmain_guid', $this->dtmain_guid])
//            ->andFilterWhere(['like', 'staff', $this->staff])
//            ->andFilterWhere(['like', 'pregnancy', $this->pregnancy])
//            ->andFilterWhere(['like', 'post_labour', $this->post_labour])
//            ->andFilterWhere(['like', 'report_update', $this->report_update])
//            ->andFilterWhere(['like', 'pregnancy_gingivitis', $this->pregnancy_gingivitis])
//            ->andFilterWhere(['like', 'pregnancy_calculus', $this->pregnancy_calculus])
//            ->andFilterWhere(['like', 'pregnancy_checkup', $this->pregnancy_checkup])
//            ->andFilterWhere(['like', 'hos_guid', $this->hos_guid])
//            ->andFilterWhere(['like', 'dx_guid', $this->dx_guid])
//            ->andFilterWhere(['like', 'department', $this->department])
//            ->andFilterWhere(['like', 'an', $this->an]);

        return $dataProvider;
    }
}
