<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "email_status_envio".
 *
 * @property int $REGISTRO
 * @property int $STATUS
 * @property int $EMAIL
 * @property string $DATA_ENVIO
 * @property string $RESULTADO
 * @property string $USUARIO
 */
class EmailStatusEnvio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'email_status_envio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['STATUS', 'EMAIL'], 'integer'],
            [['DATA_ENVIO'], 'safe'],
            [['RESULTADO'], 'string', 'max' => 255],
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
            'STATUS' => 'Status',
            'EMAIL' => 'Email',
            'DATA_ENVIO' => 'Data  Envio',
            'RESULTADO' => 'Resultado',
            'USUARIO' => 'Usuario',
        ];
    }
}
