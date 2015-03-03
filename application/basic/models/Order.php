<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $ID
 * @property string $Date
 * @property string $Status
 * @property integer $NumOfItems
 * @property string $Amount
 * @property string $Discount
 * @property integer $Customer_ID
 * @property integer $Product Inventory_ID
 *
 * @property Customer $customer
 * @property Productinventory $productInventory
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Date', 'Status', 'NumOfItems', 'Amount', 'Customer_ID', 'ProductInventory_ID'], 'required'],
            [['Date'], 'safe'],
            [['NumOfItems', 'Customer_ID', 'Product Inventory_ID'], 'integer'],
            [['Amount', 'Discount'], 'number'],
            [['Status'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Date' => 'Date',
            'Status' => 'Status',
            'NumOfItems' => 'Number Of Items',
            'Amount' => 'Amount',
            'Discount' => 'Discount',
            'Customer_ID' => 'Customer  ID',
            'Product Inventory_ID' => 'Product  Inventory  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['ID' => 'Customer_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductInventory()
    {
        return $this->hasOne(Productinventory::className(), ['ID' => 'Product Inventory_ID']);
    }
}
