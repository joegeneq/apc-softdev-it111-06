<?php

/**
 * This is the model class for table "supplier".
 *
 * The followings are the available columns in table 'supplier':
 * @property integer $id
 * @property string $supplier_name
 * @property string $supplier_address
 * @property string $supplier_contact_person
 * @property string $supplier_contact_no
 * @property string $supplier_email
 *
 * The followings are the available model relations:
 * @property Item[] $items
 */
class Supplier extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'supplier';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('supplier_name, supplier_address, supplier_contact_person, supplier_contact_no, supplier_email', 'required'),
			array('supplier_name, supplier_address, supplier_contact_person, supplier_email', 'length', 'max'=>255),
			array('supplier_contact_no', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, supplier_name, supplier_address, supplier_contact_person, supplier_contact_no, supplier_email', 'safe', 'on'=>'search'),
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
			'items' => array(self::HAS_MANY, 'Item', 'supplier_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'supplier_name' => 'Supplier Name',
			'supplier_address' => 'Address',
			'supplier_contact_person' => 'Contact Person',
			'supplier_contact_no' => 'Contact No.',
			'supplier_email' => 'E-mail',
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
		$criteria->compare('supplier_name',$this->supplier_name,true);
		$criteria->compare('supplier_address',$this->supplier_address,true);
		$criteria->compare('supplier_contact_person',$this->supplier_contact_person,true);
		$criteria->compare('supplier_contact_no',$this->supplier_contact_no,true);
		$criteria->compare('supplier_email',$this->supplier_email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Supplier the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
