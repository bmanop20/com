<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dtmain".
 *
 * @property integer $dtmain_id
 * @property string $dn
 * @property string $doctor
 * @property double $fee
 * @property string $hn
 * @property string $icd
 * @property string $note
 * @property integer $scount
 * @property integer $tcount
 * @property string $tmcode
 * @property string $ttcode
 * @property string $vn
 * @property integer $vstage
 * @property string $vstdate
 * @property string $vsttime
 * @property integer $tm_no
 * @property string $doctor_helper
 * @property integer $rcount
 * @property string $icd9
 * @property integer $qty_count
 * @property string $opi_guid
 * @property string $begin_time
 * @property string $end_time
 * @property string $dtmain_guid
 * @property string $staff
 * @property string $pregnancy
 * @property string $post_labour
 * @property string $report_update
 * @property integer $pregnancy_caries_count
 * @property string $pregnancy_gingivitis
 * @property string $pregnancy_calculus
 * @property string $pregnancy_checkup
 * @property string $hos_guid
 * @property string $update_datetime
 * @property string $dx_guid
 * @property integer $dental_plan_detail_id
 * @property string $department
 * @property string $an
 */
class Dtmain extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    public $jan;
    public $feb;
    public $mar;
    public $apr;
    public $may;
    public $jun;
    public $jul;
    public $aug;
    public $sep;
    public $oct;
    public $nov;
    public $dece;
    
    public static function tableName()
    {
        return 'dtmain';
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
            [['dtmain_id'], 'required'],
            [['dtmain_id', 'scount', 'tcount', 'vstage', 'tm_no', 'rcount', 'qty_count', 'pregnancy_caries_count', 'dental_plan_detail_id'], 'integer'],
            [['fee'], 'number'],
            [['note'], 'string'],
            [['vstdate', 'vsttime', 'begin_time', 'end_time', 'update_datetime'], 'safe'],
            [['dn', 'doctor'], 'string', 'max' => 7],
            [['hn', 'icd9', 'an'], 'string', 'max' => 9],
            [['icd', 'ttcode'], 'string', 'max' => 250],
            [['tmcode'], 'string', 'max' => 10],
            [['vn'], 'string', 'max' => 13],
            [['doctor_helper'], 'string', 'max' => 6],
            [['opi_guid', 'dtmain_guid', 'hos_guid', 'dx_guid'], 'string', 'max' => 38],
            [['staff'], 'string', 'max' => 25],
            [['pregnancy', 'post_labour', 'report_update', 'pregnancy_gingivitis', 'pregnancy_calculus', 'pregnancy_checkup'], 'string', 'max' => 1],
            [['department'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dtmain_id' => 'Dtmain ID',
            'dn' => 'Dn',
            'doctor' => 'Doctor',
            'fee' => 'Fee',
            'hn' => 'Hn',
            'icd' => 'Icd',
            'note' => 'Note',
            'scount' => 'Scount',
            'tcount' => 'Tcount',
            'tmcode' => 'Tmcode',
            'ttcode' => 'Ttcode',
            'vn' => 'Vn',
            'vstage' => 'Vstage',
            'vstdate' => 'Vstdate',
            'vsttime' => 'Vsttime',
            'tm_no' => 'Tm No',
            'doctor_helper' => 'Doctor Helper',
            'rcount' => 'Rcount',
            'icd9' => 'Icd9',
            'qty_count' => 'Qty Count',
            'opi_guid' => 'Opi Guid',
            'begin_time' => 'Begin Time',
            'end_time' => 'End Time',
            'dtmain_guid' => 'Dtmain Guid',
            'staff' => 'Staff',
            'pregnancy' => 'Pregnancy',
            'post_labour' => 'Post Labour',
            'report_update' => 'Report Update',
            'pregnancy_caries_count' => 'Pregnancy Caries Count',
            'pregnancy_gingivitis' => 'Pregnancy Gingivitis',
            'pregnancy_calculus' => 'Pregnancy Calculus',
            'pregnancy_checkup' => 'Pregnancy Checkup',
            'hos_guid' => 'Hos Guid',
            'update_datetime' => 'Update Datetime',
            'dx_guid' => 'Dx Guid',
            'dental_plan_detail_id' => 'Dental Plan Detail ID',
            'department' => 'Department',
            'an' => 'An',
        ];
    }
}
