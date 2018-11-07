<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_log_acesso".
 *
 * @property int $REGISTRO
 * @property int $TIPO
 * @property int $AGENTE
 * @property int $GERENTE
 * @property int $GERENTE_GERAL
 * @property string $USUARIO
 * @property string $DATA
 * @property string $IP
 */
class WebLogAcesso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_log_acesso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO', 'AGENTE', 'GERENTE', 'GERENTE_GERAL'], 'integer'],
            [['DATA'], 'safe'],
            [['USUARIO'], 'string', 'max' => 50],
            [['IP'], 'string', 'max' => 16],
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
            'AGENTE' => 'Agente',
            'GERENTE' => 'Gerente',
            'GERENTE_GERAL' => 'Gerente  Geral',
            'USUARIO' => 'Usuario',
            'DATA' => 'Data',
            'IP' => 'Ip',
        ];
    }
}
