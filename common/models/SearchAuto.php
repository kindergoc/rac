<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Auto;

/**
 * SearchAuto represents the model behind the search form about `app\models\Auto`.
 */
class SearchAuto extends Auto
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tip', 'marka', 'mjenjac', 'gorivo', 'vrata', 'cijena', 'putnika', 'order', 'naslovna', 'firma', 'pogon'], 'integer'],
            [['naziv', 'oprema', 'dun', 'cijene', 'prtljaznik', 'link', 'opis'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Auto::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'tip' => $this->tip,
            'marka' => $this->marka,
            'mjenjac' => $this->mjenjac,
            'gorivo' => $this->gorivo,
            'vrata' => $this->vrata,
            'cijena' => $this->cijena,
            'putnika' => $this->putnika,
            'order' => $this->order,
            'naslovna' => $this->naslovna,
            'firma' => $this->firma,
            'pogon' => $this->pogon,
        ]);

        $query->andFilterWhere(['like', 'naziv', $this->naziv])
            ->andFilterWhere(['like', 'oprema', $this->oprema])
            ->andFilterWhere(['like', 'dun', $this->dun])
            ->andFilterWhere(['like', 'cijene', $this->cijene])
            ->andFilterWhere(['like', 'prtljaznik', $this->prtljaznik])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'opis', $this->opis]);

        return $dataProvider;
    }
}
