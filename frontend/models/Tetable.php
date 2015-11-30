<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tetable".
 *
 * @property integer $id
 * @property string $test
 */
class Tetable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tetable';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['test'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'test' => 'Test',
        ];
    }
}
