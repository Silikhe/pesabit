<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "listing".
 *
 * @property int $listingId
 * @property string $worth
 * @property string $winner
 * @property int $bidId
 * @property int $imageId
 * @property int $userId
 * @property string $title
 * @property int $paybill
 * @property string $accountNo
 *
 * @property Bid $bid
 * @property Images $image
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
            [['worth', 'winner', 'bidId', 'imageId', 'userId', 'title', 'paybill', 'accountNo'], 'required'],
            [['bidId', 'imageId', 'userId', 'paybill'], 'integer'],
            [['worth', 'winner'], 'string', 'max' => 255],
            [['title', 'accountNo'], 'string', 'max' => 225],
            [['bidId'], 'exist', 'skipOnError' => true, 'targetClass' => Bid::className(), 'targetAttribute' => ['bidId' => 'bidId']],
            [['imageId'], 'exist', 'skipOnError' => true, 'targetClass' => Images::className(), 'targetAttribute' => ['imageId' => 'imageId']],
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
            'bidId' => 'Bid ID',
            'imageId' => 'Image ID',
            'userId' => 'User ID',
            'title' => 'Title',
            'paybill' => 'Paybill',
            'accountNo' => 'Account No',
        ];
    }

    /**
     * Gets query for [[Bid]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBid()
    {
        return $this->hasOne(Bid::className(), ['bidId' => 'bidId']);
    }

    /**
     * Gets query for [[Image]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImage()
    {
        return $this->hasOne(Images::className(), ['imageId' => 'imageId']);
    }
}
