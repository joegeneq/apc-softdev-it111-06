<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property string $date
 * @property integer $qty
 * @property integer $supplier_id
 * @property integer $productinventory_id
 *
 * @property Supplier $supplier
 * @property Productinventory $productinventory
 */
class generatedOrder extends \yii\db\ActiveRecord
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
            [['date'], 'safe'],
            [['qty', 'supplier_id', 'productinventory_id'], 'required'],
            [['qty', 'supplier_id', 'productinventory_id'], 'integer']
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
            'qty' => 'Quantity',
            'supplier_id' => 'Supplier Name',
            'productinventory_id' => 'Product Name',
        ];
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
    public function getProductinventory()
    {
        return $this->hasOne(Productinventory::className(), ['id' => 'productinventory_id']);
    }
}
