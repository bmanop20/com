<?php

namespace frontend\models;

use Yii;
use frontend\models\Department;
use frontend\models\Computer;
/**
 * This is the model class for table "com_dep".
 *
 * @property integer $id
 * @property integer $com_id
 * @property integer $dep_id
 * @property string $datein
 * @property string $dateout
 * @property string $name
 */
class ComDep extends \yii\db\ActiveRecord
{
    public $name = "";
    public $code = "";
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'com_dep';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['com_id', 'dep_id', 'datein'], 'required'],
            [['com_id', 'dep_id'], 'integer'],
            [['datein', 'dateout'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'com_id' => 'หมายเลขครุภัณฑ์',
            'dep_id' => 'แผนก',
            'datein' => 'วันที่ย้ายเข้า',
            'dateout' => 'Dateout',
            'name' => 'กลุ่มงาน/ฝ่าย',
            'code' => 'หมายเลขครุภัณฑ์'
            
        ];
    }
    
    public function getDepName($id){
        $model = Department::find()->where(['id'=>$id])->one();
        return $model->name;
    }
    
   public function getComCode($id){
       $model = Computer::find()->where(['id'=>$id])->one();
       $code = (empty($model->code) ? 'not set' : $model->code);
       return $code;
       
   }
}
