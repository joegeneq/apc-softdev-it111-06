<?php

/**
 * This is the model class for table "replacement_detail".
 *
 * The followings are the available columns in table 'replacement_detail':
 * @property integer $id
 * @property integer $replacement_id
 * @property integer $item_for_replacement_id
 * @property integer $item_stocks_for_repl_id
 * @property integer $item_replaced_id
 * @property integer $item_stocks_replaced_id
 *
 * The followings are the available model relations:
 * @property Replacement $replacement
 * @property Item $itemForReplacement
 * @property Item $itemReplaced
 * @property ItemStocks $itemStocksForRepl
 * @property ItemStocks $itemStocksReplaced
 */
class ReplacementDetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'replacement_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('replacement_id, item_for_replacement_id, item_replaced_id', 'required'),
			array('replacement_id, item_for_replacement_id, item_stocks_for_repl_id, item_replaced_id, item_stocks_replaced_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, replacement_id, item_for_replacement_id, item_stocks_for_repl_id, item_replaced_id, item_stocks_replaced_id', 'safe', 'on'=>'search'),
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
			'replacement' => array(self::BELONGS_TO, 'Replacement', 'replacement_id'),
			'itemForReplacement' => array(self::BELONGS_TO, 'Item', 'item_for_replacement_id'),
			'itemReplaced' => array(self::BELONGS_TO, 'Item', 'item_replaced_id'),
			'itemStocksForRepl' => array(self::BELONGS_TO, 'ItemStocks', 'item_stocks_for_repl_id'),
			'itemStocksReplaced' => array(self::BELONGS_TO, 'ItemStocks', 'item_stocks_replaced_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'replacement_id' => 'Replacement ID',
			'item_for_replacement_id' => 'Item For Replacement',
			'item_stocks_for_repl_id' => 'Item Serial No.',
			'item_replaced_id' => 'Item Replaced',
			'item_stocks_replaced_id' => 'Item Serial No',
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
		$criteria->compare('replacement_id',$this->replacement_id);
		$criteria->with=array('itemForReplacement', 'itemStocksForRepl', 'itemReplaced', 'itemStocksReplaced');
		
		//$criteria->compare('item_for_replacement_id',$this->item_for_replacement_id);
		$criteria->compare('t.id',$this->id,true);
		$criteria->compare('itemForReplacement.item_description',$this->item_for_replacement_id, true);
		
		//$criteria->compare('item_stocks_for_repl_id',$this->item_stocks_for_repl_id);
		$criteria->compare('t.id',$this->id,true);
		$criteria->compare('itemStocksForRepl.item_stocks_serial_no',$this->item_stocks_for_repl_id, true);
		
		//$criteria->compare('item_replaced_id',$this->item_replaced_id);
		$criteria->compare('t.id',$this->id,true);
		$criteria->compare('itemReplaced.item_description',$this->item_replaced_id, true);
		
		//$criteria->compare('item_stocks_replaced_id',$this->item_stocks_replaced_id);
		$criteria->compare('t.id',$this->id,true);
		$criteria->compare('itemStocksReplaced.item_stocks_serial_no',$this->item_stocks_replaced_id, true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ReplacementDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
