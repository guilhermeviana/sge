<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contas_cliente".
 *
 * @property int $REGISTRO
 * @property int $CLIENTE
 * @property int $TIPO_CONTA
 * @property int $BANCO
 * @property string $AGENCIA
 * @property string $CONTA
 * @property string $IDENTIFICADOR_DEBITO
 * @property int $CONTA_TESTE
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class ContasCliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contas_cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CLIENTE', 'TIPO_CONTA', 'BANCO', 'CONTA_TESTE', 'EXCLUIDO'], 'integer'],
            [['DATAREGISTRO'], 'safe'],
            [['AGENCIA'], 'string', 'max' => 10],
            [['CONTA'], 'string', 'max' => 15],
            [['IDENTIFICADOR_DEBITO'], 'string', 'max' => 20],
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
            'CLIENTE' => 'Cliente',
            'TIPO_CONTA' => 'Tipo  Conta',
            'BANCO' => 'Banco',
            'AGENCIA' => 'Agencia',
            'CONTA' => 'Conta',
            'IDENTIFICADOR_DEBITO' => 'Identificador  Debito',
            'CONTA_TESTE' => 'Conta  Teste',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
