<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TipoProduto;

/**
 * TipoProdutoSearch represents the model behind the search form of `app\models\TipoProduto`.
 */
class TipoProdutoSearch extends TipoProduto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['REGISTRO', 'EXCLUIDO'], 'integer'],
            [['DESCRICAO', 'REFERENCIA', 'OBSERVACAO'], 'safe'],
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
        $query = TipoProduto::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
         $dataProvider->setSort([
            'defaultOrder' => [
                'DESCRICAO' => SORT_ASC
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'REGISTRO' => $this->REGISTRO,
            'EXCLUIDO' => $this->EXCLUIDO,
        ]);

        $query->andFilterWhere(['like', 'DESCRICAO', $this->DESCRICAO])
            ->andFilterWhere(['like', 'REFERENCIA', $this->REFERENCIA])
            ->andFilterWhere(['like', 'OBSERVACAO', $this->OBSERVACAO]);

        return $dataProvider;
    }
}
