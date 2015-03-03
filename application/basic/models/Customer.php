<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $ID
 * @property string $Name
 * @property string $ContactNo
 * @property string $HouseNo
 * @property string $Street
 * @property string $Area
 * @property string $City
 * @property integer $ZipCode
 * @property string $Country
 * @property string $Email
 * @property string $CreateDate
 * @property string $UpdateDate
 * @property string $CreatedBy
 * @property string $UpdatedBy
 *
 * @property CustomerContact[] $customerContacts
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
            [['Name', 'ContactNo', 'HouseNo', 'Street', 'Area', 'City', 'Country', 'Email', 'CreateDate', 'CreatedBy'], 'required'],
            [['ZipCode'], 'integer'],
            [['CreateDate', 'UpdateDate'], 'safe'],
            [['Name', 'Street', 'Area', 'City', 'Country', 'Email'], 'string', 'max' => 225],
            [['ContactNo', 'HouseNo', 'CreatedBy', 'UpdatedBy'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Name' => 'Name',
            'ContactNo' => 'Contact No',
            'HouseNo' => 'House No',
            'Street' => 'Street',
            'Area' => 'Area',
            'City' => 'City',
            'ZipCode' => 'Zip Code',
            'Country' => 'Country',
            'Email' => 'Email',
            'CreateDate' => 'Create Date',
            'UpdateDate' => 'Update Date',
            'CreatedBy' => 'Created By',
            'UpdatedBy' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerContacts()
    {
        return $this->hasMany(CustomerContact::className(), ['Customer_ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['Customer_ID' => 'ID']);
    }
}
