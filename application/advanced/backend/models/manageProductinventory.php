<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "productinventory".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $qoh
 * @property integer $items_sold
 * @property integer $items_remaining
 * @property string $price
 * @property string $status
 * @property string $create_date
 * @property string $update_date
 * @property integer $supplier_id
 *
 * @property Order[] $orders
 * @property Supplier $supplier
 * @property Purchase[] $purchases
 */
class manageProductinventory extends \yii\db\ActiveRecord
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
            [['name', 'description', 'qoh', 'items_sold', 'price', 'status', 'supplier_id'], 'required'],
            [['qoh', 'items_sold', 'items_remaining', 'supplier_id'], 'integer'],
            [['price'], 'number'],
            [['create_date', 'update_date'], 'safe'],
            [['name', 'description'], 'string', 'max' => 225],
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
            'name' => 'Product Name',
            'description' => 'Description',
            'qoh' => 'Quantity on Hand',
            'items_sold' => 'Items Sold',
            'items_remaining' => 'Items Remaining',
            'price' => 'Price',
            'status' => 'Status',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
            'supplier_id' => 'Supplier Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['productinventory_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::className(), ['id' => 'supplier_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPurchases()
    {
        return $this->hasMany(Purchase::className(), ['productinventory_id' => 'id']);
    }
}
