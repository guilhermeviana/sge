<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atendimento_telemarketing".
 *
 * @property int $REGISTRO
 * @property int $ESTADO
 * @property int $ORIGEM
 * @property int $REGISTRO_CLIENTE
 * @property int $TELEFONISTA
 * @property string $DATA
 * @property string $USUARIO
 * @property string $DATA_REGISTRO
 */
class AtendimentoTelemarketing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'atendimento_telemarketing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ESTADO', 'ORIGEM', 'REGISTRO_CLIENTE', 'TELEFONISTA'], 'integer'],
            [['DATA', 'DATA_REGISTRO'], 'safe'],
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
            'ESTADO' => 'Estado',
            'ORIGEM' => 'Origem',
            'REGISTRO_CLIENTE' => 'Registro  Cliente',
            'TELEFONISTA' => 'Telefonista',
            'DATA' => 'Data',
            'USUARIO' => 'Usuario',
            'DATA_REGISTRO' => 'Data  Registro',
        ];
    }
}
