<?php

/**
 * This is the model class for table "item_stocks".
 *
 * The followings are the available columns in table 'item_stocks':
 * @property integer $id
 * @property string $item_stocks_serial_no
 * @property string $item_stocks_defective_status
 * @property integer $item_id
 * @property integer $sale_detail_id
 *
 * The followings are the available model relations:
 * @property Item $item
 * @property SaleDetail $saleDetail
 * @property ReplacementDetail[] $replacementDetails
 * @property ReplacementDetail[] $replacementDetails1
 */
class ItemStocks extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'item_stocks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_stocks_serial_no, item_stocks_defective_status, item_id', 'required'),
			array('item_id, sale_detail_id', 'numerical', 'integerOnly'=>true),
			array('item_stocks_serial_no, item_stocks_defective_status', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, item_stocks_serial_no, item_stocks_defective_status, item_id, sale_detail_id', 'safe', 'on'=>'search'),
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
			'saleDetail' => array(self::BELONGS_TO, 'SaleDetail', 'sale_detail_id'),
			'replacementDetails' => array(self::HAS_MANY, 'ReplacementDetail', 'item_stocks_for_repl_id'),
			'replacementDetails1' => array(self::HAS_MANY, 'ReplacementDetail', 'item_stocks_replaced_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'item_stocks_serial_no' => 'Item Serial No.',
			'item_stocks_defective_status' => 'Defective Status',
			'item_id' => 'Item Description',
			'sale_detail_id' => 'Official Receipt No.',
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
		$criteria->compare('item_stocks_serial_no',$this->item_stocks_serial_no,true);
		$criteria->compare('item_stocks_defective_status',$this->item_stocks_defective_status,true);
		$criteria->compare('item_id',$this->item_id);
		$criteria->compare('sale_detail_id',$this->sale_detail_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ItemStocks the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
