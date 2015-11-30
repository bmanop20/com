<?php

namespace frontend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Ipt;

/**
 * IptSearch represents the model behind the search form about `frontend\models\Ipt`.
 */
class IptSearch extends Ipt
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['an', 'admdoctor', 'dchdate', 'dchstts', 'dchtime', 'dchtype', 'dthdiagdct', 'hn', 'ivstist', 'ivstost', 'prediag', 'pttype', 'regdate', 'regtime', 'rfrics', 'rfrilct', 'rfrocs', 'rfrolct', 'spclty', 'vn', 'ward', 'rcpt_disease', 'dch_doctor', 'iref_type', 'drg', 'mdc', 'result', 'rxdoctor', 'staff', 'first_ward', 'refer_out_number', 'incharge_doctor', 'an_guid', 'an_lock', 'ergent', 'chart_state', 'receive_chart_date_time', 'receive_chart_staff', 'receive_chart_note', 'ipt_spclty', 'finance_lock', 'last_check_autoincome', 'admit_fee_guid', 'operation_status', 'finance_summary_date', 'estimate_discharge_date', 'old_cause_revisit', 'finance_transfer', 'provision_dx', 'hos_guid', 'chart_stat', 'rcv_date', 'rcv_from', 'hos_guid_ext', 'update_datetime', 'cur_dep_code', 'no_visit', 'no_food', 'confirm_discharge', 'lab_status', 'xray_status', 'grouper_version'], 'safe'],
            [['lockdx', 'ipt_type', 'ipacc', 'ot', 'gravidity', 'parity', 'living_children', 'bw', 'leave_home_day', 'dw_hhc_list_id', 'body_height', 'finance_status_flag', 'ipt_admit_type_id', 'grouper_err', 'grouper_warn', 'grouper_actlos'], 'integer'],
            [['act_money_limit', 'rw', 'wtlos', 'adjrw', 'auto_charge_amount'], 'number'],
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
        $query = Ipt::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>['pageSize'=>80],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'dchdate' => $this->dchdate,
            'dchtime' => $this->dchtime,
            'lockdx' => $this->lockdx,
            'regdate' => $this->regdate,
            'regtime' => $this->regtime,
            'ipt_type' => $this->ipt_type,
            'ipacc' => $this->ipacc,
            'act_money_limit' => $this->act_money_limit,
            'rw' => $this->rw,
            'wtlos' => $this->wtlos,
            'ot' => $this->ot,
            'gravidity' => $this->gravidity,
            'parity' => $this->parity,
            'living_children' => $this->living_children,
            'bw' => $this->bw,
            'receive_chart_date_time' => $this->receive_chart_date_time,
            'adjrw' => $this->adjrw,
            'last_check_autoincome' => $this->last_check_autoincome,
            'leave_home_day' => $this->leave_home_day,
            'finance_summary_date' => $this->finance_summary_date,
            'estimate_discharge_date' => $this->estimate_discharge_date,
            'dw_hhc_list_id' => $this->dw_hhc_list_id,
            'rcv_date' => $this->rcv_date,
            'body_height' => $this->body_height,
            'update_datetime' => $this->update_datetime,
            'finance_status_flag' => $this->finance_status_flag,
            'ipt_admit_type_id' => $this->ipt_admit_type_id,
            'grouper_err' => $this->grouper_err,
            'grouper_warn' => $this->grouper_warn,
            'grouper_actlos' => $this->grouper_actlos,
            'auto_charge_amount' => $this->auto_charge_amount,
        ]);

        $query->andFilterWhere(['like', 'an', $this->an])
            ->andFilterWhere(['like', 'admdoctor', $this->admdoctor])
            ->andFilterWhere(['like', 'dchstts', $this->dchstts])
            ->andFilterWhere(['like', 'dchtype', $this->dchtype])
            ->andFilterWhere(['like', 'dthdiagdct', $this->dthdiagdct])
            ->andFilterWhere(['like', 'hn', $this->hn])
            ->andFilterWhere(['like', 'ivstist', $this->ivstist])
            ->andFilterWhere(['like', 'ivstost', $this->ivstost])
            ->andFilterWhere(['like', 'prediag', $this->prediag])
            ->andFilterWhere(['like', 'pttype', $this->pttype])
            ->andFilterWhere(['like', 'rfrics', $this->rfrics])
            ->andFilterWhere(['like', 'rfrilct', $this->rfrilct])
            ->andFilterWhere(['like', 'rfrocs', $this->rfrocs])
            ->andFilterWhere(['like', 'rfrolct', $this->rfrolct])
            ->andFilterWhere(['like', 'spclty', $this->spclty])
            ->andFilterWhere(['like', 'vn', $this->vn])
            ->andFilterWhere(['like', 'ward', $this->ward])
            ->andFilterWhere(['like', 'rcpt_disease', $this->rcpt_disease])
            ->andFilterWhere(['like', 'dch_doctor', $this->dch_doctor])
            ->andFilterWhere(['like', 'iref_type', $this->iref_type])
            ->andFilterWhere(['like', 'drg', $this->drg])
            ->andFilterWhere(['like', 'mdc', $this->mdc])
            ->andFilterWhere(['like', 'result', $this->result])
            ->andFilterWhere(['like', 'rxdoctor', $this->rxdoctor])
            ->andFilterWhere(['like', 'staff', $this->staff])
            ->andFilterWhere(['like', 'first_ward', $this->first_ward])
            ->andFilterWhere(['like', 'refer_out_number', $this->refer_out_number])
            ->andFilterWhere(['like', 'incharge_doctor', $this->incharge_doctor])
            ->andFilterWhere(['like', 'an_guid', $this->an_guid])
            ->andFilterWhere(['like', 'an_lock', $this->an_lock])
            ->andFilterWhere(['like', 'ergent', $this->ergent])
            ->andFilterWhere(['like', 'chart_state', $this->chart_state])
            ->andFilterWhere(['like', 'receive_chart_staff', $this->receive_chart_staff])
            ->andFilterWhere(['like', 'receive_chart_note', $this->receive_chart_note])
            ->andFilterWhere(['like', 'ipt_spclty', $this->ipt_spclty])
            ->andFilterWhere(['like', 'finance_lock', $this->finance_lock])
            ->andFilterWhere(['like', 'admit_fee_guid', $this->admit_fee_guid])
            ->andFilterWhere(['like', 'operation_status', $this->operation_status])
            ->andFilterWhere(['like', 'old_cause_revisit', $this->old_cause_revisit])
            ->andFilterWhere(['like', 'finance_transfer', $this->finance_transfer])
            ->andFilterWhere(['like', 'provision_dx', $this->provision_dx])
            ->andFilterWhere(['like', 'hos_guid', $this->hos_guid])
            ->andFilterWhere(['like', 'chart_stat', $this->chart_stat])
            ->andFilterWhere(['like', 'rcv_from', $this->rcv_from])
            ->andFilterWhere(['like', 'hos_guid_ext', $this->hos_guid_ext])
            ->andFilterWhere(['like', 'cur_dep_code', $this->cur_dep_code])
            ->andFilterWhere(['like', 'no_visit', $this->no_visit])
            ->andFilterWhere(['like', 'no_food', $this->no_food])
            ->andFilterWhere(['like', 'confirm_discharge', $this->confirm_discharge])
            ->andFilterWhere(['like', 'lab_status', $this->lab_status])
            ->andFilterWhere(['like', 'xray_status', $this->xray_status])
            ->andFilterWhere(['like', 'grouper_version', $this->grouper_version]);

        return $dataProvider;
    }
    

}
