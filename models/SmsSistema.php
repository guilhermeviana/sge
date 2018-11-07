<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sms_sistema".
 *
 * @property int $REGISTRO
 * @property int $TIPO
 * @property int $ESTADO
 * @property string $ASSUNTO
 * @property int $CORRETOR
 * @property string $DESTINATARIO
 * @property string $TELEFONE
 * @property string $CORPO_SMS
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class SmsSistema extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sms_sistema';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO', 'ESTADO', 'CORRETOR', 'EXCLUIDO'], 'integer'],
            [['CORPO_SMS'], 'string'],
            [['DATAREGISTRO'], 'safe'],
            [['ASSUNTO'], 'string', 'max' => 255],
            [['DESTINATARIO'], 'string', 'max' => 100],
            [['TELEFONE'], 'string', 'max' => 12],
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
            'ESTADO' => 'Estado',
            'ASSUNTO' => 'Assunto',
            'CORRETOR' => 'Corretor',
            'DESTINATARIO' => 'Destinatario',
            'TELEFONE' => 'Telefone',
            'CORPO_SMS' => 'Corpo  Sms',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
