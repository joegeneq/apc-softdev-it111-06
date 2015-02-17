<?php

/**
 * This is the model class for table "sale".
 *
 * The followings are the available columns in table 'sale':
 * @property integer $id
 * @property string $sale_date
 * @property string $sale_officialreceipt_no
 * @property integer $customer_id
 *
 * The followings are the available model relations:
 * @property Replacement[] $replacements
 * @property Customer $customer
 * @property SaleDetail[] $saleDetails
 */
class Sale extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sale';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sale_date, customer_id', 'required'),
			array('customer_id', 'numerical', 'integerOnly'=>true),
			array('sale_officialreceipt_no', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, sale_date, sale_officialreceipt_no, customer_id', 'safe', 'on'=>'search'),
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
			'replacements' => array(self::HAS_MANY, 'Replacement', 'sale_id'),
			'customer' => array(self::BELONGS_TO, 'Customer', 'customer_id'),
			'saleDetails' => array(self::HAS_MANY, 'SaleDetail', 'sale_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sale_date' => 'Sale Date',
			'sale_officialreceipt_no' => 'Official Receipt No.',
			'customer_id' => 'Customer',
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
		$criteria->compare('sale_date',$this->sale_date,true);
		$criteria->compare('sale_officialreceipt_no',$this->sale_officialreceipt_no,true);
		//$criteria->compare('customer_id',$this->customer_id);
        $criteria->compare('t.id',$this->id);
		$criteria->compare('CONCAT(cus_firstname, " ", cus_lastname)',$this->customer_id,true);
		$criteria->with=array('customer');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sale the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
