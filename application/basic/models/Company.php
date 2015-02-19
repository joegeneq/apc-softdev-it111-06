<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property integer $id_company
 * @property string $company_name
 * @property string $company_address
 * @property integer $company_contact
 *
 * @property Customer[] $customers
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_name', 'company_address', 'company_contact'], 'required'],
            [['company_contact'], 'integer'],
            [['company_name', 'company_address'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_company' => 'Id Company',
            'company_name' => 'Company Name',
            'company_address' => 'Company Address',
            'company_contact' => 'Company Contact',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasMany(Customer::className(), ['Company_id_company' => 'id_company']);
    }
}
