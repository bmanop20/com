<?php

namespace frontend\models;

use Yii;


/**
 * This is the model class for table "computer".
 *
 * @property integer $id
 * @property integer $com_type_id
 * @property string $cpu_type
 * @property string $ram_type
 * @property string $cpuspeed
 * @property string $ramspeed
 * @property string $os
 * @property integer $arch_type_id
 * @property string $brand
 * @property string $code
 */
class Computer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'computer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['com_type_id', 'cpu_type', 'ram_type', 'cpuspeed', 'ramspeed', 'os', 'arch_type_id'], 'required'],
            [['com_type_id', 'arch_type_id'], 'integer'],
            [['cpu_type', 'ram_type', 'brand', 'code'], 'string', 'max' => 50],
            
            [['os','cpuspeed', 'ramspeed'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'com_type_id' => 'ชนิดคอมพิวเตอร์',
            'cpu_type' => 'ชนิด CPU',
            'ram_type' => 'ชนิด Ram',
            'cpuspeed' => 'Cpuspeed',
            'ramspeed' => 'Ramspeed',
            'os' => 'Os',
            'arch_type_id' => 'Os Type',
            'brand' => 'ยี้ห้อ',
            'code' => 'หมายเลขครุภัณฑ์',
        ];
    }
}
