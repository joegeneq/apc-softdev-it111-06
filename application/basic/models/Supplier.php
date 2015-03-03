<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property integer $ID
 * @property string $Name
 * @property string $ContactNo
 * @property string $ContactPerson
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
            [['Name', 'ContactNo', 'ContactPerson', 'HouseNo', 'Street', 'Area', 'City', 'Country', 'Email', 'CreateDate', 'CreatedBy'], 'required'],
            [['ZipCode'], 'integer'],
            [['CreateDate', 'UpdateDate'], 'safe'],
            [['Name', 'ContactPerson', 'Street', 'Area', 'City', 'Country'], 'string', 'max' => 225],
            [['ContactNo', 'HouseNo', 'Email', 'CreatedBy', 'UpdatedBy'], 'string', 'max' => 45]
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
            'ContactNo' => 'Contact Number',
            'ContactPerson' => 'Contact Person',
            'HouseNo' => 'House No',
            'Street' => 'Street',
            'Area' => 'Area/Barangay/Subdivision/District',
            'City' => 'City/Province',
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
    public function getProductinventories()
    {
        return $this->hasMany(Productinventory::className(), ['Supplier_ID' => 'ID']);
    }
}
