<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property integer $id_supplier
 * @property string $supplier_name
 * @property string $supplier_address
 * @property integer $supplier_contact
 * @property string $supplier_createDate
 * @property string $supplier_updateDate
 *
 * @property Item[] $items
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['supplier_name', 'supplier_address', 'supplier_contact'], 'required'],
            [['supplier_contact'], 'integer'],
            [['supplier_createDate', 'supplier_updateDate'], 'safe'],
            [['supplier_name'], 'string', 'max' => 45],
            [['supplier_address'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_supplier' => 'Id Supplier',
            'supplier_name' => 'Supplier Name',
            'supplier_address' => 'Supplier Address',
            'supplier_contact' => 'Supplier Contact',
            'supplier_createDate' => 'Supplier Create Date',
            'supplier_updateDate' => 'Supplier Update Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['Supplier_id_supplier' => 'id_supplier']);
    }
}
