<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mycomment".
 *
 * @property integer $id
 * @property string $author
 * @property string $body
 * @property string $created_at
 * @property integer $myaddress_id
 *
 * @property Myaddress $myaddress
 */
class Mycomment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mycomment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author', 'body', 'created_at', 'myaddress_id'], 'required'],
            [['body'], 'string'],
            [['created_at'], 'safe'],
            [['myaddress_id'], 'integer'],
            [['author'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'body' => 'Body',
            'created_at' => 'Created At',
            'myaddress_id' => 'Last Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMyaddress()
    {
        return $this->hasOne(Myaddress::className(), ['id' => 'myaddress_id']);
    }
}
