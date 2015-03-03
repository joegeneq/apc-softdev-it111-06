<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property integer $id
 * @property string $department_name
 * @property string $department_description
 * @property integer $Branch_id
 *
 * @property Branch $branch
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['department_name', 'department_description', 'Branch_id'], 'required'],
            [['Branch_id'], 'integer'],
            [['department_name', 'department_description'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'department_name' => 'Department Name',
            'department_description' => 'Department Description',
            'Branch_id' => 'Branch ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranch()
    {
        return $this->hasOne(Branch::className(), ['id' => 'Branch_id']);
    }
}
