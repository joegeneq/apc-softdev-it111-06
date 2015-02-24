<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $ID
 * @property string $Date
 * @property string $Status
 * @property integer $ItemQty
 * @property integer $Customer_ID
 * @property integer $Item_ID
 *
 * @property Customer $customer
 * @property Item $item
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
            [['Date', 'Status', 'ItemQty', 'Customer_ID', 'Item_ID'], 'required'],
            [['Date'], 'safe'],
            [['ItemQty', 'Customer_ID', 'Item_ID'], 'integer'],
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
            'ItemQty' => 'Item Qty',
            'Customer_ID' => 'Customer  ID',
            'Item_ID' => 'Item  ID',
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
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['ID' => 'Item_ID']);
    }
}
