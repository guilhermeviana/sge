<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sisdeb_cancelamento".
 *
 * @property int $REGISTRO
 * @property int $CLIENTE
 * @property int $REGISTRO_TAXA
 * @property int $CORRETOR
 * @property string $DATA
 * @property int $CONTA
 * @property int $COD_MOTIVO
 * @property string $MOTIVO
 * @property string $OBSERVACAO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class SisdebCancelamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sisdeb_cancelamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CLIENTE', 'REGISTRO_TAXA', 'CORRETOR', 'CONTA', 'COD_MOTIVO', 'EXCLUIDO'], 'integer'],
            [['DATA', 'DATAREGISTRO'], 'safe'],
            [['OBSERVACAO'], 'string'],
            [['MOTIVO', 'USUARIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CLIENTE' => 'Cliente',
            'REGISTRO_TAXA' => 'Registro  Taxa',
            'CORRETOR' => 'Corretor',
            'DATA' => 'Data',
            'CONTA' => 'Conta',
            'COD_MOTIVO' => 'Cod  Motivo',
            'MOTIVO' => 'Motivo',
            'OBSERVACAO' => 'Observacao',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
