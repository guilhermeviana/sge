<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movsisdebemp".
 *
 * @property int $REGISTRO
 * @property int $NSA
 * @property int $PARCELA
 * @property int $CONTA_CREDITO
 * @property int $CONTA_DEBITO
 * @property string $VENCIMENTO
 * @property double $VALOR
 * @property double $VALOR_PAGO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $RECEBIDO
 * @property string $DATA_RECEBIDO
 * @property string $USUARIO_RECEBIDO
 * @property int $CANCELADO
 * @property string $DATA_RETORNO
 * @property string $USUARIO_RETORNO
 * @property string $DESCRICAO_RETORNO
 * @property int $EXCLUIDO
 */
class Movsisdebemp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movsisdebemp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NSA', 'PARCELA', 'CONTA_CREDITO', 'CONTA_DEBITO', 'RECEBIDO', 'CANCELADO', 'EXCLUIDO'], 'integer'],
            [['VENCIMENTO', 'DATAREGISTRO', 'DATA_RECEBIDO', 'DATA_RETORNO'], 'safe'],
            [['VALOR', 'VALOR_PAGO'], 'number'],
            [['USUARIO', 'USUARIO_RECEBIDO', 'USUARIO_RETORNO'], 'string', 'max' => 50],
            [['DESCRICAO_RETORNO'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'NSA' => 'Nsa',
            'PARCELA' => 'Parcela',
            'CONTA_CREDITO' => 'Conta  Credito',
            'CONTA_DEBITO' => 'Conta  Debito',
            'VENCIMENTO' => 'Vencimento',
            'VALOR' => 'Valor',
            'VALOR_PAGO' => 'Valor  Pago',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'RECEBIDO' => 'Recebido',
            'DATA_RECEBIDO' => 'Data  Recebido',
            'USUARIO_RECEBIDO' => 'Usuario  Recebido',
            'CANCELADO' => 'Cancelado',
            'DATA_RETORNO' => 'Data  Retorno',
            'USUARIO_RETORNO' => 'Usuario  Retorno',
            'DESCRICAO_RETORNO' => 'Descricao  Retorno',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
