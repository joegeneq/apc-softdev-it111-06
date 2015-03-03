<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customercontact".
 *
 * @property integer $ID
 * @property string $Name
 * @property string $ContactNo
 * @property string $Email
 * @property string $CreateDate
 * @property string $UpdateDate
 * @property string $CreatedBy
 * @property string $UpdatedBy
 * @property integer $Customer_ID
 *
 * @property Customer $customer
 */
class Customercontact extends \yii\db\ActiveRecord
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
            [['Name', 'ContactNo', 'Email', 'CreateDate', 'CreatedBy', 'Customer_ID'], 'required'],
            [['CreateDate', 'UpdateDate'], 'safe'],
            [['Customer_ID'], 'integer'],
            [['Name', 'Email'], 'string', 'max' => 225],
            [['ContactNo', 'CreatedBy', 'UpdatedBy'], 'string', 'max' => 45]
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
            'Email' => 'Email',
            'CreateDate' => 'Create Date',
            'UpdateDate' => 'Update Date',
            'CreatedBy' => 'Created By',
            'UpdatedBy' => 'Updated By',
            'Customer_ID' => 'Customer  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['ID' => 'Customer_ID']);
    }
}
