<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "solicitacao_margem".
 *
 * @property int $REGISTRO
 * @property int $TIPO
 * @property string $DATA_SOLICITACAO
 * @property string $DATA_VALIDADE
 * @property int $CORRETOR
 * @property int $CLIENTE
 * @property string $MASP
 * @property string $SIAPE
 * @property int $TIPO_PRODUTO
 * @property int $CANAL
 * @property int $SOLICITACAO
 * @property string $ORGAO
 * @property string $BANCO_QUITACAO
 * @property double $SALDO_DEVEDOR
 * @property double $VALOR_PARCELA
 * @property double $VALOR_VANTAGENS
 * @property double $VALOR_DESCONTOS
 * @property double $VALOR_MARGEM_PREVISTA
 * @property double $VALOR_MARGEM
 * @property int $SEM_MARGEM
 * @property int $STATUS
 * @property string $OBS
 * @property int $CONTRATO
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property int $EXCLUIDO
 */
class SolicitacaoMargem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'solicitacao_margem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO', 'CORRETOR', 'CLIENTE', 'TIPO_PRODUTO', 'CANAL', 'SOLICITACAO', 'SEM_MARGEM', 'STATUS', 'CONTRATO', 'EXCLUIDO'], 'integer'],
            [['DATA_SOLICITACAO', 'DATA_VALIDADE', 'DATAREGISTRO'], 'safe'],
            [['SALDO_DEVEDOR', 'VALOR_PARCELA', 'VALOR_VANTAGENS', 'VALOR_DESCONTOS', 'VALOR_MARGEM_PREVISTA', 'VALOR_MARGEM'], 'number'],
            [['OBS'], 'string'],
            [['MASP', 'SIAPE'], 'string', 'max' => 20],
            [['ORGAO', 'BANCO_QUITACAO', 'USUARIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'TIPO' => 'Tipo',
            'DATA_SOLICITACAO' => 'Data  Solicitacao',
            'DATA_VALIDADE' => 'Data  Validade',
            'CORRETOR' => 'Corretor',
            'CLIENTE' => 'Cliente',
            'MASP' => 'Masp',
            'SIAPE' => 'Siape',
            'TIPO_PRODUTO' => 'Tipo  Produto',
            'CANAL' => 'Canal',
            'SOLICITACAO' => 'Solicitacao',
            'ORGAO' => 'Orgao',
            'BANCO_QUITACAO' => 'Banco  Quitacao',
            'SALDO_DEVEDOR' => 'Saldo  Devedor',
            'VALOR_PARCELA' => 'Valor  Parcela',
            'VALOR_VANTAGENS' => 'Valor  Vantagens',
            'VALOR_DESCONTOS' => 'Valor  Descontos',
            'VALOR_MARGEM_PREVISTA' => 'Valor  Margem  Prevista',
            'VALOR_MARGEM' => 'Valor  Margem',
            'SEM_MARGEM' => 'Sem  Margem',
            'STATUS' => 'Status',
            'OBS' => 'Obs',
            'CONTRATO' => 'Contrato',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
