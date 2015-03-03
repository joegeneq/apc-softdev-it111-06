<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productinventory".
 *
 * @property integer $ID
 * @property string $Name
 * @property string $Description
 * @property integer $QoH
 * @property string $SerialNo
 * @property string $Price
 * @property string $Status
 * @property string $CreateDate
 * @property string $UpdateDate
 * @property string $CreatedBy
 * @property string $UpdatedBy
 * @property integer $Supplier_ID
 *
 * @property Order[] $orders
 * @property Supplier $supplier
 */
class Productinventory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productinventory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Description', 'QoH', 'SerialNo', 'Price', 'Status', 'CreateDate', 'CreatedBy', 'Supplier_ID'], 'required'],
            [['QoH', 'Supplier_ID'], 'integer'],
            [['Price'], 'number'],
            [['CreateDate', 'UpdateDate'], 'safe'],
            [['Name', 'Description'], 'string', 'max' => 225],
            [['SerialNo', 'Status', 'CreatedBy', 'UpdatedBy'], 'string', 'max' => 45]
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
            'Description' => 'Description',
            'QoH' => 'Qo H',
            'SerialNo' => 'Serial No',
            'Price' => 'Price',
            'Status' => 'Status',
            'CreateDate' => 'Create Date',
            'UpdateDate' => 'Update Date',
            'CreatedBy' => 'Created By',
            'UpdatedBy' => 'Updated By',
            'Supplier_ID' => 'Supplier  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['Product Inventory_ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::className(), ['ID' => 'Supplier_ID']);
    }
}
