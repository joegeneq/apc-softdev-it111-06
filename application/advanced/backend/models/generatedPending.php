<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "purchase".
 *
 * @property integer $id
 * @property string $date
 * @property string $status
 * @property integer $num_items
 * @property string $total_amount
 * @property integer $productinventory_id
 * @property integer $customer_id
 *
 * @property Productinventory $productinventory
 * @property Customer $customer
 */
class generatedPending extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'purchase';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['status', 'num_items', 'productinventory_id', 'customer_id'], 'required'],
            [['num_items', 'productinventory_id', 'customer_id'], 'integer'],
            [['total_amount'], 'number'],
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
            'total_amount' => 'Total Amount',
            'productinventory_id' => 'Product Name',
            'customer_id' => 'Customer Name',
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
     public function getAmount()
     {
       

        return ($this->productinventory->price * $this->num_items);
    }
}
