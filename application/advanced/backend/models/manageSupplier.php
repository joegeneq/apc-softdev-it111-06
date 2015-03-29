<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property integer $id
 * @property string $name
 * @property string $contact_no
 * @property string $contact_person
 * @property string $house_no
 * @property string $street
 * @property string $city
 * @property integer $zip_code
 * @property string $country
 * @property string $email
 * @property string $create_date
 *
 * @property Productinventory[] $productinventories
 */
class manageSupplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'contact_no', 'contact_person', 'house_no', 'street', 'city', 'country', 'email'], 'required'],
            [['zip_code'], 'integer'],
            [['create_date'], 'safe'],
            [['name', 'contact_person', 'street', 'city', 'country'], 'string', 'max' => 225],
            [['contact_no', 'house_no', 'email'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Supplier Name',
            'contact_no' => 'Contact Number',
            'contact_person' => 'Contact Person',
            'house_no' => 'House Number',
            'street' => 'Street',
            'city' => 'City',
            'zip_code' => 'Zip Code',
            'country' => 'Country',
            'email' => 'Email',
            'create_date' => 'Create Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductinventories()
    {
        return $this->hasMany(Productinventory::className(), ['supplier_id' => 'id']);
    }
}
