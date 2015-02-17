<?php

/**
 * This is the model class for table "customer".
 *
 * The followings are the available columns in table 'customer':
 * @property integer $id
 * @property string $cus_firstname
 * @property string $cus_lastname
 * @property string $cus_address
 * @property string $cus_contact_no
 * @property string $cus_email
 * @property string $cus_type
 * @property string $cus_country
 * @property string $cus_zip_code
 * @property integer $company_id
 *
 * The followings are the available model relations:
 * @property Company $company
 * @property Order[] $orders
 * @property Replacement[] $replacements
 * @property Sale[] $sales
 */
class Customer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cus_firstname, cus_lastname, cus_address, cus_type, cus_country', 'required'),
			array('company_id', 'numerical', 'integerOnly'=>true),
			array('cus_firstname, cus_lastname, cus_address, cus_country', 'length', 'max'=>255),
			array('cus_contact_no', 'length', 'max'=>11),
			array('cus_email, cus_type', 'length', 'max'=>45),
			array('cus_zip_code', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cus_firstname, cus_lastname, cus_address, cus_contact_no, cus_email, cus_type, cus_country, cus_zip_code, company_id', 'safe', 'on'=>'search'),
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
			'company' => array(self::BELONGS_TO, 'Company', 'company_id'),
			'orders' => array(self::HAS_MANY, 'Order', 'customer_id'),
			'replacements' => array(self::HAS_MANY, 'Replacement', 'customer_id'),
			'sales' => array(self::HAS_MANY, 'Sale', 'customer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cus_firstname' => 'First Name',
			'cus_lastname' => 'Last Name',
			'cus_address' => 'Address',
			'cus_contact_no' => 'Contact No.',
			'cus_email' => 'E-mail',
			'cus_type' => 'Customer Type',
			'cus_country' => 'Country',
			'cus_zip_code' => 'Zip Code',
			'company_id' => 'Company',
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
		$criteria->compare('cus_firstname',$this->cus_firstname,true);
		$criteria->compare('cus_lastname',$this->cus_lastname,true);
		$criteria->compare('cus_address',$this->cus_address,true);
		$criteria->compare('cus_contact_no',$this->cus_contact_no,true);
		$criteria->compare('cus_email',$this->cus_email,true);
		$criteria->compare('cus_type',$this->cus_type,true);
		$criteria->compare('cus_country',$this->cus_country,true);
		$criteria->compare('cus_zip_code',$this->cus_zip_code,true);
		$criteria->compare('t.id',$this->id);
		$criteria->compare('company.company_name',$this->company_id, true);
		$criteria->with=array('company');
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Customer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getFullName()
	{
	return $this->cus_firstname . " " . $this->cus_lastname;
	}
}
