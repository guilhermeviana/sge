<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Parceiro;

/**
 * ParceiroSearch represents the model behind the search form of `app\models\Parceiro`.
 */
class ParceiroSearch extends Parceiro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['REGISTRO', 'EMPRESA', 'ALERTA_RECOMPRAS', 'PLANO_CONTAS', 'FORCA_DIG_NUM_CONTRATO', 'NUM_CARACTERES', 'CONTA_TRANSFERENCIA_COMISSAO', 'EXCLUIDO'], 'integer'],
            [['RAZAO_SOCIAL', 'ABREVIACAO', 'CPFCNPJ', 'IESTADUAL', 'TELEFONE_COM', 'TELEFONE_FAX', 'TELEFONE_CON', 'CONTATO', 'ENDERECO', 'BAIRRO', 'CIDADE', 'UF', 'CEP', 'OBSERVACAO', 'LOGOTIPO', 'EMAIL_COMERCIAL', 'EMAIL_FISCAL', 'EMAIL_COMISSIONAMENTO'], 'safe'],
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
        $query = Parceiro::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        $dataProvider->setSort([
            
            'defaultOrder' => [
            'RAZAO_SOCIAL' => SORT_ASC
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
            'EMPRESA' => $this->EMPRESA,
            'ALERTA_RECOMPRAS' => $this->ALERTA_RECOMPRAS,
            'PLANO_CONTAS' => $this->PLANO_CONTAS,
            'FORCA_DIG_NUM_CONTRATO' => $this->FORCA_DIG_NUM_CONTRATO,
            'NUM_CARACTERES' => $this->NUM_CARACTERES,
            'CONTA_TRANSFERENCIA_COMISSAO' => $this->CONTA_TRANSFERENCIA_COMISSAO,
            'EXCLUIDO' => $this->EXCLUIDO,
        ]);

        $query->andFilterWhere(['like', 'RAZAO_SOCIAL', $this->RAZAO_SOCIAL])
            ->andFilterWhere(['like', 'ABREVIACAO', $this->ABREVIACAO])
            ->andFilterWhere(['like', 'CPFCNPJ', $this->CPFCNPJ])
            ->andFilterWhere(['like', 'IESTADUAL', $this->IESTADUAL])
            ->andFilterWhere(['like', 'TELEFONE_COM', $this->TELEFONE_COM])
            ->andFilterWhere(['like', 'TELEFONE_FAX', $this->TELEFONE_FAX])
            ->andFilterWhere(['like', 'TELEFONE_CON', $this->TELEFONE_CON])
            ->andFilterWhere(['like', 'CONTATO', $this->CONTATO])
            ->andFilterWhere(['like', 'ENDERECO', $this->ENDERECO])
            ->andFilterWhere(['like', 'BAIRRO', $this->BAIRRO])
            ->andFilterWhere(['like', 'CIDADE', $this->CIDADE])
            ->andFilterWhere(['like', 'UF', $this->UF])
            ->andFilterWhere(['like', 'CEP', $this->CEP])
            ->andFilterWhere(['like', 'OBSERVACAO', $this->OBSERVACAO])
            ->andFilterWhere(['like', 'LOGOTIPO', $this->LOGOTIPO])
            ->andFilterWhere(['like', 'EMAIL_COMERCIAL', $this->EMAIL_COMERCIAL])
            ->andFilterWhere(['like', 'EMAIL_FISCAL', $this->EMAIL_FISCAL])
            ->andFilterWhere(['like', 'EMAIL_COMISSIONAMENTO', $this->EMAIL_COMISSIONAMENTO]);

        return $dataProvider;
    }
}
