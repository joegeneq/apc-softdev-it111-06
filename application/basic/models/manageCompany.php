<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property integer $ID
 * @property string $Name
 * @property string $Address
 * @property string $ContactNo
 *
 * @property Customer[] $customers
 */
class manageCompany extends \yii\db\ActiveRecord
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
            [['Name', 'Address', 'ContactNo'], 'required'],
            [['Name', 'Address'], 'string', 'max' => 225],
            [['ContactNo'], 'string', 'max' => 45]
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasMany(Customer::className(), ['Company_ID' => 'ID']);
    }
}
