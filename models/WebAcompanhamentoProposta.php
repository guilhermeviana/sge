<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_acompanhamento_proposta".
 *
 * @property int $REGISTRO
 * @property int $REGISTRO_PROTOCOLO
 * @property int $CLIENTE
 * @property string $PROTOCOLO
 * @property int $STATUS
 * @property string $OBS
 * @property int $PROTOCOLO_FECHADO
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property int $EXCLUIDO
 */
class WebAcompanhamentoProposta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_acompanhamento_proposta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['REGISTRO_PROTOCOLO', 'CLIENTE', 'STATUS', 'PROTOCOLO_FECHADO', 'EXCLUIDO'], 'integer'],
            [['OBS'], 'string'],
            [['DATAREGISTRO'], 'safe'],
            [['PROTOCOLO'], 'string', 'max' => 20],
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
            'REGISTRO_PROTOCOLO' => 'Registro  Protocolo',
            'CLIENTE' => 'Cliente',
            'PROTOCOLO' => 'Protocolo',
            'STATUS' => 'Status',
            'OBS' => 'Obs',
            'PROTOCOLO_FECHADO' => 'Protocolo  Fechado',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
