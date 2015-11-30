<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "er_regist".
 *
 * @property string $vn
 * @property string $vstdate
 * @property integer $er_period
 * @property integer $er_pt_type
 * @property integer $er_emergency_type
 * @property integer $er_dch_type
 * @property string $er_doctor
 * @property string $er_legal_action
 * @property string $er_time_1
 * @property string $er_time_2
 * @property string $er_time_3
 * @property string $dba
 * @property string $er_list
 * @property string $oper_note
 * @property string $enter_er_time
 * @property string $doctor_tx_time
 * @property string $finish_time
 * @property string $vn_guid
 * @property string $observe
 * @property string $hos_guid
 * @property integer $ems_command_list_id
 * @property string $er_screen
 * @property integer $er_emergency_level_id
 * @property string $update_datetime
 * @property string $update_staff
 * @property string $er_depcode
 */
class ErRegist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'er_regist';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db2');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vn'], 'required'],
            [['vstdate', 'er_time_1', 'er_time_2', 'er_time_3', 'enter_er_time', 'doctor_tx_time', 'finish_time', 'update_datetime'], 'safe'],
            [['er_period', 'er_pt_type', 'er_emergency_type', 'er_dch_type', 'ems_command_list_id', 'er_emergency_level_id'], 'integer'],
            [['vn'], 'string', 'max' => 13],
            [['er_doctor'], 'string', 'max' => 7],
            [['er_legal_action', 'dba', 'observe', 'er_screen'], 'string', 'max' => 1],
            [['er_list', 'oper_note'], 'string', 'max' => 250],
            [['vn_guid', 'hos_guid'], 'string', 'max' => 38],
            [['update_staff'], 'string', 'max' => 50],
            [['er_depcode'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'vn' => 'Vn',
            'vstdate' => 'Vstdate',
            'er_period' => 'Er Period',
            'er_pt_type' => 'Er Pt Type',
            'er_emergency_type' => 'Er Emergency Type',
            'er_dch_type' => 'Er Dch Type',
            'er_doctor' => 'Er Doctor',
            'er_legal_action' => 'Er Legal Action',
            'er_time_1' => 'Er Time 1',
            'er_time_2' => 'Er Time 2',
            'er_time_3' => 'Er Time 3',
            'dba' => 'Dba',
            'er_list' => 'Er List',
            'oper_note' => 'Oper Note',
            'enter_er_time' => 'Enter Er Time',
            'doctor_tx_time' => 'Doctor Tx Time',
            'finish_time' => 'Finish Time',
            'vn_guid' => 'Vn Guid',
            'observe' => 'Observe',
            'hos_guid' => 'Hos Guid',
            'ems_command_list_id' => 'Ems Command List ID',
            'er_screen' => 'Er Screen',
            'er_emergency_level_id' => 'Er Emergency Level ID',
            'update_datetime' => 'Update Datetime',
            'update_staff' => 'Update Staff',
            'er_depcode' => 'Er Depcode',
        ];
    }
}
