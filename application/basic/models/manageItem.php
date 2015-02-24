<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property integer $ID
 * @property string $Name
 * @property integer $Qty
 * @property string $Unit
 * @property string $Price
 * @property string $SerialNo
 * @property string $Status
 * @property string $CreateDate
 * @property string $UpdateDate
 * @property integer $Supplier_ID
 *
 * @property Supplier $supplier
 * @property Order[] $orders
 * @property Sale[] $sales
 */
class manageItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Qty', 'Unit', 'Price', 'SerialNo', 'Status', 'Supplier_ID'], 'required'],
            [['Qty', 'Supplier_ID'], 'integer'],
            [['Price'], 'number'],
            [['CreateDate', 'UpdateDate'], 'safe'],
            [['Name'], 'string', 'max' => 225],
            [['Unit', 'SerialNo'], 'string', 'max' => 45],
            [['Status'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Name' => 'Name',
            'Qty' => 'Qty',
            'Unit' => 'Unit',
            'Price' => 'Price',
            'SerialNo' => 'Serial No',
            'Status' => 'Status',
            'CreateDate' => 'Create Date',
            'UpdateDate' => 'Update Date',
            'Supplier_ID' => 'Supplier  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::className(), ['ID' => 'Supplier_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['Item_ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSales()
    {
        return $this->hasMany(Sale::className(), ['Item_ID' => 'ID']);
    }
}
