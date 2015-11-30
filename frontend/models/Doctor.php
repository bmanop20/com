<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "doctor".
 *
 * @property string $code
 * @property string $name
 * @property string $shortname
 * @property string $licenseno
 * @property string $department
 * @property string $jobposition
 * @property string $active
 * @property string $force_diagnosis
 * @property string $oldcode
 * @property string $search_keyword
 * @property string $cid
 * @property integer $position_id
 * @property string $addrpart
 * @property string $moopart
 * @property string $zoipart
 * @property string $roadpart
 * @property string $tmbpart
 * @property string $amppart
 * @property string $chwpart
 * @property string $nationality
 * @property string $doctor_guid
 * @property string $allow_df_edit
 * @property string $force_icd_diagnosis
 * @property string $ename
 * @property string $spclty
 * @property string $clinic
 * @property integer $doctor_department_id
 * @property string $name_soundex
 * @property string $chronic_staff
 * @property string $hos_guid
 * @property string $provider_type_code
 * @property string $sex
 * @property string $council_code
 * @property string $birth_date
 * @property string $start_date
 * @property string $finish_date
 * @property string $move_from_hospcode
 * @property string $move_to_hospcode
 * @property string $update_datetime
 * @property string $pname
 * @property string $lname
 * @property string $fname
 * @property integer $emp_id
 * @property integer $sub_spclty_id
 * @property integer $doctor_type_id
 */
class Doctor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $fname;
    public static function tableName()
    {
        return 'doctor';
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
            [['code'], 'required'],
            [['position_id', 'doctor_department_id', 'emp_id', 'sub_spclty_id', 'doctor_type_id'], 'integer'],
            [['birth_date', 'start_date', 'finish_date', 'update_datetime'], 'safe'],
            [['code'], 'string', 'max' => 15],
            [['name', 'name_soundex'], 'string', 'max' => 150],
            [['shortname', 'licenseno', 'jobposition', 'pname', 'lname'], 'string', 'max' => 50],
            [['department'], 'string', 'max' => 250],
            [['active', 'force_diagnosis', 'allow_df_edit', 'force_icd_diagnosis', 'chronic_staff', 'sex'], 'string', 'max' => 1],
            [['oldcode'], 'string', 'max' => 10],
            [['search_keyword'], 'string', 'max' => 25],
            [['cid'], 'string', 'max' => 17],
            [['addrpart', 'moopart', 'zoipart', 'roadpart', 'tmbpart', 'amppart', 'chwpart', 'nationality'], 'string', 'max' => 20],
            [['doctor_guid', 'hos_guid'], 'string', 'max' => 38],
            [['ename'], 'string', 'max' => 200],
            [['spclty', 'provider_type_code', 'council_code'], 'string', 'max' => 2],
            [['clinic'], 'string', 'max' => 3],
            [['move_from_hospcode', 'move_to_hospcode'], 'string', 'max' => 5],
            [['fname'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'name' => 'Name',
            'shortname' => 'Shortname',
            'licenseno' => 'Licenseno',
            'department' => 'Department',
            'jobposition' => 'Jobposition',
            'active' => 'Active',
            'force_diagnosis' => 'Force Diagnosis',
            'oldcode' => 'Oldcode',
            'search_keyword' => 'Search Keyword',
            'cid' => 'Cid',
            'position_id' => 'Position ID',
            'addrpart' => 'Addrpart',
            'moopart' => 'Moopart',
            'zoipart' => 'Zoipart',
            'roadpart' => 'Roadpart',
            'tmbpart' => 'Tmbpart',
            'amppart' => 'Amppart',
            'chwpart' => 'Chwpart',
            'nationality' => 'Nationality',
            'doctor_guid' => 'Doctor Guid',
            'allow_df_edit' => 'Allow Df Edit',
            'force_icd_diagnosis' => 'Force Icd Diagnosis',
            'ename' => 'Ename',
            'spclty' => 'Spclty',
            'clinic' => 'Clinic',
            'doctor_department_id' => 'Doctor Department ID',
            'name_soundex' => 'Name Soundex',
            'chronic_staff' => 'Chronic Staff',
            'hos_guid' => 'Hos Guid',
            'provider_type_code' => 'Provider Type Code',
            'sex' => 'Sex',
            'council_code' => 'Council Code',
            'birth_date' => 'Birth Date',
            'start_date' => 'Start Date',
            'finish_date' => 'Finish Date',
            'move_from_hospcode' => 'Move From Hospcode',
            'move_to_hospcode' => 'Move To Hospcode',
            'update_datetime' => 'Update Datetime',
            'pname' => 'Pname',
            'lname' => 'Lname',
            'fname' => 'Fname',
            'emp_id' => 'Emp ID',
            'sub_spclty_id' => 'Sub Spclty ID',
            'doctor_type_id' => 'Doctor Type ID',
        ];
    }
    
   public function getDName($code){
       $model = Doctor::find()->where(['code'=>$code])->one();
       //$name = $model('name');
       //print_r($model);
       $name = @$model->name;
       
       return $name;
   }
}
