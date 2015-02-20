<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id_customer
 * @property string $customer_firstName
 * @property string $customer_lastName
 * @property string $customer_address
 * @property integer $customer_contact
 * @property string $customer_type
 * @property string $customer_country
 * @property integer $customer_zipCode
 * @property string $customer_createDate
 * @property string $customer_updateDate
 * @property integer $Company_id_company
 *
 * @property Company $companyIdCompany
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
            [['customer_firstName', 'customer_lastName', 'customer_address', 'customer_contact', 'customer_type', 'customer_country', 'Company_id_company'], 'required'],
            [['customer_contact', 'customer_zipCode', 'Company_id_company'], 'integer'],
            [['customer_createDate', 'customer_updateDate'], 'safe'],
            [['customer_firstName', 'customer_lastName', 'customer_country'], 'string', 'max' => 45],
            [['customer_address'], 'string', 'max' => 225],
            [['customer_type'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_customer' => 'Id Customer',
            'customer_firstName' => 'Customer First Name',
            'customer_lastName' => 'Customer Last Name',
            'customer_address' => 'Customer Address',
            'customer_contact' => 'Customer Contact',
            'customer_type' => 'Customer Type',
            'customer_country' => 'Customer Country',
            'customer_zipCode' => 'Customer Zip Code',
            'customer_createDate' => 'Customer Create Date',
            'customer_updateDate' => 'Customer Update Date',
            'Company_id_company' => 'Company Id Company',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyIdCompany()
    {
        return $this->hasOne(Company::className(), ['id_company' => 'Company_id_company']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['Customer_id_customer' => 'id_customer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSales()
    {
        return $this->hasMany(Sale::className(), ['Customer_id_customer' => 'id_customer']);
    }
}
