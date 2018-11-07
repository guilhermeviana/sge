<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parcelas".
 *
 * @property int $REGISTRO
 * @property int $STATUS
 * @property int $EMPRESTIMO
 * @property int $PARCELA
 * @property double $VALOR_BRUTO
 * @property double $DESCONTO
 * @property double $JUROS
 * @property double $VALOR
 * @property double $VALORPAGO
 * @property string $USUARIO_PAG
 * @property string $VENCIMENTO
 * @property int $MOTIVO_PAGAMENTO
 * @property string $PAGAMENTO
 * @property int $CONTA_PAGAMENTO
 * @property int $TIPO_PAGAMENTO
 * @property string $DATAREG
 * @property int $SISDEB
 * @property int $AUTO
 * @property int $ENVIADOSISDEB
 * @property int $BANCO
 * @property string $AGENCIA
 * @property string $CONTA
 * @property string $CHEQUE
 * @property int $SITUACAO
 * @property int $RENEGOCIADA
 * @property double $PERC_COM_REC_CARTEIRA
 * @property double $VALOR_COM_REC_CARTEIRA
 * @property string $VENCIMENTO_ORIGINAL
 * @property double $VALOR_ORIGINAL
 * @property string $ULTIMO_RETORNO
 * @property string $DATA_ULTIMO_RETORNO
 * @property int $PARCELA_NEGOCIADA
 * @property int $EXCLUIDO
 */
class Parcelas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parcelas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['STATUS', 'EMPRESTIMO', 'PARCELA', 'MOTIVO_PAGAMENTO', 'CONTA_PAGAMENTO', 'TIPO_PAGAMENTO', 'SISDEB', 'AUTO', 'ENVIADOSISDEB', 'BANCO', 'SITUACAO', 'RENEGOCIADA', 'PARCELA_NEGOCIADA', 'EXCLUIDO'], 'integer'],
            [['VALOR_BRUTO', 'DESCONTO', 'JUROS', 'VALOR', 'VALORPAGO', 'PERC_COM_REC_CARTEIRA', 'VALOR_COM_REC_CARTEIRA', 'VALOR_ORIGINAL'], 'number'],
            [['VENCIMENTO', 'PAGAMENTO', 'DATAREG', 'VENCIMENTO_ORIGINAL', 'DATA_ULTIMO_RETORNO'], 'safe'],
            [['USUARIO_PAG'], 'string', 'max' => 50],
            [['AGENCIA'], 'string', 'max' => 6],
            [['CONTA', 'CHEQUE'], 'string', 'max' => 15],
            [['ULTIMO_RETORNO'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'STATUS' => 'Status',
            'EMPRESTIMO' => 'Emprestimo',
            'PARCELA' => 'Parcela',
            'VALOR_BRUTO' => 'Valor  Bruto',
            'DESCONTO' => 'Desconto',
            'JUROS' => 'Juros',
            'VALOR' => 'Valor',
            'VALORPAGO' => 'Valorpago',
            'USUARIO_PAG' => 'Usuario  Pag',
            'VENCIMENTO' => 'Vencimento',
            'MOTIVO_PAGAMENTO' => 'Motivo  Pagamento',
            'PAGAMENTO' => 'Pagamento',
            'CONTA_PAGAMENTO' => 'Conta  Pagamento',
            'TIPO_PAGAMENTO' => 'Tipo  Pagamento',
            'DATAREG' => 'Datareg',
            'SISDEB' => 'Sisdeb',
            'AUTO' => 'Auto',
            'ENVIADOSISDEB' => 'Enviadosisdeb',
            'BANCO' => 'Banco',
            'AGENCIA' => 'Agencia',
            'CONTA' => 'Conta',
            'CHEQUE' => 'Cheque',
            'SITUACAO' => 'Situacao',
            'RENEGOCIADA' => 'Renegociada',
            'PERC_COM_REC_CARTEIRA' => 'Perc  Com  Rec  Carteira',
            'VALOR_COM_REC_CARTEIRA' => 'Valor  Com  Rec  Carteira',
            'VENCIMENTO_ORIGINAL' => 'Vencimento  Original',
            'VALOR_ORIGINAL' => 'Valor  Original',
            'ULTIMO_RETORNO' => 'Ultimo  Retorno',
            'DATA_ULTIMO_RETORNO' => 'Data  Ultimo  Retorno',
            'PARCELA_NEGOCIADA' => 'Parcela  Negociada',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
