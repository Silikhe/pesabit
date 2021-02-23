<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userBid".
 *
 * @property int $userBidId
 * @property int $bidNo
 * @property int $myBidId
 */
class UserBid extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'userBid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bidNo', 'myBidId'], 'required'],
            [['bidNo', 'myBidId'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'userBidId' => 'User Bid ID',
            'bidNo' => 'Bid No',
            'myBidId' => 'My Bid ID',
        ];
    }
}
