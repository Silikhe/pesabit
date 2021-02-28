<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "listing".
 *
 * @property int $listingId
 * @property string $worth
 * @property string $winner
 * @property int $userId
 * @property string $title
 * @property int $paybill
 * @property string $accountNo
 *
 * @property Images $images
 * @property User $user
 */
class Listing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'listing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['worth', 'winner', 'userId', 'title', 'paybill', 'accountNo'], 'required'],
            [['userId', 'paybill'], 'integer'],
            [['worth', 'winner'], 'string', 'max' => 255],
            [['title', 'accountNo'], 'string', 'max' => 225],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'listingId' => 'Listing ID',
            'worth' => 'Worth',
            'winner' => 'Winner',
            'userId' => 'User ID',
            'title' => 'Title',
            'paybill' => 'Paybill',
            'accountNo' => 'Account No',
        ];
    }

    /**
     * Gets query for [[Images]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasOne(Images::className(), ['imageId' => 'listingId']);
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
