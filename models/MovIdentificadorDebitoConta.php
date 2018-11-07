<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mov_identificador_debito_conta".
 *
 * @property int $REGISTRO
 * @property int $CONTA_DEBITO
 * @property int $CONTA_CREDITO
 * @property string $IDENTIFICADOR
 * @property string $AGENCIA
 * @property string $CONTA
 * @property int $TIPO
 * @property string $DATA
 * @property string $DATA_REGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class MovIdentificadorDebitoConta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mov_identificador_debito_conta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CONTA_DEBITO', 'CONTA_CREDITO', 'TIPO', 'EXCLUIDO'], 'integer'],
            [['DATA', 'DATA_REGISTRO'], 'safe'],
            [['IDENTIFICADOR'], 'string', 'max' => 20],
            [['AGENCIA'], 'string', 'max' => 6],
            [['CONTA'], 'string', 'max' => 14],
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
            'CONTA_DEBITO' => 'Conta  Debito',
            'CONTA_CREDITO' => 'Conta  Credito',
            'IDENTIFICADOR' => 'Identificador',
            'AGENCIA' => 'Agencia',
            'CONTA' => 'Conta',
            'TIPO' => 'Tipo',
            'DATA' => 'Data',
            'DATA_REGISTRO' => 'Data  Registro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
