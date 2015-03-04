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
 * @property Productinventory[] $productinventories
 */
class Supplier extends \yii\db\ActiveRecord
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
            [['name', 'contact_no', 'contact_person', 'house_no', 'street', 'area', 'city', 'country', 'email', 'create_date', 'created_by'], 'required'],
            [['zip_code'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
            [['name', 'contact_person', 'street', 'area', 'city', 'country'], 'string', 'max' => 225],
            [['contact_no', 'house_no', 'email', 'created_by', 'updated_by'], 'string', 'max' => 45]
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
            'contact_no' => 'Contact No',
            'contact_person' => 'Contact Person',
            'house_no' => 'House No',
            'street' => 'Street',
            'area' => 'Area',
            'city' => 'City',
            'zip_code' => 'Zip Code',
            'country' => 'Country',
            'email' => 'Email',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
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
