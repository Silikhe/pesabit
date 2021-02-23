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
 *
 * @property User $user
 * @property Listing[] $listings
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
            [['userId', 'bidStart', 'bidEnd'], 'required'],
            [['userId'], 'integer'],
            [['bidStart', 'bidEnd'], 'safe'],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
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
     * Gets query for [[Listings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListings()
    {
        return $this->hasMany(Listing::className(), ['bidId' => 'bidId']);
    }
}
