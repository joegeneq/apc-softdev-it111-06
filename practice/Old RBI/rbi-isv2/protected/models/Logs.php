<?php

/**
 * This is the model class for table "logs".
 *
 * The followings are the available columns in table 'logs':
 * @property integer $id
 * @property string $log_date_time
 * @property string $log_action
 * @property string $log_module
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property User $user
 */
class Logs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'logs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('log_date_time, log_action, log_module, user_id', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('log_action, log_module', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, log_date_time, log_action, log_module, user_id', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'log_date_time' => 'Log Date & Time',
			'log_action' => 'Action',
			'log_module' => 'Module',
			'user_id' => 'User',
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
		$criteria->compare('log_date_time',$this->log_date_time,true);
		$criteria->compare('log_action',$this->log_action,true);
		$criteria->compare('log_module',$this->log_module,true);
		//$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user.fullname',$this->user_id, true);
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Logs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
