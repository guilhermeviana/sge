<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "restricao_credito".
 *
 * @property int $REGISTRO
 * @property int $ATIVO
 * @property string $NUMERO_IDENTIFICACAO
 * @property string $USUARIO_INCLUSAO
 * @property string $DATA_INCLUSAO
 * @property string $DATA_RETIRADA
 * @property string $USUARIO_RETIRADA
 * @property string $DATA_ENVIO_INCLUSAO_SERVICO
 * @property string $DATA_INCLUSAO_SERVICO
 * @property string $DATA_ENVIO_EXCLUSAO_SERVICO
 * @property string $DATA_EXCLUSAO_SERVICO
 * @property int $PARCELA
 * @property string $VENCIMENTO_ORIGINAL
 * @property double $VALOR_ORIGINAL
 * @property int $SERVICO
 * @property string $OBSERVACAO
 * @property int $EXCLUIDO
 */
class RestricaoCredito extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'restricao_credito';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ATIVO', 'PARCELA', 'SERVICO', 'EXCLUIDO'], 'integer'],
            [['DATA_INCLUSAO', 'DATA_RETIRADA', 'DATA_ENVIO_INCLUSAO_SERVICO', 'DATA_INCLUSAO_SERVICO', 'DATA_ENVIO_EXCLUSAO_SERVICO', 'DATA_EXCLUSAO_SERVICO', 'VENCIMENTO_ORIGINAL'], 'safe'],
            [['VALOR_ORIGINAL'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['NUMERO_IDENTIFICACAO'], 'string', 'max' => 20],
            [['USUARIO_INCLUSAO', 'USUARIO_RETIRADA'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'ATIVO' => 'Ativo',
            'NUMERO_IDENTIFICACAO' => 'Numero  Identificacao',
            'USUARIO_INCLUSAO' => 'Usuario  Inclusao',
            'DATA_INCLUSAO' => 'Data  Inclusao',
            'DATA_RETIRADA' => 'Data  Retirada',
            'USUARIO_RETIRADA' => 'Usuario  Retirada',
            'DATA_ENVIO_INCLUSAO_SERVICO' => 'Data  Envio  Inclusao  Servico',
            'DATA_INCLUSAO_SERVICO' => 'Data  Inclusao  Servico',
            'DATA_ENVIO_EXCLUSAO_SERVICO' => 'Data  Envio  Exclusao  Servico',
            'DATA_EXCLUSAO_SERVICO' => 'Data  Exclusao  Servico',
            'PARCELA' => 'Parcela',
            'VENCIMENTO_ORIGINAL' => 'Vencimento  Original',
            'VALOR_ORIGINAL' => 'Valor  Original',
            'SERVICO' => 'Servico',
            'OBSERVACAO' => 'Observacao',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
