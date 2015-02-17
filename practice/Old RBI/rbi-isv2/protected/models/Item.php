<?php

/**
 * This is the model class for table "item".
 *
 * The followings are the available columns in table 'item':
 * @property integer $id
 * @property string $item_description
 * @property integer $item_qoh
 * @property string $item_qoh_unit
 * @property integer $item_qty_min
 * @property string $item_qty_min_unit
 * @property string $item_price
 * @property integer $supplier_id
 *
 * The followings are the available model relations:
 * @property Supplier $supplier
 * @property ItemPrice[] $itemPrices
 * @property ItemQty[] $itemQties
 * @property ItemStocks[] $itemStocks
 * @property OrderDetail[] $orderDetails
 * @property ReplacementDetail[] $replacementDetails
 * @property ReplacementDetail[] $replacementDetails1
 * @property SaleDetail[] $saleDetails
 */
class Item extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_description, item_qoh, item_qty_min, supplier_id', 'required'),
			array('item_qoh, item_qty_min, supplier_id', 'numerical', 'integerOnly'=>true),
			array('item_description, item_qoh_unit, item_qty_min_unit', 'length', 'max'=>45),
			array('item_price', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, item_description, item_qoh, item_qoh_unit, item_qty_min, item_qty_min_unit, item_price, supplier_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'supplier' => array(self::BELONGS_TO, 'Supplier', 'supplier_id'),
			'itemPrices' => array(self::HAS_MANY, 'ItemPrice', 'item_id'),
			'itemQties' => array(self::HAS_MANY, 'ItemQty', 'item_id'),
			'itemStocks' => array(self::HAS_MANY, 'ItemStocks', 'item_id'),
			'orderDetails' => array(self::HAS_MANY, 'OrderDetail', 'item_id'),
			'replacementDetails' => array(self::HAS_MANY, 'ReplacementDetail', 'item_for_replacement_id'),
			'replacementDetails1' => array(self::HAS_MANY, 'ReplacementDetail', 'item_replaced_id'),
			'saleDetails' => array(self::HAS_MANY, 'SaleDetail', 'item_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'item_description' => 'Item Description',
			'item_qoh' => 'Quantity-On-Hand',
			'item_qoh_unit' => 'QOH Unit',
			'item_qty_min' => 'Quantity Minimum',
			'item_qty_min_unit' => 'QM Unit',
			'item_price' => 'Price',
			'supplier_id' => 'Supplier',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('item_description',$this->item_description,true);
		$criteria->compare('item_qoh',$this->item_qoh);
		$criteria->compare('item_qoh_unit',$this->item_qoh_unit,true);
		$criteria->compare('item_qty_min',$this->item_qty_min);
		$criteria->compare('item_qty_min_unit',$this->item_qty_min_unit,true);
		$criteria->compare('item_price',$this->item_price,true);
		$criteria->compare('t.id',$this->id);
                $criteria->compare('supplier.supplier_name',$this->supplier_id, true);
                $criteria->with=array('supplier');


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Item the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
