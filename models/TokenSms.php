<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "token_sms".
 *
 * @property int $REGISTRO
 * @property string $CHAVE_SEGURANCA
 * @property string $USUARIO_WEB
 * @property string $TOKEN
 * @property string $DATAREGISTRO
 */
class TokenSms extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'token_sms';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DATAREGISTRO'], 'safe'],
            [['CHAVE_SEGURANCA'], 'string', 'max' => 36],
            [['USUARIO_WEB'], 'string', 'max' => 50],
            [['TOKEN'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CHAVE_SEGURANCA' => 'Chave  Seguranca',
            'USUARIO_WEB' => 'Usuario  Web',
            'TOKEN' => 'Token',
            'DATAREGISTRO' => 'Dataregistro',
        ];
    }
}
