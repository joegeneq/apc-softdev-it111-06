<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id_order
 * @property string $order_date
 * @property string $order_status
 * @property integer $Customer_id_customer
 *
 * @property Item[] $items
 * @property Customer $customerIdCustomer
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
            [['order_date', 'order_status', 'Customer_id_customer'], 'required'],
            [['order_date'], 'safe'],
            [['Customer_id_customer'], 'integer'],
            [['order_status'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_order' => 'Id Order',
            'order_date' => 'Order Date',
            'order_status' => 'Order Status',
            'Customer_id_customer' => 'Customer Id Customer',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['Order_id_order' => 'id_order']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerIdCustomer()
    {
        return $this->hasOne(Customer::className(), ['id_customer' => 'Customer_id_customer']);
    }
}
