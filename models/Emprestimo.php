<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emprestimo".
 *
 * @property int $REGISTRO
 * @property int $TIPO_EMPRESTIMO
 * @property int $PRODUTO
 * @property int $CAPTADOR
 * @property int $CORRETOR
 * @property string $LOJA
 * @property int $CORRETOR_1
 * @property int $CORRETOR_2
 * @property int $CLIENTE
 * @property string $DATA
 * @property string $DATAINICIO
 * @property double $VALOR_BRUTO
 * @property double $SALDOANTERIOR
 * @property double $SALDO_RECOMPRA
 * @property double $SALDO_RETIDO
 * @property double $VALOR
 * @property double $JUROS
 * @property string $DATA_FATOR
 * @property double $TAXA
 * @property int $CATEGORIA
 * @property int $DIA
 * @property int $PARCELAS
 * @property double $VALORPARCELA
 * @property int $FORMULA
 * @property double $COMISSAO_FLEXIVEL
 * @property double $TAC
 * @property int $ESTADO
 * @property int $ESTADO_ANTERIOR_PENDENCIA
 * @property int $UTIL
 * @property int $CHAMADA
 * @property int $SISDEB
 * @property int $SISDEB_ATIVO
 * @property int $SISDEB_CONTA_CLIENTE
 * @property int $SISDEB_CONTA_CREDITO
 * @property int $TIPOVENC
 * @property int $DIVULGACAO
 * @property int $FORMADIVULGACAO
 * @property string $CONTRATO_DIGITADO
 * @property int $VEZES_CONTRATO_DIGITADO
 * @property string $DATA_ULTIMA_DIGITACAO
 * @property string $CONTRATO_ENVIADO
 * @property string $CONTRATO_ENVIADO_MATRIZ
 * @property string $CONTRATO_RECEBIDO_MATRIZ
 * @property int $CARTAO_CREDITO
 * @property int $CARTAO_COM_SAQUE
 * @property double $LIMITE_CARTAO_CREDITO
 * @property int $DINHEIRO_RAPIDO
 * @property int $REFIN_RECOMPRA
 * @property double $PERCENT_REFIN_ORIGINAL
 * @property int $BANCO_ORDEM_PAGAMENTO
 * @property string $AGENCIA_ORDEM_PAGAMENTO
 * @property string $NUMERO_ORDEM_PAGAMENTO
 * @property string $LIMITE_SAQUE_ORDEM_PAGAMENTO
 * @property int $CONTA_DEPOSITO
 * @property int $CONTRATO_ORIGINAL
 * @property string $REPASSADOEMPRESA
 * @property string $REPASSADOCORRETOR
 * @property int $TIPO_COMISSIONAMENTO
 * @property string $COMISSAO_ESTORNADA
 * @property string $COMISSAO_ADIANTADA
 * @property int $CONTRATO_VENDIDO
 * @property int $CONTRATO_RENOVADO
 * @property string $DATAREG
 * @property string $HORAREG
 * @property string $USUARIO
 * @property int $USUARIO_WEB
 * @property string $DATA_ATIVACAO
 * @property string $DATAAT
 * @property string $HORAAT
 * @property string $USUARIOAT
 * @property string $DATACANCEL
 * @property string $USUARIOCANCEL
 * @property string $OBS
 * @property int $EXCLUIDO
 * @property string $CONTRATO
 * @property int $BENS_DURAVEIS
 * @property string $REFERENCIA_BENS_DURAVEIS
 * @property int $ATENDENTE
 * @property int $ASSISTENTE
 * @property int $ANALISTA
 * @property int $TELEFONISTA
 * @property int $PROMOTOR
 * @property string $IDENTIFICAOCAO_CONTRATO
 * @property string $IDENTIFICACAO_CONTRATO_2
 * @property string $IDENTIFICADOR_CORREIO
 * @property string $COD_BARRAS_CONTRATO
 * @property int $CONTA
 * @property string $IDENTIFICACAO_CLIENTE
 * @property double $IOF
 * @property double $SEGURO
 * @property int $REGRA
 * @property double $PORCENTAGEM_COMISSAO
 * @property double $PORCENTAGEM_COMISSAO_CORRETOR_1
 * @property double $PORCENTAGEM_COMISSAO_CORRETOR_2
 * @property double $PORCENTAGEM_COMISSAO_REC
 * @property int $REGISTRO_TABELA_COMISSAO_TAC
 * @property double $PORCENTAGEM_REC_TAC
 * @property double $VALOR_REC_TAC
 * @property double $PORCENTAGEM_PAG_TAC
 * @property double $VALOR_PAG_TAC
 * @property double $VALOR_COMISSAO
 * @property double $VALOR_COMISSAO_CORRETOR_1
 * @property double $VALOR_COMISSAO_CORRETOR_2
 * @property double $VALOR_COMISSAO_REC
 * @property double $VALOR_PAGO_CONTRATO
 * @property double $VALOR_RECEB_CONTRATO
 * @property double $PORCENTAGEM_RECEB_BONUS
 * @property double $VALOR_RECEB_BONUS
 * @property double $PORCENTAGEM_PAGAR_BONUS
 * @property double $VALOR_PAGAR_BOMUS
 * @property double $VALOR_PAGAR_BONUS_CAPTADOR
 * @property double $VALOR_PAGAR_BONUS_ANALISTA
 * @property double $VALOR_PAGAR_BONUS_ATENDENTE
 * @property string $REPASSADO_BONUS_FUNCIONARIO
 * @property double $VALOR_PAGAR_BONUS_FUNCIONARIO
 * @property int $SUBSTABELECIDO
 * @property double $PERCENTUAL_SUBSTABELECIDO
 * @property int $COMISSAO_ALTERADA_MANUALMENTE
 * @property double $DESC_CPMF
 * @property double $PORCENTAGEM_COMISSAO_AGENCIADOR
 * @property double $VALOR_COMISSAO_AGENCIADOR
 * @property string $REPASSADO_AGENCIADOR
 * @property double $PORCENTAGEM_COMISSAO_CAPTADOR
 * @property double $VALOR_COMISSAO_CAPTADOR
 * @property string $REPASSADO_CAPTADOR
 * @property double $PORCENTAGEM_COMISSAO_ATENDENTE
 * @property double $VALOR_COMISSAO_ATENDENTE
 * @property string $REPASSADO_ATENDENTE
 * @property double $PORCENTAGEM_COMISSAO_ANALISTA
 * @property double $VALOR_COMISSAO_ANALISTA
 * @property string $REPASSADO_ANALISTA
 * @property double $DESC_ISS
 * @property double $DESC_OUTROS
 * @property double $DESC_ADIANTAMENTO
 * @property int $ENVIA_RELATORIO_REFIN
 * @property int $ENTRADA_ELETRONICA
 * @property int $ENVIADO_REPASSE_AGENTE
 * @property int $CAMPANHA
 * @property int $RECIBO_PAGAMENTO_CORRETOR
 * @property int $CONTRATO_RENEGOCIADO
 * @property string $DATA_CONFERENCIA
 * @property string $USUARIO_CONFERENCIA
 * @property string $NUMERO_BORDERO_BANCO
 * @property string $NUM_RASTREIO_OBJETO
 * @property int $ATRASO_PAGAMENTO_CONTRATO
 *
 * @property Produtos $pRODUTO
 */
