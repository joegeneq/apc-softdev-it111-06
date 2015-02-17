<?php

/**
 * This is the model class for table "item_price".
 *
 * The followings are the available columns in table 'item_price':
 * @property integer $id
 * @property integer $item_id
 * @property string $item_price_date
 * @property string $item_price
 *
 * The followings are the available model relations:
 * @property Item $item
 */
class ItemPrice extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'item_price';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_id, item_price_date, item_price', 'required'),
			array('item_id', 'numerical', 'integerOnly'=>true),
			array('item_price', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, item_id, item_price_date, item_price', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'item_id' => 'Item Description',
			'item_price_date' => 'Entry Date',
			'item_price' => 'Updated Price',
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
		$criteria->with=array('item');
		$criteria->compare('t.id',$this->id,true);
		$criteria->compare('item.item_description',$this->item_id, true);
		$criteria->compare('item_price_date',$this->item_price_date,true);
		$criteria->compare('item_price',$this->item_price,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ItemPrice the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
