<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "images".
 *
 * @property int $imageId
 * @property string $path
 * @property int $listingId
 *
 * @property Listing $listing
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['path', 'listingId'], 'required'],
            [['listingId'], 'integer'],
            [['path'], 'string', 'max' => 255],
            [['listingId'], 'exist', 'skipOnError' => true, 'targetClass' => Listing::className(), 'targetAttribute' => ['listingId' => 'listingId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'imageId' => 'Image ID',
            'path' => 'Path',
            'listingId' => 'Listing ID',
        ];
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
