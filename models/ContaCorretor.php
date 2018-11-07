<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "conta_corretor".
 *
 * @property int $REGISTRO
 * @property int $INTEGRADO
 * @property int $CORRETOR
 * @property int $TIPO_CONTA
 * @property int $BANCO
 * @property string $AGENCIA
 * @property string $CONTA
 * @property string $FAVORECIDO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class ContaCorretor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'conta_corretor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['INTEGRADO', 'CORRETOR', 'TIPO_CONTA', 'BANCO', 'EXCLUIDO'], 'integer'],
            [['DATAREGISTRO'], 'safe'],
            [['AGENCIA'], 'string', 'max' => 10],
            [['CONTA'], 'string', 'max' => 15],
            [['FAVORECIDO'], 'string', 'max' => 100],
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
            'INTEGRADO' => 'Integrado',
            'CORRETOR' => 'Corretor',
            'TIPO_CONTA' => 'Tipo  Conta',
            'BANCO' => 'Banco',
            'AGENCIA' => 'Agencia',
            'CONTA' => 'Conta',
            'FAVORECIDO' => 'Favorecido',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
