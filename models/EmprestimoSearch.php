<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Emprestimo;

/**
 * EmprestimoSearch represents the model behind the search form of `app\models\Emprestimo`.
 */
class EmprestimoSearch extends Emprestimo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['REGISTRO' ,'TIPO_EMPRESTIMO', 'PRODUTO', 'CAPTADOR', 'CORRETOR', 'CORRETOR_1', 'CORRETOR_2', 'CLIENTE', 'CATEGORIA', 'DIA', 'PARCELAS', 'FORMULA', 'ESTADO', 'ESTADO_ANTERIOR_PENDENCIA', 'UTIL', 'CHAMADA', 'SISDEB', 'SISDEB_ATIVO', 'SISDEB_CONTA_CLIENTE', 'SISDEB_CONTA_CREDITO', 'TIPOVENC', 'DIVULGACAO', 'FORMADIVULGACAO', 'VEZES_CONTRATO_DIGITADO', 'CARTAO_CREDITO', 'CARTAO_COM_SAQUE', 'DINHEIRO_RAPIDO', 'REFIN_RECOMPRA', 'BANCO_ORDEM_PAGAMENTO', 'CONTA_DEPOSITO', 'CONTRATO_ORIGINAL', 'TIPO_COMISSIONAMENTO', 'CONTRATO_VENDIDO', 'CONTRATO_RENOVADO', 'USUARIO_WEB', 'EXCLUIDO', 'BENS_DURAVEIS', 'ATENDENTE', 'ASSISTENTE', 'ANALISTA', 'TELEFONISTA', 'PROMOTOR', 'CONTA', 'REGRA', 'REGISTRO_TABELA_COMISSAO_TAC', 'SUBSTABELECIDO', 'COMISSAO_ALTERADA_MANUALMENTE', 'ENVIA_RELATORIO_REFIN', 'ENTRADA_ELETRONICA', 'ENVIADO_REPASSE_AGENTE', 'CAMPANHA', 'RECIBO_PAGAMENTO_CORRETOR', 'CONTRATO_RENEGOCIADO', 'ATRASO_PAGAMENTO_CONTRATO'], 'integer'],
            [['LOJA', 'DATA', 'DATAINICIO', 'DATA_FATOR', 'CONTRATO_DIGITADO', 'DATA_ULTIMA_DIGITACAO', 'CONTRATO_ENVIADO', 'CONTRATO_ENVIADO_MATRIZ', 'CONTRATO_RECEBIDO_MATRIZ', 'AGENCIA_ORDEM_PAGAMENTO', 'NUMERO_ORDEM_PAGAMENTO', 'LIMITE_SAQUE_ORDEM_PAGAMENTO', 'REPASSADOEMPRESA', 'REPASSADOCORRETOR', 'COMISSAO_ESTORNADA', 'COMISSAO_ADIANTADA', 'DATAREG', 'HORAREG', 'USUARIO', 'DATA_ATIVACAO', 'DATAAT', 'HORAAT', 'USUARIOAT', 'DATACANCEL', 'USUARIOCANCEL', 'OBS', 'CONTRATO', 'REFERENCIA_BENS_DURAVEIS', 'IDENTIFICAOCAO_CONTRATO', 'IDENTIFICACAO_CONTRATO_2', 'IDENTIFICADOR_CORREIO', 'COD_BARRAS_CONTRATO', 'IDENTIFICACAO_CLIENTE', 'REPASSADO_BONUS_FUNCIONARIO', 'REPASSADO_AGENCIADOR', 'REPASSADO_CAPTADOR', 'REPASSADO_ATENDENTE', 'REPASSADO_ANALISTA', 'DATA_CONFERENCIA', 'USUARIO_CONFERENCIA', 'NUMERO_BORDERO_BANCO', 'NUM_RASTREIO_OBJETO', 'STATUS'], 'safe'],
            [['VALOR_BRUTO', 'SALDOANTERIOR', 'SALDO_RECOMPRA', 'SALDO_RETIDO', 'VALOR', 'JUROS', 'TAXA', 'VALORPARCELA', 'COMISSAO_FLEXIVEL', 'TAC', 'LIMITE_CARTAO_CREDITO', 'PERCENT_REFIN_ORIGINAL', 'IOF', 'SEGURO', 'PORCENTAGEM_COMISSAO', 'PORCENTAGEM_COMISSAO_CORRETOR_1', 'PORCENTAGEM_COMISSAO_CORRETOR_2', 'PORCENTAGEM_COMISSAO_REC', 'PORCENTAGEM_REC_TAC', 'VALOR_REC_TAC', 'PORCENTAGEM_PAG_TAC', 'VALOR_PAG_TAC', 'VALOR_COMISSAO', 'VALOR_COMISSAO_CORRETOR_1', 'VALOR_COMISSAO_CORRETOR_2', 'VALOR_COMISSAO_REC', 'VALOR_PAGO_CONTRATO', 'VALOR_RECEB_CONTRATO', 'PORCENTAGEM_RECEB_BONUS', 'VALOR_RECEB_BONUS', 'PORCENTAGEM_PAGAR_BONUS', 'VALOR_PAGAR_BOMUS', 'VALOR_PAGAR_BONUS_CAPTADOR', 'VALOR_PAGAR_BONUS_ANALISTA', 'VALOR_PAGAR_BONUS_ATENDENTE', 'VALOR_PAGAR_BONUS_FUNCIONARIO', 'PERCENTUAL_SUBSTABELECIDO', 'DESC_CPMF', 'PORCENTAGEM_COMISSAO_AGENCIADOR', 'VALOR_COMISSAO_AGENCIADOR', 'PORCENTAGEM_COMISSAO_CAPTADOR', 'VALOR_COMISSAO_CAPTADOR', 'PORCENTAGEM_COMISSAO_ATENDENTE', 'VALOR_COMISSAO_ATENDENTE', 'PORCENTAGEM_COMISSAO_ANALISTA', 'VALOR_COMISSAO_ANALISTA', 'DESC_ISS', 'DESC_OUTROS', 'DESC_ADIANTAMENTO'], 'number'],
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
        $query = Emprestimo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
         $dataProvider->setSort([
            'defaultOrder' => [
                'DATA' => SORT_DESC
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
            'TIPO_EMPRESTIMO' => $this->TIPO_EMPRESTIMO,
            'PRODUTO' => $this->PRODUTO,
            'CAPTADOR' => $this->CAPTADOR,
            'CORRETOR' => $this->CORRETOR,
            'CORRETOR_1' => $this->CORRETOR_1,
            'CORRETOR_2' => $this->CORRETOR_2,
            'CLIENTE' => $this->CLIENTE,
            'DATA' => $this->DATA,
            'DATAINICIO' => $this->DATAINICIO,
            'VALOR_BRUTO' => $this->VALOR_BRUTO,
            'SALDOANTERIOR' => $this->SALDOANTERIOR,
            'SALDO_RECOMPRA' => $this->SALDO_RECOMPRA,
            'SALDO_RETIDO' => $this->SALDO_RETIDO,
            'VALOR' => $this->VALOR,
            'JUROS' => $this->JUROS,
            'DATA_FATOR' => $this->DATA_FATOR,
            'TAXA' => $this->TAXA,
            'CATEGORIA' => $this->CATEGORIA,
            'DIA' => $this->DIA,
            'PARCELAS' => $this->PARCELAS,
            'VALORPARCELA' => $this->VALORPARCELA,
            'FORMULA' => $this->FORMULA,
            'COMISSAO_FLEXIVEL' => $this->COMISSAO_FLEXIVEL,
            'TAC' => $this->TAC,
            'ESTADO' => $this->ESTADO,
            'ESTADO_ANTERIOR_PENDENCIA' => $this->ESTADO_ANTERIOR_PENDENCIA,
            'UTIL' => $this->UTIL,
            'CHAMADA' => $this->CHAMADA,
            'SISDEB' => $this->SISDEB,
            'SISDEB_ATIVO' => $this->SISDEB_ATIVO,
            'SISDEB_CONTA_CLIENTE' => $this->SISDEB_CONTA_CLIENTE,
            'SISDEB_CONTA_CREDITO' => $this->SISDEB_CONTA_CREDITO,
            'TIPOVENC' => $this->TIPOVENC,
            'DIVULGACAO' => $this->DIVULGACAO,
            'FORMADIVULGACAO' => $this->FORMADIVULGACAO,
            'CONTRATO_DIGITADO' => $this->CONTRATO_DIGITADO,
            'VEZES_CONTRATO_DIGITADO' => $this->VEZES_CONTRATO_DIGITADO,
            'DATA_ULTIMA_DIGITACAO' => $this->DATA_ULTIMA_DIGITACAO,
            'CONTRATO_ENVIADO' => $this->CONTRATO_ENVIADO,
            'CONTRATO_ENVIADO_MATRIZ' => $this->CONTRATO_ENVIADO_MATRIZ,
            'CONTRATO_RECEBIDO_MATRIZ' => $this->CONTRATO_RECEBIDO_MATRIZ,
            'CARTAO_CREDITO' => $this->CARTAO_CREDITO,
            'CARTAO_COM_SAQUE' => $this->CARTAO_COM_SAQUE,
            'LIMITE_CARTAO_CREDITO' => $this->LIMITE_CARTAO_CREDITO,
            'DINHEIRO_RAPIDO' => $this->DINHEIRO_RAPIDO,
            'REFIN_RECOMPRA' => $this->REFIN_RECOMPRA,
            'PERCENT_REFIN_ORIGINAL' => $this->PERCENT_REFIN_ORIGINAL,
            'BANCO_ORDEM_PAGAMENTO' => $this->BANCO_ORDEM_PAGAMENTO,
            'LIMITE_SAQUE_ORDEM_PAGAMENTO' => $this->LIMITE_SAQUE_ORDEM_PAGAMENTO,
            'CONTA_DEPOSITO' => $this->CONTA_DEPOSITO,
            'CONTRATO_ORIGINAL' => $this->CONTRATO_ORIGINAL,
            'REPASSADOEMPRESA' => $this->REPASSADOEMPRESA,
            'REPASSADOCORRETOR' => $this->REPASSADOCORRETOR,
            'TIPO_COMISSIONAMENTO' => $this->TIPO_COMISSIONAMENTO,
            'COMISSAO_ESTORNADA' => $this->COMISSAO_ESTORNADA,
            'COMISSAO_ADIANTADA' => $this->COMISSAO_ADIANTADA,
            'CONTRATO_VENDIDO' => $this->CONTRATO_VENDIDO,
            'CONTRATO_RENOVADO' => $this->CONTRATO_RENOVADO,
            'DATAREG' => $this->DATAREG,
            'HORAREG' => $this->HORAREG,
            'USUARIO_WEB' => $this->USUARIO_WEB,
            'DATA_ATIVACAO' => $this->DATA_ATIVACAO,
            'DATAAT' => $this->DATAAT,
            'HORAAT' => $this->HORAAT,
            'DATACANCEL' => $this->DATACANCEL,
            'EXCLUIDO' => $this->EXCLUIDO,
            'BENS_DURAVEIS' => $this->BENS_DURAVEIS,
            'ATENDENTE' => $this->ATENDENTE,
            'ASSISTENTE' => $this->ASSISTENTE,
            'ANALISTA' => $this->ANALISTA,
            'TELEFONISTA' => $this->TELEFONISTA,
            'PROMOTOR' => $this->PROMOTOR,
            'CONTA' => $this->CONTA,
            'IOF' => $this->IOF,
            'SEGURO' => $this->SEGURO,
            'REGRA' => $this->REGRA,
            'PORCENTAGEM_COMISSAO' => $this->PORCENTAGEM_COMISSAO,
            'PORCENTAGEM_COMISSAO_CORRETOR_1' => $this->PORCENTAGEM_COMISSAO_CORRETOR_1,
            'PORCENTAGEM_COMISSAO_CORRETOR_2' => $this->PORCENTAGEM_COMISSAO_CORRETOR_2,
            'PORCENTAGEM_COMISSAO_REC' => $this->PORCENTAGEM_COMISSAO_REC,
            'REGISTRO_TABELA_COMISSAO_TAC' => $this->REGISTRO_TABELA_COMISSAO_TAC,
            'PORCENTAGEM_REC_TAC' => $this->PORCENTAGEM_REC_TAC,
            'VALOR_REC_TAC' => $this->VALOR_REC_TAC,
            'PORCENTAGEM_PAG_TAC' => $this->PORCENTAGEM_PAG_TAC,
            'VALOR_PAG_TAC' => $this->VALOR_PAG_TAC,
            'VALOR_COMISSAO' => $this->VALOR_COMISSAO,
            'VALOR_COMISSAO_CORRETOR_1' => $this->VALOR_COMISSAO_CORRETOR_1,
            'VALOR_COMISSAO_CORRETOR_2' => $this->VALOR_COMISSAO_CORRETOR_2,
            'VALOR_COMISSAO_REC' => $this->VALOR_COMISSAO_REC,
            'VALOR_PAGO_CONTRATO' => $this->VALOR_PAGO_CONTRATO,
            'VALOR_RECEB_CONTRATO' => $this->VALOR_RECEB_CONTRATO,
            'PORCENTAGEM_RECEB_BONUS' => $this->PORCENTAGEM_RECEB_BONUS,
            'VALOR_RECEB_BONUS' => $this->VALOR_RECEB_BONUS,
            'PORCENTAGEM_PAGAR_BONUS' => $this->PORCENTAGEM_PAGAR_BONUS,
            'VALOR_PAGAR_BOMUS' => $this->VALOR_PAGAR_BOMUS,
            'VALOR_PAGAR_BONUS_CAPTADOR' => $this->VALOR_PAGAR_BONUS_CAPTADOR,
            'VALOR_PAGAR_BONUS_ANALISTA' => $this->VALOR_PAGAR_BONUS_ANALISTA,
            'VALOR_PAGAR_BONUS_ATENDENTE' => $this->VALOR_PAGAR_BONUS_ATENDENTE,
            'REPASSADO_BONUS_FUNCIONARIO' => $this->REPASSADO_BONUS_FUNCIONARIO,
            'VALOR_PAGAR_BONUS_FUNCIONARIO' => $this->VALOR_PAGAR_BONUS_FUNCIONARIO,
            'SUBSTABELECIDO' => $this->SUBSTABELECIDO,
            'PERCENTUAL_SUBSTABELECIDO' => $this->PERCENTUAL_SUBSTABELECIDO,
            'COMISSAO_ALTERADA_MANUALMENTE' => $this->COMISSAO_ALTERADA_MANUALMENTE,
            'DESC_CPMF' => $this->DESC_CPMF,
            'PORCENTAGEM_COMISSAO_AGENCIADOR' => $this->PORCENTAGEM_COMISSAO_AGENCIADOR,
            'VALOR_COMISSAO_AGENCIADOR' => $this->VALOR_COMISSAO_AGENCIADOR,
            'REPASSADO_AGENCIADOR' => $this->REPASSADO_AGENCIADOR,
            'PORCENTAGEM_COMISSAO_CAPTADOR' => $this->PORCENTAGEM_COMISSAO_CAPTADOR,
            'VALOR_COMISSAO_CAPTADOR' => $this->VALOR_COMISSAO_CAPTADOR,
            'REPASSADO_CAPTADOR' => $this->REPASSADO_CAPTADOR,
            'PORCENTAGEM_COMISSAO_ATENDENTE' => $this->PORCENTAGEM_COMISSAO_ATENDENTE,
            'VALOR_COMISSAO_ATENDENTE' => $this->VALOR_COMISSAO_ATENDENTE,
            'REPASSADO_ATENDENTE' => $this->REPASSADO_ATENDENTE,
            'PORCENTAGEM_COMISSAO_ANALISTA' => $this->PORCENTAGEM_COMISSAO_ANALISTA,
            'VALOR_COMISSAO_ANALISTA' => $this->VALOR_COMISSAO_ANALISTA,
            'REPASSADO_ANALISTA' => $this->REPASSADO_ANALISTA,
            'DESC_ISS' => $this->DESC_ISS,
            'DESC_OUTROS' => $this->DESC_OUTROS,
            'DESC_ADIANTAMENTO' => $this->DESC_ADIANTAMENTO,
            'ENVIA_RELATORIO_REFIN' => $this->ENVIA_RELATORIO_REFIN,
            'ENTRADA_ELETRONICA' => $this->ENTRADA_ELETRONICA,
            'ENVIADO_REPASSE_AGENTE' => $this->ENVIADO_REPASSE_AGENTE,
            'CAMPANHA' => $this->CAMPANHA,
            'RECIBO_PAGAMENTO_CORRETOR' => $this->RECIBO_PAGAMENTO_CORRETOR,
            'CONTRATO_RENEGOCIADO' => $this->CONTRATO_RENEGOCIADO,
            'DATA_CONFERENCIA' => $this->DATA_CONFERENCIA,
            'ATRASO_PAGAMENTO_CONTRATO' => $this->ATRASO_PAGAMENTO_CONTRATO,
        ]);

        $query->andFilterWhere(['like', 'LOJA', $this->LOJA])
            ->andFilterWhere(['like', 'AGENCIA_ORDEM_PAGAMENTO', $this->AGENCIA_ORDEM_PAGAMENTO])
            ->andFilterWhere(['like', 'NUMERO_ORDEM_PAGAMENTO', $this->NUMERO_ORDEM_PAGAMENTO])
            ->andFilterWhere(['like', 'USUARIO', $this->USUARIO])
            ->andFilterWhere(['like', 'USUARIOAT', $this->USUARIOAT])
            ->andFilterWhere(['like', 'USUARIOCANCEL', $this->USUARIOCANCEL])
            ->andFilterWhere(['like', 'OBS', $this->OBS])
            ->andFilterWhere(['like', 'STATUS', $this->STATUS])
            ->andFilterWhere(['like', 'CONTRATO', $this->CONTRATO])
            ->andFilterWhere(['like', 'REFERENCIA_BENS_DURAVEIS', $this->REFERENCIA_BENS_DURAVEIS])
            ->andFilterWhere(['like', 'IDENTIFICAOCAO_CONTRATO', $this->IDENTIFICAOCAO_CONTRATO])
            ->andFilterWhere(['like', 'IDENTIFICACAO_CONTRATO_2', $this->IDENTIFICACAO_CONTRATO_2])
            ->andFilterWhere(['like', 'IDENTIFICADOR_CORREIO', $this->IDENTIFICADOR_CORREIO])
            ->andFilterWhere(['like', 'COD_BARRAS_CONTRATO', $this->COD_BARRAS_CONTRATO])
            ->andFilterWhere(['like', 'IDENTIFICACAO_CLIENTE', $this->IDENTIFICACAO_CLIENTE])
            ->andFilterWhere(['like', 'USUARIO_CONFERENCIA', $this->USUARIO_CONFERENCIA])
            ->andFilterWhere(['like', 'NUMERO_BORDERO_BANCO', $this->NUMERO_BORDERO_BANCO])
            ->andFilterWhere(['like', 'NUM_RASTREIO_OBJETO', $this->NUM_RASTREIO_OBJETO]);

        return $dataProvider;
    }
}
