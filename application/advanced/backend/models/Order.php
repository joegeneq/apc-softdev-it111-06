<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property string $date
 * @property string $status
 * @property integer $num_items
 * @property string $amount
 * @property string $discount
 * @property integer $productinventory_id
 * @property integer $customer_id
 *
 * @property Productinventory $productinventory
 * @property Customer $customer
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
            [['date', 'status', 'num_items', 'amount', 'productinventory_id', 'customer_id'], 'required'],
            [['date'], 'safe'],
            [['num_items', 'productinventory_id', 'customer_id'], 'integer'],
            [['amount', 'discount'], 'number'],
            [['status'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'status' => 'Status',
            'num_items' => 'Num Items',
            'amount' => 'Amount',
            'discount' => 'Discount',
            'productinventory_id' => 'Productinventory ID',
            'customer_id' => 'Customer ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductinventory()
    {
        return $this->hasOne(Productinventory::className(), ['id' => 'productinventory_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'customer_id']);
    }
}
