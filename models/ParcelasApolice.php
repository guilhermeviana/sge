<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parcelas_apolice".
 *
 * @property int $REGISTRO
 * @property int $APOLICE
 * @property int $PARCELA
 * @property double $VALOR
 * @property double $VALORPAGO
 * @property string $VENCIMENTO
 * @property string $PAGAMENTO
 * @property string $DATAREG
 * @property int $ENVIADOSISDEB
 * @property int $BANCO
 * @property string $AGENCIA
 * @property string $CONTA
 * @property string $CHEQUE
 * @property string $USUARIO_REC
 * @property string $DATA_REC_COMISSAO
 * @property double $PERCENTUAL_COM_RECEBIDA
 * @property double $VALOR_COM_RECEBIDA
 * @property string $USUARIO_PAG
 * @property string $DATA_PAG_COMISSAO
 * @property double $PERCENTUAL_COM_PAGAR
 * @property double $VALOR_COM_PAGAR
 * @property int $EXCLUIDO
 */
class ParcelasApolice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parcelas_apolice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['APOLICE', 'PARCELA', 'ENVIADOSISDEB', 'BANCO', 'EXCLUIDO'], 'integer'],
            [['VALOR', 'VALORPAGO', 'PERCENTUAL_COM_RECEBIDA', 'VALOR_COM_RECEBIDA', 'PERCENTUAL_COM_PAGAR', 'VALOR_COM_PAGAR'], 'number'],
            [['VENCIMENTO', 'PAGAMENTO', 'DATAREG', 'DATA_REC_COMISSAO', 'DATA_PAG_COMISSAO'], 'safe'],
            [['AGENCIA'], 'string', 'max' => 6],
            [['CONTA', 'CHEQUE'], 'string', 'max' => 15],
            [['USUARIO_REC', 'USUARIO_PAG'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'APOLICE' => 'Apolice',
            'PARCELA' => 'Parcela',
            'VALOR' => 'Valor',
            'VALORPAGO' => 'Valorpago',
            'VENCIMENTO' => 'Vencimento',
            'PAGAMENTO' => 'Pagamento',
            'DATAREG' => 'Datareg',
            'ENVIADOSISDEB' => 'Enviadosisdeb',
            'BANCO' => 'Banco',
            'AGENCIA' => 'Agencia',
            'CONTA' => 'Conta',
            'CHEQUE' => 'Cheque',
            'USUARIO_REC' => 'Usuario  Rec',
            'DATA_REC_COMISSAO' => 'Data  Rec  Comissao',
            'PERCENTUAL_COM_RECEBIDA' => 'Percentual  Com  Recebida',
            'VALOR_COM_RECEBIDA' => 'Valor  Com  Recebida',
            'USUARIO_PAG' => 'Usuario  Pag',
            'DATA_PAG_COMISSAO' => 'Data  Pag  Comissao',
            'PERCENTUAL_COM_PAGAR' => 'Percentual  Com  Pagar',
            'VALOR_COM_PAGAR' => 'Valor  Com  Pagar',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
