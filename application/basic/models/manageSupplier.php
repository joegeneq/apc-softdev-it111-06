<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property integer $ID
 * @property string $Name
 * @property string $Address
 * @property string $ContactNo
 * @property string $ContactPerson
 * @property string $Email
 * @property string $CreateDate
 * @property string $UpdateDate
 *
 * @property Item[] $items
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
            [['Name', 'Address', 'ContactNo', 'ContactPerson', 'Email', 'CreateDate'], 'required'],
            [['CreateDate', 'UpdateDate'], 'safe'],
            [['Name', 'ContactNo', 'ContactPerson', 'Email'], 'string', 'max' => 45],
            [['Address'], 'string', 'max' => 225]
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
            'ContactPerson' => 'Contact Person',
            'Email' => 'Email',
            'CreateDate' => 'Create Date',
            'UpdateDate' => 'Update Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['Supplier_ID' => 'ID']);
    }
}
