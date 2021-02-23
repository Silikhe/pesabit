<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mybid".
 *
 * @property int $mybidId
 * @property int $userId
 * @property int $bidNo
 *
 * @property User $user
 */
class Mybid extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mybid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'bidNo'], 'required'],
            [['userId', 'bidNo'], 'integer'],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mybidId' => 'Mybid ID',
            'userId' => 'User ID',
            'bidNo' => 'Bid No',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }
}
