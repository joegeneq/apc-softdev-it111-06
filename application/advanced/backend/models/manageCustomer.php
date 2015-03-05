<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property string $name
 * @property string $contact_no
 * @property string $house_no
 * @property string $street
 * @property string $area
 * @property string $city
 * @property integer $zip_code
 * @property string $country
 * @property string $email
 * @property string $create_date
 * @property string $update_date
 * @property string $created_by
 * @property string $updated_by
 *
 * @property Customercontact[] $customercontacts
 * @property Order[] $orders
 */
class manageCustomer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'contact_no', 'house_no', 'street', 'area', 'city', 'country', 'email', 'create_date', 'created_by'], 'required'],
            [['zip_code'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
            [['name', 'street', 'area', 'city', 'country', 'email'], 'string', 'max' => 225],
            [['contact_no', 'house_no', 'created_by', 'updated_by'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Customer Name',
            'contact_no' => 'Contact No',
            'house_no' => 'House No',
            'street' => 'Street',
            'area' => 'Area',
            'city' => 'City',
            'zip_code' => 'Zip Code',
            'country' => 'Country',
            'email' => 'Email',
            'create_date' => 'Created Date',
            'update_date' => 'Updated Date',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomercontacts()
    {
        return $this->hasMany(Customercontact::className(), ['customer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['customer_id' => 'id']);
    }
}
