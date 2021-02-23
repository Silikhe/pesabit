<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Listing;

/**
 * ListingSearch represents the model behind the search form of `frontend\models\Listing`.
 */
class ListingSearch extends Listing
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['listingId', 'bidId', 'imageId', 'userId', 'paybill'], 'integer'],
            [['worth', 'winner', 'title', 'accountNo'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Listing::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'listingId' => $this->listingId,
            'bidId' => $this->bidId,
            'imageId' => $this->imageId,
            'userId' => $this->userId,
            'paybill' => $this->paybill,
        ]);

        $query->andFilterWhere(['like', 'worth', $this->worth])
            ->andFilterWhere(['like', 'winner', $this->winner])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'accountNo', $this->accountNo]);

        return $dataProvider;
    }
}
