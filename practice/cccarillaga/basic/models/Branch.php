<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "branch".
 *
 * @property integer $id
 * @property string $branch_name
 * @property string $branch_description
 * @property integer $Company_id
 *
 * @property Company $company
 * @property Department[] $departments
 */
class Branch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'branch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['branch_name', 'branch_description', 'Company_id'], 'required'],
            [['Company_id'], 'integer'],
            [['branch_name', 'branch_description'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'branch_name' => 'Branch Name',
            'branch_description' => 'Branch Description',
            'Company_id' => 'Company Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['id' => 'Company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(Department::className(), ['Branch_id' => 'id']);
    }
}
