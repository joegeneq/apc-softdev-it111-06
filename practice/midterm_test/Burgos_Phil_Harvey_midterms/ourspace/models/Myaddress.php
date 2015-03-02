<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "myaddress".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $gender
 * @property string $created_at
 *
 * @property Mycomment[] $mycomments
 */
class Myaddress extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'myaddress';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'gender', 'created_at'], 'required'],
            [['created_at'], 'safe'],
            [['firstname', 'lastname'], 'string', 'max' => 30],
            [['gender'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'First Name',
            'lastname' => 'Last Name',
            'gender' => 'Male/Female',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMycomments()
    {
        return $this->hasMany(Mycomment::className(), ['myaddress_id' => 'id']);
    }
}
