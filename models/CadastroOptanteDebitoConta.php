<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cadastro_optante_debito_conta".
 *
 * @property int $REGISTRO
 * @property int $TIPO
 * @property int $CONTA_CLIENTE
 * @property int $CONTA_EMPRESA
 * @property int $ENVIADO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class CadastroOptanteDebitoConta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cadastro_optante_debito_conta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO', 'CONTA_CLIENTE', 'CONTA_EMPRESA', 'ENVIADO', 'EXCLUIDO'], 'integer'],
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
            'TIPO' => 'Tipo',
            'CONTA_CLIENTE' => 'Conta  Cliente',
            'CONTA_EMPRESA' => 'Conta  Empresa',
            'ENVIADO' => 'Enviado',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
