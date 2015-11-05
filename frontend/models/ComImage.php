<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "com_image".
 *
 * @property integer $id
 * @property integer $com_id
 * @property resource $image
 * @property double $filesize
 * @property string $type_type
 */
class ComImage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'com_image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['com_id'], 'required'],
            [['com_id'], 'integer'],
            [['image'], 'string'],
            [['filesize'], 'number'],
            [['type_type'], 'string', 'max' => 30]
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
            'image' => 'Image',
            'filesize' => 'Filesize',
            'type_type' => 'Type Type',
        ];
    }
}
