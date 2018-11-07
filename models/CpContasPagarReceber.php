<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cp_contas_pagar_receber".
 *
 * @property int $REGISTRO
 * @property int $ATIVA
 * @property int $FILIAL
 * @property int $TIPO_CONTA
 * @property int $TIPO_OPERACAO
 * @property string $TITULO
 * @property int $PARCELA
 * @property string $HISTORICO
 * @property int $CLIENTE
 * @property int $FORNECEDOR
 * @property int $REGISTRO_EMPRESTIMO
 * @property int $REGISTRO_P_EMP
 * @property int $FORMA_QUITACAO_P_EMP
 * @property int $REGISTRO_T_ADMIN
 * @property int $TIPO_DOCUMENTO
 * @property string $EMISSAO
 * @property string $RECEBIMENTO_NOTA
 * @property string $VENCIMENTO
 * @property double $ISS
 * @property double $IRRF
 * @property double $PIS_COFINS_CSLL
 * @property double $INSS
 * @property double $OUTROS
 * @property double $VALOR_BRUTO
 * @property double $VALOR_TOTAL
 * @property double $VALOR
 * @property double $VALOR_PAGO
 * @property string $PAGAMENTO
 * @property double $DESCONTO
 * @property double $ACRESCIMO
 * @property string $OBSERVACAO
 * @property int $CENTRO_CUSTOS
 * @property int $PLANO_DE_CONTAS
 * @property int $LANCA_FINANCEIRO
 * @property int $FORMA_PAGAMENTO
 * @property int $BANCO_PAGAMENTO
 * @property int $CONTA
 * @property string $DOCUMENTO
 * @property string $USUARIO
 * @property string $DATATREGISTRO
 * @property int $EXCLUIDO
 */
class CpContasPagarReceber extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cp_contas_pagar_receber';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ATIVA', 'FILIAL', 'TIPO_CONTA', 'TIPO_OPERACAO', 'PARCELA', 'CLIENTE', 'FORNECEDOR', 'REGISTRO_EMPRESTIMO', 'REGISTRO_P_EMP', 'FORMA_QUITACAO_P_EMP', 'REGISTRO_T_ADMIN', 'TIPO_DOCUMENTO', 'CENTRO_CUSTOS', 'PLANO_DE_CONTAS', 'LANCA_FINANCEIRO', 'FORMA_PAGAMENTO', 'BANCO_PAGAMENTO', 'CONTA', 'EXCLUIDO'], 'integer'],
            [['EMISSAO', 'RECEBIMENTO_NOTA', 'VENCIMENTO', 'PAGAMENTO', 'DATATREGISTRO'], 'safe'],
            [['ISS', 'IRRF', 'PIS_COFINS_CSLL', 'INSS', 'OUTROS', 'VALOR_BRUTO', 'VALOR_TOTAL', 'VALOR', 'VALOR_PAGO', 'DESCONTO', 'ACRESCIMO'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['TITULO', 'DOCUMENTO'], 'string', 'max' => 20],
            [['HISTORICO'], 'string', 'max' => 100],
            [['USUARIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'ATIVA' => 'Ativa',
            'FILIAL' => 'Filial',
            'TIPO_CONTA' => 'Tipo  Conta',
            'TIPO_OPERACAO' => 'Tipo  Operacao',
            'TITULO' => 'Titulo',
            'PARCELA' => 'Parcela',
            'HISTORICO' => 'Historico',
            'CLIENTE' => 'Cliente',
            'FORNECEDOR' => 'Fornecedor',
            'REGISTRO_EMPRESTIMO' => 'Registro  Emprestimo',
            'REGISTRO_P_EMP' => 'Registro  P  Emp',
            'FORMA_QUITACAO_P_EMP' => 'Forma  Quitacao  P  Emp',
            'REGISTRO_T_ADMIN' => 'Registro  T  Admin',
            'TIPO_DOCUMENTO' => 'Tipo  Documento',
            'EMISSAO' => 'Emissao',
            'RECEBIMENTO_NOTA' => 'Recebimento  Nota',
            'VENCIMENTO' => 'Vencimento',
            'ISS' => 'Iss',
            'IRRF' => 'Irrf',
            'PIS_COFINS_CSLL' => 'Pis  Cofins  Csll',
            'INSS' => 'Inss',
            'OUTROS' => 'Outros',
            'VALOR_BRUTO' => 'Valor  Bruto',
            'VALOR_TOTAL' => 'Valor  Total',
            'VALOR' => 'Valor',
            'VALOR_PAGO' => 'Valor  Pago',
            'PAGAMENTO' => 'Pagamento',
            'DESCONTO' => 'Desconto',
            'ACRESCIMO' => 'Acrescimo',
            'OBSERVACAO' => 'Observacao',
            'CENTRO_CUSTOS' => 'Centro  Custos',
            'PLANO_DE_CONTAS' => 'Plano  De  Contas',
            'LANCA_FINANCEIRO' => 'Lanca  Financeiro',
            'FORMA_PAGAMENTO' => 'Forma  Pagamento',
            'BANCO_PAGAMENTO' => 'Banco  Pagamento',
            'CONTA' => 'Conta',
            'DOCUMENTO' => 'Documento',
            'USUARIO' => 'Usuario',
            'DATATREGISTRO' => 'Datatregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
