<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Gorivo;

/**
 * SearchGorivo represents the model behind the search form about `app\models\Gorivo`.
 */
class SearchGorivo extends Gorivo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'deleted'], 'integer'],
            [['naziv'], 'safe'],
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
        $query = Gorivo::find();

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
            'deleted' => $this->deleted,
        ]);

        $query->andFilterWhere(['like', 'naziv', $this->naziv]);

        return $dataProvider;
    }
}
