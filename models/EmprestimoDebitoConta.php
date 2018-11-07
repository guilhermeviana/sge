<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emprestimo_debito_conta".
 *
 * @property int $REGISTRO
 * @property int $EMPRESTIMO
 * @property int $EMPRESA
 * @property int $SISDEB_ATIVO
 * @property int $ATIVO
 * @property int $MOTIVO_CANCELAMENTO
 * @property int $SISDEB_CONTA_CLIENTE
 * @property int $CONTA_CLIENTE
 * @property int $SISDEB_CONTA_CREDITO
 * @property int $CONTA_CREDITO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class EmprestimoDebitoConta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emprestimo_debito_conta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EMPRESTIMO', 'EMPRESA', 'SISDEB_ATIVO', 'ATIVO', 'MOTIVO_CANCELAMENTO', 'SISDEB_CONTA_CLIENTE', 'CONTA_CLIENTE', 'SISDEB_CONTA_CREDITO', 'CONTA_CREDITO', 'EXCLUIDO'], 'integer'],
            [['DATAREGISTRO'], 'safe'],
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
            'EMPRESA' => 'Empresa',
            'SISDEB_ATIVO' => 'Sisdeb  Ativo',
            'ATIVO' => 'Ativo',
            'MOTIVO_CANCELAMENTO' => 'Motivo  Cancelamento',
            'SISDEB_CONTA_CLIENTE' => 'Sisdeb  Conta  Cliente',
            'CONTA_CLIENTE' => 'Conta  Cliente',
            'SISDEB_CONTA_CREDITO' => 'Sisdeb  Conta  Credito',
            'CONTA_CREDITO' => 'Conta  Credito',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