class Emprestimo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emprestimo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CLIENTE', 'PRODUTO', 'VALOR', 'VALOR_BRUTO', 'VALORPARCELA', 'PARCELAS'], 'required'],
            [['TIPO_EMPRESTIMO', 'PRODUTO', 'CAPTADOR', 'CORRETOR', 'CORRETOR_1', 'CORRETOR_2', 'CLIENTE', 'CATEGORIA', 'DIA', 'PARCELAS', 'FORMULA', 'ESTADO', 'ESTADO_ANTERIOR_PENDENCIA', 'UTIL', 'CHAMADA', 'SISDEB', 'SISDEB_ATIVO', 'SISDEB_CONTA_CLIENTE', 'SISDEB_CONTA_CREDITO', 'TIPOVENC', 'DIVULGACAO', 'FORMADIVULGACAO', 'VEZES_CONTRATO_DIGITADO', 'CARTAO_CREDITO', 'CARTAO_COM_SAQUE', 'DINHEIRO_RAPIDO', 'REFIN_RECOMPRA', 'BANCO_ORDEM_PAGAMENTO', 'CONTA_DEPOSITO', 'CONTRATO_ORIGINAL', 'TIPO_COMISSIONAMENTO', 'CONTRATO_VENDIDO', 'CONTRATO_RENOVADO', 'USUARIO_WEB', 'EXCLUIDO', 'BENS_DURAVEIS', 'ATENDENTE', 'ASSISTENTE', 'ANALISTA', 'TELEFONISTA', 'PROMOTOR', 'CONTA', 'REGRA', 'REGISTRO_TABELA_COMISSAO_TAC', 'SUBSTABELECIDO', 'COMISSAO_ALTERADA_MANUALMENTE', 'ENVIA_RELATORIO_REFIN', 'ENTRADA_ELETRONICA', 'ENVIADO_REPASSE_AGENTE', 'CAMPANHA', 'RECIBO_PAGAMENTO_CORRETOR', 'CONTRATO_RENEGOCIADO', 'ATRASO_PAGAMENTO_CONTRATO'], 'integer'],
            [['DATA', 'DATAINICIO', 'DATA_FATOR', 'CONTRATO_DIGITADO', 'DATA_ULTIMA_DIGITACAO', 'CONTRATO_ENVIADO', 'CONTRATO_ENVIADO_MATRIZ', 'CONTRATO_RECEBIDO_MATRIZ', 'LIMITE_SAQUE_ORDEM_PAGAMENTO', 'REPASSADOEMPRESA', 'REPASSADOCORRETOR', 'COMISSAO_ESTORNADA', 'COMISSAO_ADIANTADA', 'DATAREG', 'HORAREG', 'DATA_ATIVACAO', 'DATAAT', 'HORAAT', 'DATACANCEL', 'REPASSADO_BONUS_FUNCIONARIO', 'REPASSADO_AGENCIADOR', 'REPASSADO_CAPTADOR', 'REPASSADO_ATENDENTE', 'REPASSADO_ANALISTA', 'DATA_CONFERENCIA'], 'safe'],
            [['VALOR_BRUTO', 'SALDOANTERIOR', 'SALDO_RECOMPRA', 'SALDO_RETIDO', 'VALOR', 'JUROS', 'TAXA', 'VALORPARCELA', 'COMISSAO_FLEXIVEL', 'TAC', 'LIMITE_CARTAO_CREDITO', 'PERCENT_REFIN_ORIGINAL', 'IOF', 'SEGURO', 'PORCENTAGEM_COMISSAO', 'PORCENTAGEM_COMISSAO_CORRETOR_1', 'PORCENTAGEM_COMISSAO_CORRETOR_2', 'PORCENTAGEM_COMISSAO_REC', 'PORCENTAGEM_REC_TAC', 'VALOR_REC_TAC', 'PORCENTAGEM_PAG_TAC', 'VALOR_PAG_TAC', 'VALOR_COMISSAO', 'VALOR_COMISSAO_CORRETOR_1', 'VALOR_COMISSAO_CORRETOR_2', 'VALOR_COMISSAO_REC', 'VALOR_PAGO_CONTRATO', 'VALOR_RECEB_CONTRATO', 'PORCENTAGEM_RECEB_BONUS', 'VALOR_RECEB_BONUS', 'PORCENTAGEM_PAGAR_BONUS', 'VALOR_PAGAR_BOMUS', 'VALOR_PAGAR_BONUS_CAPTADOR', 'VALOR_PAGAR_BONUS_ANALISTA', 'VALOR_PAGAR_BONUS_ATENDENTE', 'VALOR_PAGAR_BONUS_FUNCIONARIO', 'PERCENTUAL_SUBSTABELECIDO', 'DESC_CPMF', 'PORCENTAGEM_COMISSAO_AGENCIADOR', 'VALOR_COMISSAO_AGENCIADOR', 'PORCENTAGEM_COMISSAO_CAPTADOR', 'VALOR_COMISSAO_CAPTADOR', 'PORCENTAGEM_COMISSAO_ATENDENTE', 'VALOR_COMISSAO_ATENDENTE', 'PORCENTAGEM_COMISSAO_ANALISTA', 'VALOR_COMISSAO_ANALISTA', 'DESC_ISS', 'DESC_OUTROS', 'DESC_ADIANTAMENTO'], 'number'],
            [['OBS'], 'string'],
            [['LOJA', 'NUMERO_ORDEM_PAGAMENTO', 'REFERENCIA_BENS_DURAVEIS'], 'string', 'max' => 20],
            [['AGENCIA_ORDEM_PAGAMENTO'], 'string', 'max' => 6],
            [['USUARIO', 'USUARIOAT', 'USUARIOCANCEL', 'IDENTIFICACAO_CLIENTE', 'USUARIO_CONFERENCIA', 'NUM_RASTREIO_OBJETO'], 'string', 'max' => 50],
            [['CONTRATO'], 'string', 'max' => 15],
            [['STATUS'], 'string', 'max' => 255],
            [['IDENTIFICAOCAO_CONTRATO', 'IDENTIFICACAO_CONTRATO_2', 'IDENTIFICADOR_CORREIO', 'COD_BARRAS_CONTRATO', 'NUMERO_BORDERO_BANCO'], 'string', 'max' => 30],
            [['PRODUTO'], 'exist', 'skipOnError' => true, 'targetClass' => Produtos::className(), 'targetAttribute' => ['PRODUTO' => 'REGISTRO']],
        ];
    }
    
    

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        
        return [
            'REGISTRO' => 'Registro',
            'TIPO_EMPRESTIMO' => 'Tipo  Emprestimo',
            'PRODUTO' => 'Produto',
            'CAPTADOR' => 'Captador',
            'CORRETOR' => 'Corretor',
            'LOJA' => 'Loja',
            'CORRETOR_1' => 'Corretor 1',
            'CORRETOR_2' => 'Corretor 2',
            'CLIENTE' => 'Cliente',
            'DATA' => 'Data empréstimo',
            'DATAINICIO' => 'VENC. 1ª Parcela',
            'VALOR_BRUTO' => 'Valor  Bruto',
            'SALDOANTERIOR' => 'Saldo refin.',
            'SALDO_RECOMPRA' => 'Saldo  Recompra',
            'SALDO_RETIDO' => 'Saldo  Retido',
            'VALOR' => 'Valor LIQ.',
            'JUROS' => 'Juros',
            'DATA_FATOR' => 'Data  Fator',
            'TAXA' => 'Taxa',
            'CATEGORIA' => 'Categoria',
            'DIA' => 'Dia',
            'PARCELAS' => 'Parcelas',
            'VALORPARCELA' => 'Valor da parcela',
            'FORMULA' => 'Formula',
            'COMISSAO_FLEXIVEL' => 'Comissao  Flexivel',
            'TAC' => 'Tac',
            'ESTADO' => 'Estado',
            'ESTADO_ANTERIOR_PENDENCIA' => 'Estado  Anterior  Pendencia',
            'UTIL' => 'Util',
            'CHAMADA' => 'Chamada',
            'SISDEB' => 'Sisdeb',
            'SISDEB_ATIVO' => 'Sisdeb  Ativo',
            'SISDEB_CONTA_CLIENTE' => 'Sisdeb  Conta  Cliente',
            'SISDEB_CONTA_CREDITO' => 'Sisdeb  Conta  Credito',
            'TIPOVENC' => 'Tipovenc',
            'DIVULGACAO' => 'Divulgacao',
            'FORMADIVULGACAO' => 'Formadivulgacao',
            'CONTRATO_DIGITADO' => 'Contrato  Digitado',
            'VEZES_CONTRATO_DIGITADO' => 'Vezes  Contrato  Digitado',
            'DATA_ULTIMA_DIGITACAO' => 'Data  Ultima  Digitacao',
            'CONTRATO_ENVIADO' => 'Contrato  Enviado',
            'CONTRATO_ENVIADO_MATRIZ' => 'Contrato  Enviado  Matriz',
            'CONTRATO_RECEBIDO_MATRIZ' => 'Contrato  Recebido  Matriz',
            'CARTAO_CREDITO' => 'Cartao  Credito',
            'CARTAO_COM_SAQUE' => 'Cartao  Com  Saque',
            'LIMITE_CARTAO_CREDITO' => 'Limite  Cartao  Credito',
            'DINHEIRO_RAPIDO' => 'Dinheiro  Rapido',
            'REFIN_RECOMPRA' => 'Refin  Recompra',
            'PERCENT_REFIN_ORIGINAL' => 'Percent  Refin  Original',
            'BANCO_ORDEM_PAGAMENTO' => 'Banco  Ordem  Pagamento',
            'AGENCIA_ORDEM_PAGAMENTO' => 'Agencia  Ordem  Pagamento',
            'NUMERO_ORDEM_PAGAMENTO' => 'Numero  Ordem  Pagamento',
            'LIMITE_SAQUE_ORDEM_PAGAMENTO' => 'Limite  Saque  Ordem  Pagamento',
            'CONTA_DEPOSITO' => 'Conta  Deposito',
            'CONTRATO_ORIGINAL' => 'Contrato  Original',
            'REPASSADOEMPRESA' => 'Repassadoempresa',
            'REPASSADOCORRETOR' => 'Repassadocorretor',
            'TIPO_COMISSIONAMENTO' => 'Tipo  Comissionamento',
            'COMISSAO_ESTORNADA' => 'Comissao  Estornada',
            'COMISSAO_ADIANTADA' => 'Comissao  Adiantada',
            'CONTRATO_VENDIDO' => 'Contrato  Vendido',
            'CONTRATO_RENOVADO' => 'Contrato  Renovado',
            'DATAREG' => 'Datareg',
            'HORAREG' => 'Horareg',
            'USUARIO' => 'Usuario',
            'USUARIO_WEB' => 'Usuario  Web',
            'DATA_ATIVACAO' => 'Data  Ativacao',
            'DATAAT' => 'Dataat',
            'HORAAT' => 'Horaat',
            'USUARIOAT' => 'Usuarioat',
            'DATACANCEL' => 'Datacancel',
            'USUARIOCANCEL' => 'Usuariocancel',
            'OBS' => 'Obs',
            'EXCLUIDO' => 'Excluido',
            'CONTRATO' => 'Contrato',
            'BENS_DURAVEIS' => 'Bens  Duraveis',
            'REFERENCIA_BENS_DURAVEIS' => 'Referencia  Bens  Duraveis',
            'ATENDENTE' => 'Atendente',
            'ASSISTENTE' => 'Assistente',
            'ANALISTA' => 'Analista',
            'TELEFONISTA' => 'Telefonista',
            'PROMOTOR' => 'Promotor',
            'IDENTIFICAOCAO_CONTRATO' => 'Identificaocao  Contrato',
            'IDENTIFICACAO_CONTRATO_2' => 'Identificacao  Contrato 2',
            'IDENTIFICADOR_CORREIO' => 'Identificador  Correio',
            'COD_BARRAS_CONTRATO' => 'Cod  Barras  Contrato',
            'CONTA' => 'Conta',
            'IDENTIFICACAO_CLIENTE' => 'Identificacao  Cliente',
            'IOF' => 'Iof',
            'SEGURO' => 'Seguro',
            'REGRA' => 'Regra',
            'PORCENTAGEM_COMISSAO' => 'Porcentagem  Comissao',
            'PORCENTAGEM_COMISSAO_CORRETOR_1' => 'Porcentagem  Comissao  Corretor 1',
            'PORCENTAGEM_COMISSAO_CORRETOR_2' => 'Porcentagem  Comissao  Corretor 2',
            'PORCENTAGEM_COMISSAO_REC' => 'Porcentagem  Comissao  Rec',
            'REGISTRO_TABELA_COMISSAO_TAC' => 'Registro  Tabela  Comissao  Tac',
            'PORCENTAGEM_REC_TAC' => 'Porcentagem  Rec  Tac',
            'VALOR_REC_TAC' => 'Valor  Rec  Tac',
            'PORCENTAGEM_PAG_TAC' => 'Porcentagem  Pag  Tac',
            'VALOR_PAG_TAC' => 'Valor  Pag  Tac',
            'VALOR_COMISSAO' => 'Valor  Comissao',
            'VALOR_COMISSAO_CORRETOR_1' => 'Valor  Comissao  Corretor 1',
            'VALOR_COMISSAO_CORRETOR_2' => 'Valor  Comissao  Corretor 2',
            'VALOR_COMISSAO_REC' => 'Valor  Comissao  Rec',
            'VALOR_PAGO_CONTRATO' => 'Valor  Pago  Contrato',
            'VALOR_RECEB_CONTRATO' => 'Valor  Receb  Contrato',
            'PORCENTAGEM_RECEB_BONUS' => 'Porcentagem  Receb  Bonus',
            'VALOR_RECEB_BONUS' => 'Valor  Receb  Bonus',
            'PORCENTAGEM_PAGAR_BONUS' => 'Porcentagem  Pagar  Bonus',
            'VALOR_PAGAR_BOMUS' => 'Valor  Pagar  Bomus',
            'VALOR_PAGAR_BONUS_CAPTADOR' => 'Valor  Pagar  Bonus  Captador',
            'VALOR_PAGAR_BONUS_ANALISTA' => 'Valor  Pagar  Bonus  Analista',
            'VALOR_PAGAR_BONUS_ATENDENTE' => 'Valor  Pagar  Bonus  Atendente',
            'REPASSADO_BONUS_FUNCIONARIO' => 'Repassado  Bonus  Funcionario',
            'VALOR_PAGAR_BONUS_FUNCIONARIO' => 'Valor  Pagar  Bonus  Funcionario',
            'SUBSTABELECIDO' => 'Substabelecido',
            'PERCENTUAL_SUBSTABELECIDO' => 'Percentual  Substabelecido',
            'COMISSAO_ALTERADA_MANUALMENTE' => 'Comissao  Alterada  Manualmente',
            'DESC_CPMF' => 'Desc  Cpmf',
            'PORCENTAGEM_COMISSAO_AGENCIADOR' => 'Porcentagem  Comissao  Agenciador',
            'VALOR_COMISSAO_AGENCIADOR' => 'Valor  Comissao  Agenciador',
            'REPASSADO_AGENCIADOR' => 'Repassado  Agenciador',
            'PORCENTAGEM_COMISSAO_CAPTADOR' => 'Porcentagem  Comissao  Captador',
            'VALOR_COMISSAO_CAPTADOR' => 'Valor  Comissao  Captador',
            'REPASSADO_CAPTADOR' => 'Repassado  Captador',
            'PORCENTAGEM_COMISSAO_ATENDENTE' => 'Porcentagem  Comissao  Atendente',
            'VALOR_COMISSAO_ATENDENTE' => 'Valor  Comissao  Atendente',
            'REPASSADO_ATENDENTE' => 'Repassado  Atendente',
            'PORCENTAGEM_COMISSAO_ANALISTA' => 'Porcentagem  Comissao  Analista',
            'VALOR_COMISSAO_ANALISTA' => 'Valor  Comissao  Analista',
            'REPASSADO_ANALISTA' => 'Repassado  Analista',
            'DESC_ISS' => 'Desc  Iss',
            'DESC_OUTROS' => 'Desc  Outros',
            'DESC_ADIANTAMENTO' => 'Desc  Adiantamento',
            'ENVIA_RELATORIO_REFIN' => 'Envia  Relatorio  Refin',
            'ENTRADA_ELETRONICA' => 'Entrada  Eletronica',
            'ENVIADO_REPASSE_AGENTE' => 'Enviado  Repasse  Agente',
            'CAMPANHA' => 'Campanha',
            'RECIBO_PAGAMENTO_CORRETOR' => 'Recibo  Pagamento  Corretor',
            'CONTRATO_RENEGOCIADO' => 'Contrato  Renegociado',
            'DATA_CONFERENCIA' => 'Data  Conferencia',
            'USUARIO_CONFERENCIA' => 'Usuario  Conferencia',
            'NUMERO_BORDERO_BANCO' => 'Numero  Bordero  Banco',
            'NUM_RASTREIO_OBJETO' => 'Num  Rastreio  Objeto',
            'ATRASO_PAGAMENTO_CONTRATO' => 'Atraso  Pagamento  Contrato',
             'STATUS' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduto()
    {
        return $this->hasOne(Produtos::className(), ['REGISTRO' => 'PRODUTO']);
    }
       public function getCliente()
    {
        return $this->hasOne(Cliente::className(), ['REGISTRO' => 'CLIENTE']);
    }
    
           public function getCategoria()
    {
        return $this->hasOne(Categoria::className(), ['REGISTRO' => 'CATEGORIA']);
    }
    
           public function getLoja()
    {
        return $this->hasOne(Empresa::className(), ['REGISTRO' => 'LOJA']);
    }
    
    
}
