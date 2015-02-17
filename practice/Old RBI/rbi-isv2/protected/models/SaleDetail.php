<?php

/**
 * This is the model class for table "sale_detail".
 *
 * The followings are the available columns in table 'sale_detail':
 * @property integer $id
 * @property integer $sale_id
 * @property integer $item_id
 * @property integer $sale_quantity
 * @property string $sale_discount
 * @property string $sale_price
 *
 * The followings are the available model relations:
 * @property Item $item
 * @property Sale $sale
 */
class SaleDetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sale_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sale_id, item_id, sale_quantity, sale_price', 'required'),
			array('sale_id, item_id, sale_quantity', 'numerical', 'integerOnly'=>true),
			array('sale_discount', 'length', 'max'=>2),
			array('sale_price', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, sale_id, item_id, sale_quantity, sale_discount, sale_price', 'safe', 'on'=>'search'),
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
			'item' => array(self::BELONGS_TO, 'Item', 'item_id'),
			'sale' => array(self::BELONGS_TO, 'Sale', 'sale_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sale_id' => 'Official Receipt No.',
			'item_id' => 'Item Description',
			'sale_quantity' => 'Item Quantity',
			'sale_discount' => 'Discount',
			'sale_price' => 'Price',
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
		
		
		
	
		
		$criteria->compare('t.id',$this->id);
		$criteria->compare('saleDetail.sale_officialreceipt_no',$this->sale_id, true);
		$criteria->compare('saleDetail.item_description',$this->item_id, true);
		
		$criteria->compare('sale_quantity',$this->sale_quantity);
		$criteria->compare('sale_discount',$this->sale_discount,true);
		$criteria->compare('sale_price',$this->sale_price,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SaleDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
