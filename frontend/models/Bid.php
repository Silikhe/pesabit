<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bid".
 *
 * @property int $bidId
 * @property int $userId
 * @property string $bidStart
 * @property string $bidEnd
 * @property int $listingId
 * @property int $Amount
 *
 * @property User $user
 * @property Listing $listing
 */
class Bid extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'bidStart', 'bidEnd', 'listingId', 'Amount'], 'required'],
            [['userId', 'listingId', 'Amount'], 'integer'],
            [['bidStart', 'bidEnd'], 'safe'],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
            [['listingId'], 'exist', 'skipOnError' => true, 'targetClass' => Listing::className(), 'targetAttribute' => ['listingId' => 'listingId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bidId' => 'Bid ID',
            'userId' => 'User ID',
            'bidStart' => 'Bid Start',
            'bidEnd' => 'Bid End',
            'listingId' => 'Listing ID',
            'Amount' => 'Amount',
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

    /**
     * Gets query for [[Listing]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListing()
    {
        return $this->hasOne(Listing::className(), ['listingId' => 'listingId']);
    }
}
