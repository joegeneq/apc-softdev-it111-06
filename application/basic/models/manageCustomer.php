<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $ID
 * @property string $Name
 * @property string $Address
 * @property string $ContactNo
 * @property string $Country
 * @property integer $ZipCode
 * @property string $CreateDate
 * @property string $UpdateDate
 * @property integer $Company_ID
 *
 * @property Company $company
 * @property Order[] $orders
 * @property Sale[] $sales
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
            [['Name', 'Address', 'ContactNo', 'Country'], 'required'],
            [['ZipCode', 'Company_ID'], 'integer'],
            [['CreateDate', 'UpdateDate'], 'safe'],
            [['Name', 'Address'], 'string', 'max' => 225],
            [['ContactNo', 'Country'], 'string', 'max' => 45]
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
            'Address' => 'Address',
            'ContactNo' => 'Contact No',
            'Country' => 'Country',
            'ZipCode' => 'Zip Code',
            'CreateDate' => 'Create Date',
            'UpdateDate' => 'Update Date',
            'Company_ID' => 'Company  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['ID' => 'Company_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['Customer_ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSales()
    {
        return $this->hasMany(Sale::className(), ['Customer_ID' => 'ID']);
    }
}
