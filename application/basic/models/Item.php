<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property integer $id_item
 * @property string $item_name
 * @property integer $item_qty
 * @property string $item_unit
 * @property string $item_price
 * @property string $item_serialNo
 * @property string $item_status
 * @property string $item_createDate
 * @property string $item_updateDate
 * @property integer $Sale_id_sale
 * @property integer $Order_id_order
 * @property integer $Supplier_id_supplier
 *
 * @property Sale $saleIdSale
 * @property Order $orderIdOrder
 * @property Supplier $supplierIdSupplier
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_name', 'item_qty', 'item_unit', 'item_price', 'item_serialNo', 'item_status', 'Sale_id_sale', 'Order_id_order', 'Supplier_id_supplier'], 'required'],
            [['item_qty', 'Sale_id_sale', 'Order_id_order', 'Supplier_id_supplier'], 'integer'],
            [['item_price'], 'number'],
            [['item_createDate', 'item_updateDate'], 'safe'],
            [['item_name'], 'string', 'max' => 225],
            [['item_unit', 'item_serialNo'], 'string', 'max' => 45],
            [['item_status'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_item' => 'Id Item',
            'item_name' => 'Item Name',
            'item_qty' => 'Item Qty',
            'item_unit' => 'Item Unit',
            'item_price' => 'Item Price',
            'item_serialNo' => 'Item Serial No',
            'item_status' => 'Item Status',
            'item_createDate' => 'Item Create Date',
            'item_updateDate' => 'Item Update Date',
            'Sale_id_sale' => 'Sale Id Sale',
            'Order_id_order' => 'Order Id Order',
            'Supplier_id_supplier' => 'Supplier Id Supplier',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSaleIdSale()
    {
        return $this->hasOne(Sale::className(), ['id_sale' => 'Sale_id_sale']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderIdOrder()
    {
        return $this->hasOne(Order::className(), ['id_order' => 'Order_id_order']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplierIdSupplier()
    {
        return $this->hasOne(Supplier::className(), ['id_supplier' => 'Supplier_id_supplier']);
    }
}
