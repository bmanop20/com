<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peripherals".
 *
 * @property integer $id
 * @property integer $com_id
 * @property integer $per_type_id
 * @property string $per_brand
 * @property string $model
 * @property string $code
 */
class Peripherals extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peripherals';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['com_id', 'per_type_id', 'per_brand', 'model', 'code'], 'required'],
            [['com_id', 'per_type_id'], 'integer'],
            [['per_brand', 'model', 'code'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'com_id' => 'Com ID',
            'per_type_id' => 'Per Type ID',
            'per_brand' => 'Per Brand',
            'model' => 'Model',
            'code' => 'Code',
        ];
    }
}
