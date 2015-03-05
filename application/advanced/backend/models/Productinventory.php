<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productinventory".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $qoh
 * @property string $serial_no
 * @property string $price
 * @property string $status
 * @property string $create_date
 * @property string $update_date
 * @property string $created_by
 * @property string $updated_by
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
            [['name', 'description', 'qoh', 'serial_no', 'price', 'status', 'create_date', 'created_by', 'supplier_id'], 'required'],
            [['qoh', 'supplier_id'], 'integer'],
            [['price'], 'number'],
            [['create_date', 'update_date'], 'safe'],
            [['name', 'description'], 'string', 'max' => 225],
            [['serial_no', 'status', 'created_by', 'updated_by'], 'string', 'max' => 45]
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
            'serial_no' => 'Serial No',
            'price' => 'Price',
            'status' => 'Defective Status',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
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
