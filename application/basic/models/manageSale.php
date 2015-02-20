<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sale".
 *
 * @property integer $id_sale
 * @property string $sale_date
 * @property string $sale_orNo
 * @property integer $Customer_id_customer
 *
 * @property Item[] $items
 * @property Customer $customerIdCustomer
 */
class manageSale extends \yii\db\ActiveRecord
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
            [['sale_date', 'sale_orNo', 'Customer_id_customer'], 'required'],
            [['sale_date'], 'safe'],
            [['Customer_id_customer'], 'integer'],
            [['sale_orNo'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_sale' => 'Id Sale',
            'sale_date' => 'Sale Date',
            'sale_orNo' => 'Sale Or No',
            'Customer_id_customer' => 'Customer Id Customer',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['Sale_id_sale' => 'id_sale']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerIdCustomer()
    {
        return $this->hasOne(Customer::className(), ['id_customer' => 'Customer_id_customer']);
    }
}
