<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "indentificador_debito_conta".
 *
 * @property int $REGISTRO
 * @property int $SITUACAO
 * @property int $CONTA
 * @property string $IDENTIFICADOR
 * @property int $VERSAO
 * @property string $DATA_REGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class IndentificadorDebitoConta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'indentificador_debito_conta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SITUACAO', 'CONTA', 'VERSAO', 'EXCLUIDO'], 'integer'],
            [['DATA_REGISTRO'], 'safe'],
            [['IDENTIFICADOR'], 'string', 'max' => 20],
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
            'SITUACAO' => 'Situacao',
            'CONTA' => 'Conta',
            'IDENTIFICADOR' => 'Identificador',
            'VERSAO' => 'Versao',
            'DATA_REGISTRO' => 'Data  Registro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
