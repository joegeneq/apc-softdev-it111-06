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
 * @property string $serial_no
 * @property string $price
 * @property string $status
 * @property string $create_date
 * @property integer $supplier_id
 *
 * @property Order[] $orders
 * @property Supplier $supplier
 */
class Productinventory extends \yii\db\ActiveRecord
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
            [['qoh', 'items_sold', 'supplier_id'], 'integer'],
            [['price'], 'number'],
            [['create_date'], 'safe'],
            [['name', 'description'], 'string', 'max' => 225],
            [['serial_no', 'status'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'qoh' => 'Qoh',
            'items_sold' => 'Items Sold',
            'serial_no' => 'Serial No',
            'price' => 'Price',
            'status' => 'Status',
            'create_date' => 'Create Date',
            'supplier_id' => 'Supplier ID',
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
