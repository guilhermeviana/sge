<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cp_plano_contas".
 *
 * @property int $REGISTRO
 * @property string $CONTA
 * @property int $CONTA_PAI
 * @property string $DESCRICAO
 * @property int $GRUPO
 * @property int $TIPO_CONTA
 * @property int $SALDO
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property int $EXCLUIDO
 */
class CpPlanoContas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cp_plano_contas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CONTA_PAI', 'GRUPO', 'TIPO_CONTA', 'SALDO', 'EXCLUIDO'], 'integer'],
            [['DATAREGISTRO'], 'safe'],
            [['CONTA'], 'string', 'max' => 20],
            [['DESCRICAO', 'USUARIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CONTA' => 'Conta',
            'CONTA_PAI' => 'Conta  Pai',
            'DESCRICAO' => 'Descricao',
            'GRUPO' => 'Grupo',
            'TIPO_CONTA' => 'Tipo  Conta',
            'SALDO' => 'Saldo',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
