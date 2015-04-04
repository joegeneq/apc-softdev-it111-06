<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property string $name
 * @property string $type
 * @property string $contact_no
 * @property string $house_no
 * @property string $street
 * @property string $city
 * @property integer $zip_code
 * @property string $country
 * @property string $email
 * @property string $contact_person
 * @property string $create_date
 * @property string $update_date
 *
 * @property Purchase[] $purchases
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
            [['name', 'type', 'contact_no', 'house_no', 'street', 'city', 'country', 'email'], 'required'],
            [['zip_code'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
            [['name', 'street', 'city', 'country', 'email', 'contact_person'], 'string', 'max' => 225],
            [['type', 'contact_no', 'house_no'], 'string', 'max' => 45]
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
            'type' => 'Customer Type',
            'contact_no' => 'Contact Number',
            'house_no' => 'House Number',
            'street' => 'Street',
            'city' => 'City',
            'zip_code' => 'Zip Code',
            'country' => 'Country',
            'email' => 'Email',
            'contact_person' => 'Contact Person',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPurchases()
    {
        return $this->hasMany(Purchase::className(), ['customer_id' => 'id']);
    }
}
