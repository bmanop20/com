<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "opitemrece".
 *
 * @property string $hos_guid
 * @property string $vn
 * @property string $hn
 * @property string $an
 * @property string $icode
 * @property integer $qty
 * @property string $drugusage
 * @property string $idr
 * @property integer $iperday
 * @property double $iperdose
 * @property string $recetime
 * @property double $unitprice
 * @property string $vstdate
 * @property string $vsttime
 * @property string $doctor
 * @property string $rxdate
 * @property string $rxtime
 * @property string $sp_use
 * @property string $hcode
 * @property string $print
 * @property string $dep_code
 * @property string $finance_number
 * @property double $discount
 * @property string $use_right
 * @property string $node_id
 * @property integer $order_no
 * @property string $sub_type
 * @property string $pttype
 * @property string $income
 * @property string $remain
 * @property string $item_type
 * @property string $staff
 * @property string $doctor_lock
 * @property string $paidst
 * @property integer $item_no
 * @property string $last_modified
 * @property double $sum_price
 * @property double $cost
 * @property integer $stock_department_id
 * @property string $command_doctor
 * @property integer $opi_doctor_finance_type_id
 */
class Opitemrece extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $amount = 0;
    public $cnt = 0;
    public static function tableName()
    {
        return 'opitemrece';
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
            [['hos_guid'], 'required'],
            [['qty', 'iperday', 'order_no', 'item_no', 'stock_department_id', 'opi_doctor_finance_type_id'], 'integer'],
            [['iperdose', 'unitprice', 'discount', 'sum_price', 'cost'], 'number'],
            [['recetime', 'vstdate', 'vsttime', 'rxdate', 'rxtime', 'last_modified'], 'safe'],
            [['hos_guid'], 'string', 'max' => 38],
            [['vn'], 'string', 'max' => 13],
            [['hn', 'an'], 'string', 'max' => 9],
            [['icode', 'drugusage', 'sp_use', 'finance_number'], 'string', 'max' => 7],
            [['idr'], 'string', 'max' => 30],
            [['doctor', 'command_doctor'], 'string', 'max' => 10],
            [['hcode'], 'string', 'max' => 5],
            [['print', 'use_right', 'node_id', 'sub_type', 'remain', 'item_type', 'doctor_lock'], 'string', 'max' => 1],
            [['dep_code'], 'string', 'max' => 3],
            [['pttype', 'income', 'paidst'], 'string', 'max' => 2],
            [['staff'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hos_guid' => 'Hos Guid',
            'vn' => 'Vn',
            'hn' => 'Hn',
            'an' => 'An',
            'icode' => 'Icode',
            'qty' => 'Qty',
            'drugusage' => 'Drugusage',
            'idr' => 'Idr',
            'iperday' => 'Iperday',
            'iperdose' => 'Iperdose',
            'recetime' => 'Recetime',
            'unitprice' => 'Unitprice',
            'vstdate' => 'Vstdate',
            'vsttime' => 'Vsttime',
            'doctor' => 'Doctor',
            'rxdate' => 'Rxdate',
            'rxtime' => 'Rxtime',
            'sp_use' => 'Sp Use',
            'hcode' => 'Hcode',
            'print' => 'Print',
            'dep_code' => 'Dep Code',
            'finance_number' => 'Finance Number',
            'discount' => 'Discount',
            'use_right' => 'Use Right',
            'node_id' => 'Node ID',
            'order_no' => 'Order No',
            'sub_type' => 'Sub Type',
            'pttype' => 'Pttype',
            'income' => 'Income',
            'remain' => 'Remain',
            'item_type' => 'Item Type',
            'staff' => 'Staff',
            'doctor_lock' => 'Doctor Lock',
            'paidst' => 'Paidst',
            'item_no' => 'Item No',
            'last_modified' => 'Last Modified',
            'sum_price' => 'Sum Price',
            'cost' => 'Cost',
            'stock_department_id' => 'Stock Department ID',
            'command_doctor' => 'Command Doctor',
            'opi_doctor_finance_type_id' => 'Opi Doctor Finance Type ID',
        ];
    }
}
