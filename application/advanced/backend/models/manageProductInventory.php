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
 * @property string $items_sold
 * @property string $serial_no
 * @property string $price
 * @property string $status
 * @property string $create_date
 * @property integer $supplier_id
 *
 * @property Order[] $orders
 * @property Supplier $supplier
 */
class manageProductInventory extends \yii\db\ActiveRecord
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
            [['name', 'description', 'qoh', 'items_sold', 'serial_no', 'price', 'status', 'supplier_id'], 'required'],
            [['qoh', 'supplier_id'], 'integer'],
            [['price'], 'number'],
            [['create_date'], 'safe'],
            [['name', 'description'], 'string', 'max' => 225],
            [['items_sold', 'serial_no', 'status'], 'string', 'max' => 45]
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
            'serial_no' => 'Serial Number',
            'price' => 'Price',
            'status' => 'Status',
            'create_date' => 'Create Date',
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
}
