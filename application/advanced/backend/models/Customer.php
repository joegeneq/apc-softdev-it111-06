<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property string $name
 * @property string $contact_no
 * @property string $house_no
 * @property string $street
 * @property string $city
 * @property integer $zip_code
 * @property string $country
 * @property string $email
 * @property string $contact_person
 * @property string $create_date
 * @property string $type
 *
 * @property Order[] $orders
 */
class Customer extends \yii\db\ActiveRecord
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
            [['name', 'contact_no', 'house_no', 'street', 'city', 'country', 'email'], 'required'],
            [['zip_code'], 'integer'],
            [['create_date'], 'safe'],
            [['name', 'street', 'city', 'country', 'email', 'contact_person'], 'string', 'max' => 225],
            [['contact_no', 'house_no', 'type'], 'string', 'max' => 45]
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
            'house_no' => 'House No',
            'street' => 'Street',
            'city' => 'City',
            'zip_code' => 'Zip Code',
            'country' => 'Country',
            'email' => 'Email',
            'contact_person' => 'Contact Person',
            'create_date' => 'Create Date',
            'type' => 'Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['customer_id' => 'id']);
    }
}
