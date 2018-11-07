<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cliente;

/**
 * ClienteSearch represents the model behind the search form of `app\models\Cliente`.
 */
class ClienteSearch extends Cliente {

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['REGISTRO', 'ENVIA_CORRESPONDENCIA', 'TOMADOR_EMPRESTIMO', 'ENVIA_ENDERECAMENTO', 'ENVIA_TELEMARKETING', 'TIPO_IDENTIDADE', 'SEXO', 'ESTADO_CIVIL', 'TIPO_RESIDENCIA', 'CORRETOR', 'ATENDENTE', 'OPERADORA_CEL', 'COD_ORGAO', 'DATA_ADIANTAMENTO', 'SPC', 'SERASA', 'TIPOVENC', 'FORMAPAG', 'EXCLUIDO', 'ESCOLARIDADE', 'TIPO_CONTA', 'ROTA_ATENDIMENTO'], 'integer'],
            [['NOME', 'NASCIMENTO', 'CPFCNPJ', 'IDENTIDADE', 'CONJUGE', 'NASCIMENTO_CONJUGE', 'ENDERECO', 'BAIRRO', 'CIDADE', 'CEP', 'UF', 'TEMPO_MORADIA', 'OBSERVACAO', 'TELEFONE_RES', 'TELEFONE_PREFERENCIAL', 'TELEFONE_CEL', 'EMPRESA', 'ORGAO', 'ENDERECO_COM', 'NUMERO_COM', 'COMPLEMENTO_COM', 'BAIRRO_COM', 'CIDADE_COM', 'CEP_COM', 'UF_COM', 'TELEFONE_COM', 'TELEFONE_COM_2', 'RAMAL', 'DATA_PAGAMENTO', 'MASP', 'CARGO', 'NATUREZA_OCUPACAO', 'DATA_ADMISSAO', 'BANCO', 'AGENCIA', 'CONTA', 'DATA_ABERTURA_CONTA', 'INICIO_TAXA', 'USUARIO', 'DATAREGISTRO', 'USUARIOAT', 'DATAAT', 'ORGAO_EXP', 'DATA_EXPEDICAO', 'NUMERO', 'COMPLEMENTO', 'BENEFICIO', 'BENEFICIO2', 'SIAPE', 'PAI', 'MAE', 'NACIONALIDADE', 'NATURALIDADE', 'EMAIL', 'CARTORIO', 'IDENTIFICADOR_DEBITO', 'IDENTIFICADOR_CLIENTE_BANCO', 'IDENTIFICADOR_MAILING', 'DATA_CONSULTA_MARGEM', 'ULTIMO_CONTATO_CLIENTE'], 'safe'],
            [['VALOR_ALUGUEL', 'SALARIO', 'ADIANTAMENTO', 'TAXAADM', 'MARGEM_DISPONIVEL', 'LIMITE_DISPONIVEL_SAQUE', 'LIMITE_COMPRA_DISPONIVEL'], 'number'],
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
        $query = Cliente::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->setSort([
            'defaultOrder' => [
                'NOME' => SORT_ASC
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
            'ENVIA_CORRESPONDENCIA' => $this->ENVIA_CORRESPONDENCIA,
            'TOMADOR_EMPRESTIMO' => $this->TOMADOR_EMPRESTIMO,
            'ENVIA_ENDERECAMENTO' => $this->ENVIA_ENDERECAMENTO,
            'ENVIA_TELEMARKETING' => $this->ENVIA_TELEMARKETING,
            'NASCIMENTO' => $this->NASCIMENTO,
            'TIPO_IDENTIDADE' => $this->TIPO_IDENTIDADE,
            'SEXO' => $this->SEXO,
            'ESTADO_CIVIL' => $this->ESTADO_CIVIL,
            'NASCIMENTO_CONJUGE' => $this->NASCIMENTO_CONJUGE,
            'TIPO_RESIDENCIA' => $this->TIPO_RESIDENCIA,
            'TEMPO_MORADIA' => $this->TEMPO_MORADIA,
            'VALOR_ALUGUEL' => $this->VALOR_ALUGUEL,
            'CORRETOR' => $this->CORRETOR,
            'ATENDENTE' => $this->ATENDENTE,
            'OPERADORA_CEL' => $this->OPERADORA_CEL,
            'COD_ORGAO' => $this->COD_ORGAO,
            'SALARIO' => $this->SALARIO,
            'DATA_ADIANTAMENTO' => $this->DATA_ADIANTAMENTO,
            'ADIANTAMENTO' => $this->ADIANTAMENTO,
            'DATA_ADMISSAO' => $this->DATA_ADMISSAO,
            'DATA_ABERTURA_CONTA' => $this->DATA_ABERTURA_CONTA,
            'SPC' => $this->SPC,
            'SERASA' => $this->SERASA,
            'TIPOVENC' => $this->TIPOVENC,
            'TAXAADM' => $this->TAXAADM,
            'INICIO_TAXA' => $this->INICIO_TAXA,
            'FORMAPAG' => $this->FORMAPAG,
            'DATAREGISTRO' => $this->DATAREGISTRO,
            'DATAAT' => $this->DATAAT,
            'EXCLUIDO' => $this->EXCLUIDO,
            'DATA_EXPEDICAO' => $this->DATA_EXPEDICAO,
            'ESCOLARIDADE' => $this->ESCOLARIDADE,
            'TIPO_CONTA' => $this->TIPO_CONTA,
            'MARGEM_DISPONIVEL' => $this->MARGEM_DISPONIVEL,
            'DATA_CONSULTA_MARGEM' => $this->DATA_CONSULTA_MARGEM,
            'LIMITE_DISPONIVEL_SAQUE' => $this->LIMITE_DISPONIVEL_SAQUE,
            'LIMITE_COMPRA_DISPONIVEL' => $this->LIMITE_COMPRA_DISPONIVEL,
            'ULTIMO_CONTATO_CLIENTE' => $this->ULTIMO_CONTATO_CLIENTE,
            'ROTA_ATENDIMENTO' => $this->ROTA_ATENDIMENTO,
        ]);

        $query->andFilterWhere(['like', 'NOME', $this->NOME])
                ->andFilterWhere(['like', 'CPFCNPJ', $this->CPFCNPJ])
                ->andFilterWhere(['like', 'IDENTIDADE', $this->IDENTIDADE])
                ->andFilterWhere(['like', 'CONJUGE', $this->CONJUGE])
                ->andFilterWhere(['like', 'ENDERECO', $this->ENDERECO])
                ->andFilterWhere(['like', 'BAIRRO', $this->BAIRRO])
                ->andFilterWhere(['like', 'CIDADE', $this->CIDADE])
                ->andFilterWhere(['like', 'CEP', $this->CEP])
                ->andFilterWhere(['like', 'UF', $this->UF])
                ->andFilterWhere(['like', 'OBSERVACAO', $this->OBSERVACAO])
                ->andFilterWhere(['like', 'TELEFONE_RES', $this->TELEFONE_RES])
                ->andFilterWhere(['like', 'TELEFONE_PREFERENCIAL', $this->TELEFONE_PREFERENCIAL])
                ->andFilterWhere(['like', 'TELEFONE_CEL', $this->TELEFONE_CEL])
                ->andFilterWhere(['like', 'EMPRESA', $this->EMPRESA])
                ->andFilterWhere(['like', 'ORGAO', $this->ORGAO])
                ->andFilterWhere(['like', 'ENDERECO_COM', $this->ENDERECO_COM])
                ->andFilterWhere(['like', 'NUMERO_COM', $this->NUMERO_COM])
                ->andFilterWhere(['like', 'COMPLEMENTO_COM', $this->COMPLEMENTO_COM])
                ->andFilterWhere(['like', 'BAIRRO_COM', $this->BAIRRO_COM])
                ->andFilterWhere(['like', 'CIDADE_COM', $this->CIDADE_COM])
                ->andFilterWhere(['like', 'CEP_COM', $this->CEP_COM])
                ->andFilterWhere(['like', 'UF_COM', $this->UF_COM])
                ->andFilterWhere(['like', 'TELEFONE_COM', $this->TELEFONE_COM])
                ->andFilterWhere(['like', 'TELEFONE_COM_2', $this->TELEFONE_COM_2])
                ->andFilterWhere(['like', 'RAMAL', $this->RAMAL])
                ->andFilterWhere(['like', 'DATA_PAGAMENTO', $this->DATA_PAGAMENTO])
                ->andFilterWhere(['like', 'MASP', $this->MASP])
                ->andFilterWhere(['like', 'CARGO', $this->CARGO])
                ->andFilterWhere(['like', 'NATUREZA_OCUPACAO', $this->NATUREZA_OCUPACAO])
                ->andFilterWhere(['like', 'BANCO', $this->BANCO])
                ->andFilterWhere(['like', 'AGENCIA', $this->AGENCIA])
                ->andFilterWhere(['like', 'CONTA', $this->CONTA])
                ->andFilterWhere(['like', 'USUARIO', $this->USUARIO])
                ->andFilterWhere(['like', 'USUARIOAT', $this->USUARIOAT])
                ->andFilterWhere(['like', 'ORGAO_EXP', $this->ORGAO_EXP])
                ->andFilterWhere(['like', 'NUMERO', $this->NUMERO])
                ->andFilterWhere(['like', 'COMPLEMENTO', $this->COMPLEMENTO])
                ->andFilterWhere(['like', 'BENEFICIO', $this->BENEFICIO])
                                ->andFilterWhere(['like', 'BENEFICIO2', $this->BENEFICIO2])
                ->andFilterWhere(['like', 'SIAPE', $this->SIAPE])
                ->andFilterWhere(['like', 'PAI', $this->PAI])
                ->andFilterWhere(['like', 'MAE', $this->MAE])
                ->andFilterWhere(['like', 'NACIONALIDADE', $this->NACIONALIDADE])
                ->andFilterWhere(['like', 'NATURALIDADE', $this->NATURALIDADE])
                ->andFilterWhere(['like', 'EMAIL', $this->EMAIL])
                ->andFilterWhere(['like', 'CARTORIO', $this->CARTORIO])
                ->andFilterWhere(['like', 'IDENTIFICADOR_DEBITO', $this->IDENTIFICADOR_DEBITO])
                ->andFilterWhere(['like', 'IDENTIFICADOR_CLIENTE_BANCO', $this->IDENTIFICADOR_CLIENTE_BANCO])
                ->andFilterWhere(['like', 'IDENTIFICADOR_MAILING', $this->IDENTIFICADOR_MAILING]);

        return $dataProvider;
    }

}
