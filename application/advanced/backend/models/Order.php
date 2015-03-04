<?php

namespace app\models;

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
 * @property integer $customer_id
 * @property integer $productinventory_id
 *
 * @property Customer $customer
 * @property Productinventory $productinventory
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
            [['date', 'status', 'num_items', 'amount', 'customer_id', 'productinventory_id'], 'required'],
            [['date'], 'safe'],
            [['num_items', 'customer_id', 'productinventory_id'], 'integer'],
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
            'num_items' => 'Number of Items',
            'amount' => 'Amount',
            'discount' => 'Discount',
            'customer_id' => 'Customer Name',
            'productinventory_id' => 'Product Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'customer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductinventory()
    {
        return $this->hasOne(Productinventory::className(), ['id' => 'productinventory_id']);
    }
}
