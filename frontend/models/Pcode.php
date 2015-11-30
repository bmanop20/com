<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pcode".
 *
 * @property string $code
 * @property string $name
 * @property integer $age_min
 * @property integer $age_max
 * @property string $hos_guid
 * @property string $hos_guid_ext
 */
class Pcode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pcode';
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
            [['age_min', 'age_max'], 'integer'],
            [['code'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 150],
            [['hos_guid'], 'string', 'max' => 38],
            [['hos_guid_ext'], 'string', 'max' => 64]
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
            'age_min' => 'Age Min',
            'age_max' => 'Age Max',
            'hos_guid' => 'Hos Guid',
            'hos_guid_ext' => 'Hos Guid Ext',
        ];
    }
}
