<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customercontact".
 *
 * @property integer $id
 * @property string $name
 * @property string $contact_no
 * @property string $email
 * @property string $create_date
 * @property string $update_date
 * @property string $created_by
 * @property string $updated_by
 * @property integer $customer_id
 *
 * @property Customer $customer
 */
class manageCustomercontact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customercontact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'contact_no', 'email', 'create_date', 'created_by', 'customer_id'], 'required'],
            [['create_date', 'update_date'], 'safe'],
            [['customer_id'], 'integer'],
            [['name', 'email'], 'string', 'max' => 225],
            [['contact_no', 'created_by', 'updated_by'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'contact_no' => 'Contact No',
            'email' => 'Email',
            'create_date' => 'Created Date',
            'update_date' => 'Updated Date',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'customer_id' => 'Customer Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'customer_id']);
    }
}
