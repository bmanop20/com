<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "com_dep".
 *
 * @property integer $id
 * @property integer $com_id
 * @property integer $dep_id
 * @property string $datein
 * @property string $dateout
 */
class ComDep extends \yii\db\ActiveRecord
{
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
        ];
    }
}
