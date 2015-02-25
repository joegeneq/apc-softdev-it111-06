<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sale".
 *
 * @property string $ID
 * @property string $Date
 * @property string $ReceiptNo
 * @property integer $ItemQty
 * @property integer $Customer_ID
 * @property integer $Item_ID
 *
 * @property Customer $customer
 * @property Item $item
 */
class Sale extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sale';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Date', 'ReceiptNo', 'ItemQty', 'Customer_ID', 'Item_ID'], 'required'],
            [['Date'], 'safe'],
            [['ItemQty', 'Customer_ID', 'Item_ID'], 'integer'],
            [['ReceiptNo'], 'string', 'max' => 45]
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
            'ReceiptNo' => 'Receipt No',
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
