<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Produtos;

/**
 * ProdutosSearch represents the model behind the search form of `app\models\Produtos`.
 */
class ProdutosSearch extends Produtos {

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['REGISTRO', 'PARCEIRO', 'TIPO_PRODUTO', 'FLEX', 'PRODUTO_SEGURO', 'TIPOPAGAMENTO', 'TIPOJUROS', 'UTILIZA_TAC_DEDUTIVA', 'INATIVO', 'IDADE_LIMITE_COMISSIONAMENTO', 'PRODUTO_CARTAO', 'CATEGORIA_CARTAO', 'EXCLUIDO', 'LIMITA_COMISSAO_PRODUTO_COMISSAO_MAXIMA', 'ATUALIZACAO', 'EMITE_BORDERO', 'STATUS_PADRAO', 'FILIAL_INTEG_FINANCEIRO', 'SCE_SYNC'], 'integer'],
            [['REFERENCIA', 'PRODUTO', 'OBS', 'VALIDADE'], 'safe'],
            [['VALOR_PREMIO', 'VALOR_PARCELA', 'VALORJUROS', 'TAC', 'LIMITETAC', 'TACFIXO', 'PERCENTUAL_REFIN', 'LIMITETACMENOR', 'TACFIXOMENOR', 'COMISSAO_REFIN_RECUPERA', 'BASE_COMISSAO_PRODUTO', 'VALOR_RANGE', 'PONDERACAO'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios() {
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
    public function search($params) {
        $query = Produtos::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->setSort([
            'defaultOrder' => [
                'PRODUTO' => SORT_ASC
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
            'PARCEIRO' => $this->PARCEIRO,
            'TIPO_PRODUTO' => $this->TIPO_PRODUTO,
            'FLEX' => $this->FLEX,
            'PRODUTO_SEGURO' => $this->PRODUTO_SEGURO,
            'VALOR_PREMIO' => $this->VALOR_PREMIO,
            'VALOR_PARCELA' => $this->VALOR_PARCELA,
            'TIPOPAGAMENTO' => $this->TIPOPAGAMENTO,
            'TIPOJUROS' => $this->TIPOJUROS,
            'VALORJUROS' => $this->VALORJUROS,
            'UTILIZA_TAC_DEDUTIVA' => $this->UTILIZA_TAC_DEDUTIVA,
            'TAC' => $this->TAC,
            'LIMITETAC' => $this->LIMITETAC,
            'TACFIXO' => $this->TACFIXO,
            'INATIVO' => $this->INATIVO,
            'VALIDADE' => $this->VALIDADE,
            'IDADE_LIMITE_COMISSIONAMENTO' => $this->IDADE_LIMITE_COMISSIONAMENTO,
            'PERCENTUAL_REFIN' => $this->PERCENTUAL_REFIN,
            'PRODUTO_CARTAO' => $this->PRODUTO_CARTAO,
            'CATEGORIA_CARTAO' => $this->CATEGORIA_CARTAO,
            'EXCLUIDO' => $this->EXCLUIDO,
            'LIMITETACMENOR' => $this->LIMITETACMENOR,
            'TACFIXOMENOR' => $this->TACFIXOMENOR,
            'COMISSAO_REFIN_RECUPERA' => $this->COMISSAO_REFIN_RECUPERA,
            'BASE_COMISSAO_PRODUTO' => $this->BASE_COMISSAO_PRODUTO,
            'VALOR_RANGE' => $this->VALOR_RANGE,
            'PONDERACAO' => $this->PONDERACAO,
            'LIMITA_COMISSAO_PRODUTO_COMISSAO_MAXIMA' => $this->LIMITA_COMISSAO_PRODUTO_COMISSAO_MAXIMA,
            'ATUALIZACAO' => $this->ATUALIZACAO,
            'EMITE_BORDERO' => $this->EMITE_BORDERO,
            'STATUS_PADRAO' => $this->STATUS_PADRAO,
            'FILIAL_INTEG_FINANCEIRO' => $this->FILIAL_INTEG_FINANCEIRO,
            'SCE_SYNC' => $this->SCE_SYNC,
        ]);

        $query->andFilterWhere(['like', 'REFERENCIA', $this->REFERENCIA])
                ->andFilterWhere(['like', 'PRODUTO', $this->PRODUTO])
                ->andFilterWhere(['like', 'OBS', $this->OBS]);

        return $dataProvider;
    }

}
