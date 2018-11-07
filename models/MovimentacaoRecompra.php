<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movimentacao_recompra".
 *
 * @property int $REGISTRO
 * @property int $EMPRESTIMO
 * @property int $TIPO
 * @property int $TIPO_COMPRA
 * @property int $FORMA_PAGAMENTO_CLIENTE
 * @property int $CORRETOR
 * @property int $CLIENTE
 * @property int $CONTA
 * @property int $PRODUTO
 * @property string $DESCRICAO
 * @property string $BANCO
 * @property string $VENCIMENTO
 * @property string $DATA
 * @property string $DATA_RECIBO
 * @property string $PAGAMENTO
 * @property string $RECEBIMENTO
 * @property string $NUMERO_PROPOSTA
 * @property string $NUMERO_CONTRATO
 * @property double $VALOR_SOLICITADO
 * @property double $VALOR_LIBERADO
 * @property double $VALOR_QUITADO
 * @property double $VALOR_ACERTADO
 * @property double $DESPESAS_BANCARIAS
 * @property int $ESTADO
 * @property string $DATA_ENTRADA
 * @property string $DATA_RESPOSTA
 * @property int $PROCURADOR
 * @property int $TIPO_PROCURACAO
 * @property int $STATUS_PROCESSO
 * @property string $OBSERVACAO
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property string $DATA_ALTERACAO
 * @property int $EXCLUIDO
 */
class MovimentacaoRecompra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movimentacao_recompra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EMPRESTIMO', 'TIPO', 'TIPO_COMPRA', 'FORMA_PAGAMENTO_CLIENTE', 'CORRETOR', 'CLIENTE', 'CONTA', 'PRODUTO', 'ESTADO', 'PROCURADOR', 'TIPO_PROCURACAO', 'STATUS_PROCESSO', 'EXCLUIDO'], 'integer'],
            [['VENCIMENTO', 'DATA', 'DATA_RECIBO', 'PAGAMENTO', 'RECEBIMENTO', 'DATA_ENTRADA', 'DATA_RESPOSTA', 'DATAREGISTRO', 'DATA_ALTERACAO'], 'safe'],
            [['VALOR_SOLICITADO', 'VALOR_LIBERADO', 'VALOR_QUITADO', 'VALOR_ACERTADO', 'DESPESAS_BANCARIAS'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['DESCRICAO', 'BANCO'], 'string', 'max' => 100],
            [['NUMERO_PROPOSTA', 'NUMERO_CONTRATO'], 'string', 'max' => 20],
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
            'EMPRESTIMO' => 'Emprestimo',
            'TIPO' => 'Tipo',
            'TIPO_COMPRA' => 'Tipo  Compra',
            'FORMA_PAGAMENTO_CLIENTE' => 'Forma  Pagamento  Cliente',
            'CORRETOR' => 'Corretor',
            'CLIENTE' => 'Cliente',
            'CONTA' => 'Conta',
            'PRODUTO' => 'Produto',
            'DESCRICAO' => 'Descricao',
            'BANCO' => 'Banco',
            'VENCIMENTO' => 'Vencimento',
            'DATA' => 'Data',
            'DATA_RECIBO' => 'Data  Recibo',
            'PAGAMENTO' => 'Pagamento',
            'RECEBIMENTO' => 'Recebimento',
            'NUMERO_PROPOSTA' => 'Numero  Proposta',
            'NUMERO_CONTRATO' => 'Numero  Contrato',
            'VALOR_SOLICITADO' => 'Valor  Solicitado',
            'VALOR_LIBERADO' => 'Valor  Liberado',
            'VALOR_QUITADO' => 'Valor  Quitado',
            'VALOR_ACERTADO' => 'Valor  Acertado',
            'DESPESAS_BANCARIAS' => 'Despesas  Bancarias',
            'ESTADO' => 'Estado',
            'DATA_ENTRADA' => 'Data  Entrada',
            'DATA_RESPOSTA' => 'Data  Resposta',
            'PROCURADOR' => 'Procurador',
            'TIPO_PROCURACAO' => 'Tipo  Procuracao',
            'STATUS_PROCESSO' => 'Status  Processo',
            'OBSERVACAO' => 'Observacao',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'DATA_ALTERACAO' => 'Data  Alteracao',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
